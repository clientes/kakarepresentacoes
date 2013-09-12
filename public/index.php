<?php

// versão mínima do php necessária
version_compare(PHP_VERSION, '5.3.7', '>=')
or exit('precisa do PHP 5.3.7 ou superior. Versao atual: ' . PHP_VERSION);

// o site começa neste arquivo
require_once '../php/boot.php';
