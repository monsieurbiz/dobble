<?php

declare(strict_types=1);

namespace Mbiz\Dobble;

interface CardInterface
{

    /**
     * Returns all the symbols of the card as ASCII characters or Images
     *
     * @return array
     */
    public function getSymbols(): array;

}