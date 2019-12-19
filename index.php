<?php

require_once('CliUtil.php');

require_once('Saloon.php');

require_once('WeaponFactory.php');

require_once('Weapon.php');

require_once('Weapons/Gun.php');
require_once('Weapons/Revolver.php');
require_once('Weapons/Rifle.php');

require_once('Gangster.php');
require_once('GangsterManager.php');

require_once('dir.php');

require_once('WeaponManager.php');

echo "\e[91m \e[1m\n";
echo "                       Welcome to\n";

echo "\n";
echo "   _____                 _                          _ \n";
echo "  / ____|               | |                        | |\n";
echo " | (___   ___  _ __ ___ | |__  _ __ ___ _ __ ___   | |\n";
echo "  \___ \ / _ \| '_ ` _ \| '_ \| '__/ _ \ '__/ _ \  | |\n";
echo "  ____) | (_) | | | | | | |_) | | |  __/ | | (_) | |_|\n";
echo " |_____/ \___/|_| |_| |_|_.__/|_|  \___|_|  \___/  (_)\n";
echo "\n";
echo "\e[4m                                                      \e[0m\n";

$count = 0;

while ($count < 2 || $count > 6) {
    echo "\n";
    $count = Cliutil::getFromCli("\e[1mHow many gangsters are you?\e[0m \e[90m(The number of gangsters must be between 2 and 6)\e[0m\n");
}

$gangsters = [];

for ($i = 0; $i < $count; $i++) {
    $gangsters[] = gangsterManager::createGangsterFromCli($i);
}

$choosenWeapon = WeaponManager::chooseWeaponFromCli();

$winner = Saloon::game($gangsters, new $choosenWeapon());

echo 'The winner is ' . $winner->getName() . '.';
