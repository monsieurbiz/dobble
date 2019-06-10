<?php

declare(strict_types=1);

namespace Mbiz\Dobble;

class Card implements CardInterface
{
    public function __construct($card)
    {
        foreach ($card as $symbol) {

        }
    }

    public function getSymbols(): array
    {
        // TODO: Implement getSymbols() method.
        return [];
    }

}