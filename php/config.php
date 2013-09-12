<?php

/**
 * Todas as configurações do site devem ser colocadas neste arquivo
 */

// utiliza o autoload do composer, para auto carregar as classes
require_once 'vendor/autoload.php';
require_once 'helpers.php';

Sinergia\Sinergia\Error::toException();
Sinergia\Sinergia\Error::enableDefaultExceptionHandler();

Analog\Analog::handler( Analog\Handler\ChromeLogger::init() );

set_include_path(dirname(__DIR__).'/pages');

$app = new App();
