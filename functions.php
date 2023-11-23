<?php

function passwordGenerator($arg1)
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@!?&.:;+_-%';
    $length = $_GET['length_string'];
    $Password = '';
    // var_dump($characters, $length);
    for ($i = 0; $i < $length; $i++) {
        $randChars = mt_rand(0, strlen($characters) - 1);
        $Password .= $characters[$randChars];
    }
    return $Password;
}
