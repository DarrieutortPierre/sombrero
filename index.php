<?php 

class saloon 
{
    public static function game($gangsters) 
    {
        $saloonPositions = [];
         $gun = new gun;
        while (count($gangsters) > 1){
           $gun->setpos(count($gangsters));
            $posperdante = $gun->getpos;
            echo $posperdante;
            die;
        }


        return $winner;
    }
}

class gun
{
    private $pos;
    public function __construct() 
    {
        $this->pos = rand(1,6);
    }
    public function getpos(){
       return $this->pos;
    }
    public function setpos($nbgansta){
        $this->pos = rand(1,(parseInt($nbgansta)+1));
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


class CliUtil
{
    private static $handler;

    public static function init()
    {
        self::$handler = fopen ("php://stdin", "r");
    }

    public static function getFromCli($text)
    {
        if(self::$handler === null) 
        {
            self::init();
        }
        echo $text;
        return trim(fgets(self::$handler));
    }

}

class GangsterManager 
{
    public static function createGangsterFromCli()
    {
        $name = CliUtil::getFromCli("What is your name ?");
        
        return new gangster($name);
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

$winner = saloon::game($gangsters[0]['name']);

echo "The winner is".$winner->getName().' \n ';

?>