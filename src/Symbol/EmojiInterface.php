<?php

declare(strict_types=1);

namespace Mbiz\Dobble\Symbol;

interface EmojiInterface
{

    public function setEmoji(string $emoji): void;
    public function getEmoji(): string;

}