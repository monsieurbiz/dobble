<?php

declare(strict_types=1);

namespace Mbiz\Dobble\Collection\Value;

trait ValueTrait
{

    private $value;

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;
        return $this;
    }

}