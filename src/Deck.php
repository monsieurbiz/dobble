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

    /**
     * @var BaseDeck
     */
    private $deck;

    /**
     * Deck constructor.
     */
    public function __construct()
    {
        $deckGenerator = new DeckGenerator(self::NUMBER_OF_ELEMENTS_PER_CARD);
        $this->deck = $deckGenerator->generate();

        foreach ($this->deck->getCards() as $card) {
            $mbizCard = new Card($card);
        }
    }

    public function getCards(): array
    {
        return $this->deck->getCards();
    }

    /**
     * @return int
     */
    public function count()
    {
        return count($this->deck);
    }

    /**
     * @return bool
     * @throws DobbleException
     */
    public function validate()
    {
        return DeckValidator::validate($this);
    }
}
