#!/usr/bin/env php
<?php

require __DIR__.'/../vendor/autoload.php';

use Mbiz\Dobble\MbizCommand;
use Symfony\Component\Console\Application;

$app = new Application();
$app->add(new MbizCommand());
$app->run();