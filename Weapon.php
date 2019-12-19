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
        foreach ($gangsters as $key => $gangster) {
            echo "\n";
            echo 'PAN ! ' . $gangsters[$key] -> name . " is alive. \n";
        }
        $randShoot = array_rand($gangsters);
        echo "\n";
        echo '------------------------------';
        echo "\n";
        sleep(2);
        unset($gangsters[$randShoot]);
    }
}
