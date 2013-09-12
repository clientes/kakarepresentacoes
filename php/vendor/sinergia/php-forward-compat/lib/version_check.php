<?php

if ( version_compare(PHP_VERSION, '5.4', '<') ) {
    require_once __DIR__.'/php54.php';
}

if ( version_compare(PHP_VERSION, '5.5', '<') ) {
    require_once __DIR__.'/php55.php';
}
