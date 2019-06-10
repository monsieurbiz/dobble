<?php

declare(strict_types=1);

namespace Mbiz\Dobble\Generator;

use Mbiz\Dobble\DeckInterface;

interface GeneratorInterface
{

    /**
     * Generate the Deck
     *
     * @param DeckInterface $deck
     *
     * @return void
     */
    public function generate(DeckInterface $deck): void;

}
