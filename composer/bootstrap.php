<?php

require __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use MyProject\Hello;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('app.log', Logger::WARNING));

// add records to the log
$log->warning('Mensagem de warning...');
$log->error('Mensagem de erro...');
$log->warning((new Hello)->say('Lucas'));