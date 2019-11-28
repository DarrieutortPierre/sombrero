<?php

require_once('CliUtil.php');

require_once('Saloon.php');

require_once('WeaponFactory.php');

require_once('Weapon.php');

require_once('Weapons/Gun.php');
require_once('Weapons/Revolver.php');
require_once('Weapons/Sword.php');

require_once('Gangster.php');
require_once('GangsterManager.php');

require_once('dir.php');

require_once('WeaponManager.php');

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
