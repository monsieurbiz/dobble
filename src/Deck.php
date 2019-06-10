<?php
declare(strict_types=1);

namespace Mbiz\Dobble;

use Marmelab\Dobble\Deck as BaseDeck;
use Marmelab\Dobble\DeckGenerator;
use Marmelab\Dobble\DeckValidator;
use Marmelab\Dobble\DobbleException;

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

        foreach ($basedeck->getCards() as $card) {
            $this->append(new Card($card));
        }
    }

    public function append(Card $card)
    {
        array_push($this->cards, $card);
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
