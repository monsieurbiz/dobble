<?php
declare(strict_types=1);

namespace Mbiz\Dobble\Factory;


use Mbiz\Dobble\Symbol\EmojiInterface;
use Mbiz\Dobble\Symbol\SymbolInterface;

class SymbolFactory implements SymbolInterface
{

    public function create($symbol)
    {
        return EmojiInterface::EMOJIS[$symbol];
    }

}