<?php

declare(strict_types=1);

namespace Mbiz\Dobble\Collection\Value;

interface ValueInterface
{
    public function setValue(string $value): self;
    public function getValue(): string;
}