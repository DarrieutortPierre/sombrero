<?php

class WeaponFactory
{
    //$weapons = ['Gun', ]
    public function getWeapon($weaponName)
    {
        //return d'une arme avec le nom comme classe exemple return new Gun(3);
        return new $weaponName();
    }
}
