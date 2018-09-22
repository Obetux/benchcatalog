<?php

namespace App\Command;

use App\Entity\VodContent;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use DOMDocument;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class AppLoadVodGracenoteCommand extends Command
{
    protected static $defaultName = 'app:load-vod-gracenote';

    private $doctrine;

    public function __construct(EntityManagerInterface $doctrine)
    {
        $this->doctrine = $doctrine;

        parent::__construct();
    }


    protected function configure()
    {
        $this
            ->setDescription('Add a short description for your command')
            ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {


        $io = new SymfonyStyle($input, $output);
        $arg1 = $input->getArgument('arg1');

        $doc = new DOMDocument();

//        $doc->load('e:\wamp64\www\benchcatalog\public\provider\gracenote\todo\on_mex_samp_ovd_v4.0_20180913.xml');
        $doc->load('e:\wamp64\www\benchcatalog\public\provider\gracenote\todo\on_samp_ovd_v4.0_20180913.xml');



        $series = $doc->getElementsByTagName("series");


        /** @var \DOMElement $serie */
        foreach ($series as $serie) {

//            dump($serie->getElementsByTagName('title')->item(0)->nodeValue);exit;

            $seriesTitle = $serie->getElementsByTagName('title')->item(0)->nodeValue;
            $episodes = $serie->getElementsByTagName('episode');
//    dump($episodes);exit;
            foreach ($episodes as $episode) {
                $vod = new VodContent();
                $vod->setSource('gracenote');

                $vod->setAssetId(($episode->getElementsByTagName('tmsId')->item(0))?$episode->getElementsByTagName('tmsId')->item(0)->nodeValue:'');
                $vod->setTitle(($episode->getElementsByTagName('title')->item(0))?$episode->getElementsByTagName('title')->item(0)->nodeValue:'');
                $vod->setSeriesTitle($seriesTitle);
                $vod->setSummaryShort(substr(($episode->getElementsByTagName('description')->item(0))?$episode->getElementsByTagName('description')->item(0)->nodeValue:'',0,255));
                $vod->setSummaryLong(($episode->getElementsByTagName('description')->item(0))?$episode->getElementsByTagName('description')->item(0)->nodeValue:'');
                $vod->setRating($episode->getElementsByTagName('rating')->item(0)->nodeValue);
                $vod->setYear(($episode->getElementsByTagName('airDate')->item(0))?$episode->getElementsByTagName('airDate')->item(0)->nodeValue:'');
                $vod->setCountry('');
                $vod->setActorsDisplay('');
                $vod->setDirectors('');
                $vod->setGenre(($episode->getElementsByTagName('genre')->item(0))?$episode->getElementsByTagName('genre')->item(0)->nodeValue:'');
                $vod->setCategory('');
                $vod->setShowType('');

                $vod->setSeasonNumber(($episode->getElementsByTagName('seasonNumber')->item(0))?$episode->getElementsByTagName('seasonNumber')->item(0)->nodeValue:'');

                $vod->setSeasonName('');

                $vod->setEpisodeName(($episode->getElementsByTagName('title')->item(0))?$episode->getElementsByTagName('title')->item(0)->nodeValue:'');

                $vod->setEpisodeNumber(($episode->getElementsByTagName('episodeNumber')->item(0))?$episode->getElementsByTagName('episodeNumber')->item(0)->nodeValue:'');
                $this->doctrine->persist($vod);
                $this->doctrine->flush();
            }

        }



        $io->success('You have a new command! Now make it your own! Pass --help to see your options.');
    }
}
