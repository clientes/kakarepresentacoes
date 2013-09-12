<?php

use Sinergia\Sinergia\Helpers as H;
use Sinergia\Sinergia\Request;

class App
{
    public function __invoke()
    {
        $request = new Request();
        $TPL = H::render($request->path ?: 'home');
        $output = H::render('layout/app', compact('TPL'));

        return $output;
    }
}
