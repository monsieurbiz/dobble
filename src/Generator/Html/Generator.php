<?php

declare(strict_types=1);

namespace Mbiz\Dobble\Generator\Html;

use Mbiz\Dobble\DeckInterface;
use Mbiz\Dobble\Exception\NotWritableOutputDirectoryException;
use Mbiz\Dobble\Generator\GeneratorInterface;
use Twig\Environment as TwigEnvironment;
use Twig\Loader\FilesystemLoader as TwigFilesystemLoader;

class Generator implements GeneratorInterface
{
    const TEMPLATE_FOLDER = 'templates';

    /** @var string */
    private $outputDirectory;

    /** @var string|null */
    private $templateDirectory;

    /**
     * Generator constructor.
     *
     * @param string $outputDirectory
     * @param string|null $templateDirectory
     */
    public function __construct(string $outputDirectory, ?string $templateDirectory)
    {
        $this->outputDirectory = $outputDirectory;
        $this->templateDirectory = $templateDirectory;
    }

    /**
     * @param DeckInterface $deck
     *
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     * @throws NotWritableOutputDirectoryException
     */
    public function generate(DeckInterface $deck): void
    {
        if (!is_dir($this->outputDirectory)) {
            mkdir($this->outputDirectory);
        }

        if (!is_writable($this->outputDirectory)) {
            throw new NotWritableOutputDirectoryException();
        }
    
        $loader = new TwigFilesystemLoader($this->templateDirectory ?? self::TEMPLATE_FOLDER);
        $twig = new TwigEnvironment($loader);

        file_put_contents(
            $this->outputDirectory . DIRECTORY_SEPARATOR .  'deck.html',
            $twig->render('deck.html.twig', [
                'deck' => $deck
            ])
        );
    }
}
