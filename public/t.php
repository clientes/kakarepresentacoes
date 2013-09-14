<?php

require_once __DIR__.'/../php/vendor/autoload.php';

Sinergia\Sinergia\Error::toException();
Sinergia\Sinergia\Error::enableDefaultExceptionHandler();
Sinergia\Sinergia\Util::ob_start();

$controller = new Sinergia\Gd\ThumbController();
$controller->publicDir = __DIR__;
$controller->cacheDir = __DIR__.'/t';

$controller->dispatch();
