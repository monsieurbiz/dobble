<?php

declare(strict_types=1);

namespace Mbiz\Dobble\Symbol;

use Mbiz\Dobble\Collection\Value\Emoji as EmojiValue;

class Emoji implements SymbolInterface, EmojiInterface
{

    /** @var EmojiValue */
    private $emoji;

    /**
     * @param EmojiValue $emoji
     */
    public function setEmoji(EmojiValue $emoji): void
    {
        $this->emoji = $emoji;
    }

    /**
     * @return EmojiValue
     */
    public function getEmoji(): EmojiValue
    {
        return $this->emoji;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->getEmoji()->getValue();
    }

}