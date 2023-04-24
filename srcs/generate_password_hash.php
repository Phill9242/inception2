<?php
// Carregue o arquivo principal do WordPress para ter acesso às funções do WordPress.
require_once('/var/www/html/wp-load.php');

// Defina sua senha em texto claro.
$plain_password = 'oliveira';

// Gere o hash da senha usando a função `wp_hash_password()`.
$hashed_password = wp_hash_password($plain_password);

// Defina sua senha em texto claro.
$plain_password2 = 'avaliador';

// Gere o hash da senha usando a função `wp_hash_password()`.
$hashed_password2 = wp_hash_password($plain_password2);
// Exiba o hash gerado.
echo "Hash da senha:"  . $hashed_password ;
echo "-\n" ;
echo "Hash da senha:"  . $hashed_password2 ;
echo "-\n" ;