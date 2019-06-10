<?php
declare(strict_types=1);

namespace Mbiz\Dobble\Command;

use Mbiz\Dobble\Deck;
use Mbiz\Dobble\Generator\Html\Generator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
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
        $this->addArgument('outputDirectory', InputArgument::REQUIRED, 'Directory where the HTML files will be generated.');
        $this->addArgument('templateDirectory', InputArgument::OPTIONAL, 'Directory where the HTML templates are set.');
        $this->addArgument('cacheDirectory', InputArgument::OPTIONAL, 'Directory where the HTML twig cache is generated.');
    }
    
    /**
     * Execute.
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     *
     * @throws \Marmelab\Dobble\DobbleException
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // Get a deck, generate it in HTML
        $deck = new Deck();
        $generator = new Generator(
            $input->getArgument('outputDirectory'),
            $input->getArgument('templateDirectory'),
            $input->getArgument('cacheDirectory')
        );
        $generator->generate($deck);

        $output->writeln(sprintf('Elements per card: <info>%d</info>', Deck::NUMBER_OF_ELEMENTS_PER_CARD));
        $output->writeln(sprintf('Deck generated with <info>%d</info> cards', count($deck)));
        $output->writeln('Cards :');

        foreach ($deck->getCards() as $card) {
            $output->writeln(sprintf('- %s', $card));
        }
    }

}
