<?php

// Colocar aqui funções globais, talvez separadas por namespace

function debug($message)
{
    $message = var_export($message, true);
    Analog\Analog::debug($message);
}
