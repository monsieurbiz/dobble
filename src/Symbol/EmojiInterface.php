<?php

declare(strict_types=1);

namespace Mbiz\Dobble\Symbol;

use Mbiz\Dobble\Collection\Value\Emoji;

interface EmojiInterface
{

    public function setEmoji(Emoji $emoji): void;
    public function getEmoji(): Emoji;

}