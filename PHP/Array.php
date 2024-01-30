<?php

//ARRAY 
$user['name'] = 'Jean';
$user['FirstName'] = 'oui';
$user['age'] = '21';

//Afficher les array et leurs valeurs
// print_r ($user);

echo '<hr>';


//$user sert a ressortir l'array
echo '<h4>Bonjour, ' . $user['FirstName'] . '</h4>';
echo '<h4>Vous avez ' . $user['age'] . ' ans</h4>';
$name = 'Variable PHP';
echo '<h2>Bonjour, ' . $name;
'</h2>';
echo '<h3>la date du jour ' .  date('Y-m-d') . '</h3>';
echo '<h3>il est ' .  date('H:i:s') . '</h3>';
