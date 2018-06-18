<?php

namespace App\Command;

use App\Entity\VODContent;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use DOMDocument;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class AppLoadVodCvaCommand extends Command
{
    protected static $defaultName = 'app:load-vod-cva';

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
//        $doc->load('C:\wamp64\www\benchcatalog\public\HBO_Sola_Contra_el_Poder_HD_STR.XML');
        $doc->load('C:\wamp64\www\benchcatalog\public\HBO_Succession_T1_E01_HD_STR.XML');


        $vod = new VODContent();


        $adi = $doc->getElementsByTagName("ADI")->item(0);

        $package = $adi->getElementsByTagName('Metadata')->item(0);
        $packageAms = $package->getElementsByTagName('AMS')->item(0);
//        dump($packageAms->getAttribute('Asset_Class'));

        $asset = $adi->getElementsByTagName('Asset')->item(0);
        $assetMetadata = $asset->getElementsByTagName('Metadata')->item(0);
        $assetMetadataAMS = $assetMetadata->getElementsByTagName('AMS')->item(0);
//        dump($assetMetadataAMS->getAttribute('Asset_Class') );

        $assetMetadataAppData = $assetMetadata->getElementsByTagName('App_Data');

        /** @var \DOMElement $data */
        foreach ($assetMetadataAppData as $data) {
//            dump($data->getAttribute('App'));
//            dump($data->getAttribute('Name'));
//            dump($data->getAttribute('Value'));
            $value = $data->getAttribute('Value');
            switch ($data->getAttribute('Name')){
                case 'Title':
                    $vod->setTitle($value);
                    break;
                case 'Summary_Short':
                    $vod->setSummaryShort($value);
                    break;
                case 'Summary_Long':
                    $vod->setSummaryLong($value);
                    break;
                case 'Rating':
                    $vod->setRating($value);
                    break;
                case 'Year':
                    $vod->setYear($value);
                    break;
                case 'Country_of_Origin':
                    $vod->setCountry($value);
                    break;
                case 'Actors_Display':
                    $vod->setActorsDisplay($value);
                    break;
                case 'Director':
                    $vod->setDirectors($value);
                    break;
                case 'Genre':
                    $vod->setGenre($value);
                    break;
                case 'Category':
                    $vod->setCategory($value);
                    break;
                case 'Show_Type':
                    $vod->setShowType($value);
                    break;

                case 'Series_Title':
                    $vod->setSeriesTitle($value);
                    break;
                case 'Season_Number':
                    $vod->setSeasonNumber($value);
                    break;
                case 'Season_Title':
                    $vod->setSeasonName($value);
                    break;
                case 'Episode_Name':
                    $vod->setEpisodeName($value);
                    break;
                case 'Episode_Number':
                    $vod->setEpisodeNumber($value);
                    break;

            }
        }

        $this->doctrine->persist($vod);
        $this->doctrine->flush();

        $io->success('You have a new command! Now make it your own! Pass --help to see your options.');
    }
}
