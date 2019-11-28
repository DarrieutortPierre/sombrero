<?php 

include_once('CliUtil.php');

class saloon 
{
    public static function game(array $gangsters, Weapon $weapon) : Gangster
    {
        $saloonPositions = [];
        while (count($gangsters) > 1){
            if(!$weapon->isMiss()){
                $weapon->kill($gangsters);
            }
        }

        return $gangsters[0];
    }
}

class WeaponFactory
{
    public function getWeapon($weaponName){
        //return d'une arme avec le nom comme classe exemple return new Gun(3);
        new $weaponName();
    }
}


abstract class Weapon
{
    public $accuracy;
    public $name;

    public function __construct($name){
        $this->accuracy = $accuracy;
        $this->name = $name;
    }

    public function isMiss() : bool
    {
        var_dump($this->accuracy);
       return (bool) rand(0, $this->accuracy);
    }

    public function kill(array &$gangsters){
        unset($gangsters[array_rand($gangsters)]);
    }
}

class Gangster
{
    private $name;
    private $alive;
    private $pos;

    public function __construct($name) 
    {
        $this->name = $name;
        $this->alive = true;
    }

    public function isAttackedBy(gun $gun)
    {
        $this->alive = false;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAttacked()
    {
        return $this->isAttackedBy;
    }
}


class GangsterManager 
{
    public static function createGangsterFromCli()
    {
        $name = CliUtil::getFromCli("What is your name ?");
        
        return new Gangster($name);
    }
}


$gangsters = [];
$count = 0;

while($count < 2 || $count > 6) {
    $count = Cliutil::getFromCli("How many gangsters are you? ");
} 

for($i = 0; $i<$count; $i++)
{
    $gangsters[] = gangsterManager::createGangsterFromCli();
}

$winner = saloon::game($gangsters, new Weapon());

echo "The winner is".$winner->getName().' \n ';

?>


