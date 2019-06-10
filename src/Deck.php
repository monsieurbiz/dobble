<?php
declare(strict_types=1);

namespace Mbiz\Dobble;

use Marmelab\Dobble\DeckGenerator;
use Mbiz\Dobble\Factory\SymbolFactory;

class Deck implements DeckInterface, \Countable
{
    /**
     * @var array
     */
    const NUMBER_OF_ELEMENTS_PER_CARD = 8;

    private $cards = [];

    /**
     * Deck constructor.
     */
    public function __construct()
    {
        $deckGenerator = new DeckGenerator(self::NUMBER_OF_ELEMENTS_PER_CARD);
        $basedeck = $deckGenerator->generate();

        $factory = new SymbolFactory();

        foreach ($basedeck->getCards() as $card) {
            $this->cards[] = new Card($card, $factory);
        }
    }

    public function getCards(): array
    {
        return $this->cards;
    }

    /**
     * @return int
     */
    public function count()
    {
        return count($this->getCards());
    }
}
