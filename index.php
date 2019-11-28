<?php

include_once('CliUtil.php');

include_once('Saloon.php');

include_once('WeaponFactory.php');

include_once('Weapon.php');

include_once('Weapons/Gun.php');
include_once('Weapons/Revolver.php');
include_once('Weapons/Sword.php');

include_once('Gangster.php');
include_once('GangsterManager.php');

include_once('dir.php');

include_once('WeaponManager.php');

echo "\e[91m \e[1m                                                      \n";
echo "                       Welcome to                     \n";

echo "                                                      \n";
echo "   _____                 _                          _ \n";
echo "  / ____|               | |                        | |\n";
echo " | (___   ___  _ __ ___ | |__  _ __ ___ _ __ ___   | |\n";
echo "  \___ \ / _ \| '_ ` _ \| '_ \| '__/ _ \ '__/ _ \  | |\n";
echo "  ____) | (_) | | | | | | |_) | | |  __/ | | (_) | |_|\n";
echo " |_____/ \___/|_| |_| |_|_.__/|_|  \___|_|  \___/  (_)\n";
echo "                                                      \n";
echo "\e[4m                                                      \e[0m\n";

while ($count < 2 || $count > 6) {
    echo "\e[1m                                                      \n";
    $count = Cliutil::getFromCli('How many gangsters are you? ');
    echo "\e[0m                                                      \n";
}

$gangsters = [];
$count = 0;

for ($i = 0; $i < $count; $i++) {
    $gangsters[] = gangsterManager::createGangsterFromCli();
}

$choosenWeapon = WeaponManager::chooseWeaponFromCli();

$winner = Saloon::game($gangsters, new $choosenWeapon());

echo 'The winner is ' . $winner->getName() . '.';
