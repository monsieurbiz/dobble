<?php

declare(strict_types=1);

namespace Mbiz\Dobble\Symbol;

class Emoji implements SymbolInterface, EmojiInterface
{

    /** @var string */
    private $emoji;

    /**
     * @param string $emoji
     */
    public function setEmoji(string $emoji): void
    {
        $this->emoji = $emoji;
    }

    /**
     * @return string
     */
    public function getEmoji(): string
    {
        return $this->emoji;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->getEmoji();
    }

}