<?php

declare(strict_types=1);

namespace Mbiz\Dobble\Collection;

class EmojiCollection implements CollectionInterface
{

    public function getValues(): array
    {
        return [
            '🍇', '🍌', '🍍', '🍎', '🍑', '🍒', '🍓', '🥝', '🥥',
            '🥑', '🍆', '🥔', '🥕', '🍄', '🥐', '🍔', '🍕', '🌭',
            '🍿', '🍺', '🍸', '💣', '❤️', '⌚', '🦄', '🎈', '🎁',
            '🦀', '📞', '🖨️', '⌨️', '📀️', '📸', '🖥️', '🐟', '🔎',
            '💡', '✉️', '✏️', '🔑', '🚽', '🛏️', '🧽', '💩', '⭐',
            '🔥', '🛹', '⚽', '🏓', '🎱', '🐓', '🎲', '🎸', '🥁',
            '🦋', '🌈', '😀',
        ];
    }

}