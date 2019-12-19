<?php

class WeaponFactory
{
    public function getWeapon($weaponName)
    {
        return new $weaponName();
    }
}
