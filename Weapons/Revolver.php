<?php

class Revolver extends Gun
{
    public $accuracy = 2;

    public function shoot(array &$gangsters)
    {
        $this->shootTwo($gangsters);
    }

    public function shootTwo(array &$gangsters)
    {
        unset($gangsters[array_rand($gangsters)]);
        unset($gangsters[array_rand($gangsters)]);
    }
}
