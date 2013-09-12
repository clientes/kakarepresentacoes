<?php

class PHP54Test extends PHPUnit_Framework_TestCase
{
    public function test_REQUEST_TIME_FLOAT_exists()
    {
        $this->assertArrayHasKey('REQUEST_TIME_FLOAT', $_SERVER);
    }

    public function test_REQUEST_TIME_FLOAT_is_double()
    {
        $this->assertTrue( is_double($_SERVER['REQUEST_TIME_FLOAT']), gettype($_SERVER['REQUEST_TIME_FLOAT']));
    }

    public function test_constants()
    {
        $constants = 'JSON_PRETTY_PRINT JSON_UNESCAPED_SLASHES JSON_UNESCAPED_UNICODE';
        $constants = explode(' ', $constants);

        foreach ($constants as $constant) {
            $this->assertTrue(defined($constant), $constant);
        }
    }

    public function test_http_response_code_exists()
    {
        $this->assertTrue( function_exists('http_response_code') );
    }

    public function test_http_response_code_add_header()
    {
        $this->markTestIncomplete("can't check if header was sent");
    }
}
