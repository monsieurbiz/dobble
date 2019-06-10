<?php
declare(strict_types=1);

namespace Mbiz\Dobble\Factory;


use Mbiz\Dobble\Collection\CollectionInterface;
use Mbiz\Dobble\Collection\EmojiCollection;
use Mbiz\Dobble\Collection\FilesCollection;
use Mbiz\Dobble\Collection\Value\Emoji as EmojiValue;
use Mbiz\Dobble\Collection\Value\File as FileValue;
use Mbiz\Dobble\Symbol\Emoji as EmojiSymbol;
//use Mbiz\Dobble\Symbol\File as FileSymbol;
use Mbiz\Dobble\Symbol\SymbolInterface;

class SymbolFactory implements FactoryInterface
{

    /** @var CollectionInterface[] */
    private $collections;

    /** @var array */
    public $mappingKeys = [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K',
        'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V',
        'W', 'X', 'Y', 'Z', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
        12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25,
        26, 27, 28, 29, 30, 31,
    ];

    /** @var array */
    public $mapping = [];

    /**
     * SymbolFactory constructor.
     */
    public function __construct()
    {
        $this->collections[] = new EmojiCollection();
        $this->collections[] = new FilesCollection();
        $this->generateMapping();
    }

    private function generateMapping()
    {
        $values = [];

        foreach ($this->collections as $collection) {
            $values += $collection->getValues();
        }

        shuffle($values);

        $mappingValues = array_slice($values, 0, count($this->mappingKeys));
        $this->mapping = array_combine($this->mappingKeys, $mappingValues);
    }

    /**
     * @param $symbolValue
     *
     * @return SymbolInterface
     */
    public function create($symbolValue): SymbolInterface
    {
        $value = $this->mapping[$symbolValue];

        switch (true) {
            case $value instanceof EmojiValue:
                $symbol = new EmojiSymbol();
                $symbol->setEmoji($value);
                break;
            case $value instanceof FileValue:
                $symbol = new File();
                $symbol->setEmoji($value);
                break;
        }

        return $symbol;
    }

}