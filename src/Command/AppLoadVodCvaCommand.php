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

        $programs = $doc->getElementsByTagName( "program" );
        foreach( $programs as $program )
        {
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

            $io->comment('TIPO PROGRAMA');
            $progType = $program->getElementsByTagName('progType');
            dump($progType->item(0)->nodeValue);
//            dump($descriptions->item(0)->getElementsByTagName('desc')->item(1)->nodeValue );

//            dump($program);exit;
        }

        $io->success('You have a new command! Now make it your own! Pass --help to see your options.');
    }
}
