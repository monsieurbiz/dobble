<?php

declare(strict_types=1);

namespace Mbiz\Dobble\Generator\Html;

use Mbiz\Dobble\DeckInterface;
use Mbiz\Dobble\Generator\GeneratorInterface;

class Generator implements GeneratorInterface
{

    /** @var string */
    private $outputDirectory;

    /**
     * Generator constructor.
     *
     * @param string $outputDirectory
     */
    public function __construct(string $outputDirectory)
    {
        $this->outputDirectory = $outputDirectory;
    }
        
    /**
     * @param DeckInterface $deck
     */
    public function generate(DeckInterface $deck): void
    {
    }

}
