<?php

namespace App\Command;

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

        $output->writeln([
            'User Creator',
            '============',
            '',
        ]);

        if ($arg1) {
            $io->note(sprintf('You passed an argument: %s', $arg1));
        }

        if ($input->getOption('option1')) {
            $io->note(sprintf('You passed an option: %s', $input->getOption('option1')));
        }
        $io->comment('User Creator');

        $doc = new DOMDocument();
        $doc->load('E:\wamp64\www\benchcatalog\public\programs.xml');

        $programs = $doc->getElementsByTagName("program");
        foreach ($programs as $program) {
            $io->comment('NUEVO CONTENIDO');
            /** @var \DOMElement $program */
            dump($program->getAttribute('ProgramId'));
            dump($program->getAttribute('seriesId'));
            /** @var \DOMNodeList $titles */
            $titles = $program->getElementsByTagName('titles');
            $title = $titles->item(0)->nodeValue;

            $io->comment('TITULO');
            dump(trim($title ));

            /** @var \DOMNodeList $descriptions */
            $descriptions = $program->getElementsByTagName('descriptions');

            $io->comment('DESCRIPCION');
            for ($i=0; $i < $descriptions->item(0)->getElementsByTagName('desc')->length; $i++)
            {
                dump($descriptions->item(0)->getElementsByTagName('desc')->item($i)->getAttribute('type') );
                dump($descriptions->item(0)->getElementsByTagName('desc')->item($i)->nodeValue );
            }

            $io->comment('CAST');
            /** @var \DOMNodeList $cast */
            $cast = $program->getElementsByTagName('cast');

            if (($cast) && ($cast->length)) {
                for ($i=0; $i < $cast->item(0)->getElementsByTagName('member')->length; $i++) {
                    $member = $cast->item(0)->getElementsByTagName('member')->item($i);
                    dump($member->getAttribute('personId'));
                    dump($member->getAttribute('ord'));
                    dump($member->getElementsByTagName('role')->item(0)->nodeValue);

                    $name = $member->getElementsByTagName('name')->item(0);
                    dump($name->getElementsByTagName('first')->item(0)->nodeValue);
                    dump($name->getElementsByTagName('last')->item(0)->nodeValue);
                }

//                $members = $cast->getElementsByTagName('member');
//                foreach( $members as $member )
//                {
//                    dump($member);
//                }
            }

            $io->comment('TIPO PROGRAMA');
            $progType = $program->getElementsByTagName('progType');
            dump($progType->item(0)->nodeValue);

            $io->comment('GENERO');
            $genres = $program->getElementsByTagName('genres');
            $genres = $genres->item(0)->nodeValue;
            dump(trim($genres));

            $io->comment('RATINGS');
            $ratings = $program->getElementsByTagName('ratings');
            $rating = $ratings->item(0)->getElementsByTagName('rating')->item(0);
            dump($rating->getAttribute('code'));
            dump($rating->getAttribute('ratingsBody'));

            $io->comment('IMAGENES');
            $images = $program->getElementsByTagName('images');
            if (($images) && ($images->length)) {
                for ($i = 0; $i < $images->item(0)->getElementsByTagName('image')->length; $i++) {
                    $image = $images->item(0)->getElementsByTagName('image')->item($i);
                    dump($image->getAttribute('imageId'));
                    dump($image->getAttribute('action'));
                    dump($image->getAttribute('tier'));
                    dump($image->getAttribute('category'));
                    dump($image->getAttribute('layout'));
                    dump($image->getAttribute('width'));
                    dump($image->getAttribute('height'));
                    dump($image->getAttribute('type'));
                    dump($image->getAttribute('primary'));

                   $uri =  $image->getElementsByTagName('URI')->item(0);
                    dump($uri->nodeValue);
                }
            }
            $io->success('FIN CONTENIDO');

        }

        $io->success('You have a new command! Now make it your own! Pass --help to see your options.');
    }
}
