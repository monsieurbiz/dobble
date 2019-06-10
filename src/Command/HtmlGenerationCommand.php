<?php
declare(strict_types=1);

namespace Mbiz\Dobble\Command;

use Mbiz\Dobble\Deck;
use Mbiz\Dobble\Generator\Html\Generator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HtmlGenerationCommand extends Command
{

    /**
     * Configure the command.
     */
    protected function configure()
    {
        $this->setName('dobble:generate:html');
        $this->setDescription('Generate the Dobble game in HTML.');
    }

    /**
     * Execute.
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // Get a deck, generate it in HTML
        $deck = new Deck();
        $generator = new Generator();
        $generator->generate($deck);
    }

}