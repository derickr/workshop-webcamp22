<?php
function logIn($userName, #[\SensitiveParameter] $password)
{
    throw new \Exception('Error');
}

logIn( 'derick', 'secret-elephpant' );