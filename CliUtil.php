<?php 

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
