<?php

class WeaponManager
{
    public static function chooseWeaponFromCli()
    {
        CliUtil::getFromCli('Choose a weapon : ');

        switch ($i) {
            case 0:
                return new Weapon('Gun');
                break;
            case 1:
                return new Weapon('Revolver');

                break;
            case 2:
                return new Weapon('Sword');
                break;
        }
        // return new Gangster($name);
    }
}
