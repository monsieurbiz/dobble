<?php
declare(strict_types=1);

namespace Mbiz\Dobble;


use Marmelab\Dobble\DeckGenerator;

class Deck implements DeckInterface
{
    /**
     * @var array
     */
    const NUMBER_OF_ELEMENTS_PER_CARD = 8;

    public function __construct()
    {
        $deckGenerator = new DeckGenerator(self::NUMBER_OF_ELEMENTS_PER_CARD, DeckGenerator::ALGO_DEFAULT);
    }

    public function getCards(): array
    {
        // TODO: Implement getCards() method.
    }
}