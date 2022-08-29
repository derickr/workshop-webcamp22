<?php
class Elephpant
{
    public static function counter()
    {
        static $i = 0;

        return ++$i;
    }
}
class Pachyderm extends Elephpant {}

echo Elephpant::counter(), "\n";
echo Elephpant::counter(), "\n";
echo Pachyderm::counter(), "\n";
echo Pachyderm::counter(), "\n";