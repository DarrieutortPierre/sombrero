<?php

class WeaponManager
{
    public static function chooseWeaponFromCli()
    {
        $files = Scandir::getDir();

        echo "\n";
        return new $files[intval(CliUtil::getFromCli("\e[1mChoose the weapon you want:\e[0m\n"))];
    }
}
