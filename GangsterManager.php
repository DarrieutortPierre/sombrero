<?php

class GangsterManager
{
    public static function createGangsterFromCli($gangsterNumber)
    {
        echo "\n";
        $name = CliUtil::getFromCli("\e[1mWhat is the name of the gangster " . ($gangsterNumber + 1) . "?\e[0m\n");

        return new Gangster($name);
    }
}
