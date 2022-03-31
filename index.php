# questCondition
<?php
$weapons = ['fists', 'whip', 'gun'] ;
$opponentWeapon = $weapons[rand(0,2)] ; // Cela permet de choisir une arme de manière aléatoire.

if ($opponentWeapon === 'fists'){
    $indyWeapon = 'gun';
} elseif ($opponentWeapon === 'whip'){
    $indyWeapon = 'fists';
} elseif ($opponentWeapon === 'gun'){
    $indyWeapon = 'whip';
} else{
    $indyWeapon = '';
}

echo "The adversary uses $opponentWeapon and  Indy uses  $indyWeapon , Indy is the winner!";
?>

<?
