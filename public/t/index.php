<?php

use Sinergia\Gd\ThumbController;

require_once __DIR__.'/../../php/vendor/autoload.php';

Sinergia\Sinergia\Error::toException();
Sinergia\Sinergia\Error::enableDefaultExceptionHandler();

$controller = new ThumbController();
$controller->dispatch(null, dirname(__DIR__), __DIR__);
