<?php

setcookie('user' , 'rafael' , time() + 2 * 24 * 60 * 60);
setcookie('email' , 'rafaellealdantas@gmail.com' , time() + 2 * 24 * 60 * 60);
setcookie('ultima_pesquisa' , 'tenis adidas' , time() + 2 * 24 * 60 * 60);

var_dump($_COOKIE);
?>