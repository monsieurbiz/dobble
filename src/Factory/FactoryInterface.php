<?php
declare(strict_types=1);

namespace Mbiz\Dobble\Factory;


use Mbiz\Dobble\Symbol\SymbolInterface;

interface FactoryInterface
{

    public function create(string $symbol): SymbolInterface;

}