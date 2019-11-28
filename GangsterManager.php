<?php

class GangsterManager
{
    public static function createGangsterFromCli()
    {
        $name = CliUtil::getFromCli("What is your name ?");

        return new Gangster($name);
    }
}
