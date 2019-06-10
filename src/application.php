#!/usr/bin/env php
<?php

require __DIR__.'/../vendor/autoload.php';

use Mbiz\Dobble\Command\HtmlGenerationCommand;
use Symfony\Component\Console\Application;

$app = new Application();
$app->add(new HtmlGenerationCommand());
$app->run();