<?php

declare(strict_types=1);

namespace Mbiz\Dobble\Generator\Html;

use Mbiz\Dobble\DeckInterface;
use Mbiz\Dobble\Generator\GeneratorInterface;

class Generator implements GeneratorInterface
{

    /**
     * @param DeckInterface $deck
     */
    public function generate(DeckInterface $deck): void
    {
        return;
    }

}
