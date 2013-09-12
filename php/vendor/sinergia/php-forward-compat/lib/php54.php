<?php

// if not defined, set REQUEST_TIME_FLOAT to current microtime
// http://www.php.net/manual/en/reserved.variables.server.php#REQUEST_TIME_FLOAT
@$_SERVER['REQUEST_TIME_FLOAT'] or $_SERVER['REQUEST_TIME_FLOAT'] = microtime(true);

// json_encode: just define constants, but has no use
// http://php.net/json-encode
defined('JSON_PRETTY_PRINT')      || define('JSON_PRETTY_PRINT', 0);
defined('JSON_UNESCAPED_SLASHES') || define('JSON_UNESCAPED_SLASHES', 0);
defined('JSON_UNESCAPED_UNICODE') || define('JSON_UNESCAPED_UNICODE', 0);

// http://php.net/http_response_code
if ( ! function_exists('http_response_code') ) {
    function http_response_code($newcode = NULL)
    {
        static $code = 200;

        if ($newcode !== NULL) {
            header("X-PHP-Response-Code: $newcode", true, $newcode);
            if( ! headers_sent() )
                $code = $newcode;
        }

        return $code;
    }
}
