<?php

class WeaponManager
{
    public static function chooseWeaponFromCli()
    {        

        $files = Scandir::getDir();

        return new $files[intval(CliUtil::getFromCli('Choose a weapon :'))];
    }
}
