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

// function fight(array &$gangsters, Weapon $weapon)
// {
//     $weapon->shoot($gangsters);
// }

// fight($gangsters, WeaponFactory::getWeapon('Revolver'));

$gangsters = [];
$count = 0;

while ($count < 2 || $count > 6) {
    $count = Cliutil::getFromCli('How many gangsters are you? ');
}

for ($i = 0; $i < $count; $i++) {
    $gangsters[] = gangsterManager::createGangsterFromCli();
}

$choosenWeapon = WeaponManager::chooseWeaponFromCli();

$winner = Saloon::game($gangsters, new $choosenWeapon());

echo 'The winner is ' . $winner->getName() . '.';
