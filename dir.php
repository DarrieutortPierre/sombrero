<?php

class Scandir
{
    public function getDir()
    {
        $routes = array_values(array_diff(
            scandir('Weapons'),
            array('..', '.')
        ));
        
        $filenames = [];
        
        foreach ($routes as $key => $filename) {
            $currentFN = preg_replace('/\.php$/', '', $filename);
            $filenames[] = $currentFN;
            echo "\n";
            echo "︻╦̵̵̿╤─ ҉ - -- -- --\n";
            echo "$key : $currentFN \n";
        }
        
        return $filenames;
    }
}
