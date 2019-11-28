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
