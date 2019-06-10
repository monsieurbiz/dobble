<?php

declare(strict_types=1);

namespace Mbiz\Dobble;

use Mbiz\Dobble\Factory\SymbolFactory;

class Card implements CardInterface
{
    private $symbols = [];

    public function __construct($card, SymbolFactory $factory)
    {
        foreach ($card->getSymbols() as $symbol) {
            $this->symbols[] = $factory->create($symbol);
        }
    }

    public function getSymbols(): array
    {
        return $this->symbols;
    }


    public function __toString()
    {
        return sprintf('<Card: %s>', implode(', ', $this->symbols));
    }
}