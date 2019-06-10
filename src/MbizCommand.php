<?php
declare(strict_types=1);

namespace Mbiz\Dobble;

use Marmelab\Dobble\DeckGenerator;
use Marmelab\Dobble\DobbleException;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MbizCommand extends Command
{
    const NUMBER_OF_ELEMENTS_PER_CARD = 8;

    /**
     * Configure the command.
     */
    protected function configure()
    {
        $this->setName('dobble:run');
        $this->setDescription('Command-line card generator for dobble-like game');
    }

    /**
     * Execute.
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|null
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $nbElements = self::NUMBER_OF_ELEMENTS_PER_CARD;

        try {
            $mode = DeckGenerator::ALGO_DEFAULT;
            $generator = new DeckGenerator($nbElements, $mode);
            $deck = $generator->generate();
        } catch (DobbleException $e) {
                $output->writeln(sprintf('Error: <error>%s</error>', $e->getMessage()));
                return 1;
        }

        $output->writeln(sprintf('Elements per card: <info>%d</info>', $nbElements));
        $output->writeln(sprintf('Deck generated with <info>%d</info> cards', count($deck)));
        $output->writeln('Cards :');

        foreach ($deck->getCards() as $card) {
            $output->writeln(sprintf('- %s', $card));
        }
        if ($deck->validate()) {
            $output->writeln('Deck is valid: <info>true</info>');
        }
    }
}