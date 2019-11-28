<?php

class Weapon
{
    public $accuracy = 0;

    public function isMiss(): bool
    {
        return (bool) rand(0, $this->accuracy);
    }

    public function shoot(array &$gangsters)
    {
        unset($gangsters[array_rand($gangsters)]);
    }
}
