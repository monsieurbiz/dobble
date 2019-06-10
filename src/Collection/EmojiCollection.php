<?php

declare(strict_types=1);

namespace Mbiz\Dobble\Collection;

class EmojiCollection implements CollectionInterface
{

    public function getValues(): array
    {
        $emojis = [
            '🤣', '🤡', '😨', '🤔', '🤨', '😐', '😑', '😶', '🙄',
            '😏', '😣', '😥', '😳', '🤪', '😵', '😡', '😠', '🤬',
            '😷', '🤒', '🤕', '🤢', '🤮', '🤧', '😇', '🤠', '🤲',
            '👐', '🙌', '👏', '🤝', '👍', '👎', '👊', '✊', '🤛',
            '🤜', '🍓', '🍈', '🍒', '🍑', '🍍', '😺', '😸', '😹',
            '😻', '🖐', '🖖', '👋', '🤙', '💪', '🐦', '🍄', '💻',
            '🤕', '🤢', '🤮',
        ];

        $values = [];

        foreach ($emojis as $emoji) {
            $values[] = new Value\Emoji();
        }
    }

}