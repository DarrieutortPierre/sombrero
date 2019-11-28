<?php

class Saloon
{
    public static function game(array $gangsters, Weapon $weapon): Gangster
    {
        while (count($gangsters) > 1) {
            if (!$weapon->isMiss()) {
                $weapon->shoot($gangsters);
            }
        }

        return $gangsters[0];
    }
}
