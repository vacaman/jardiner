<?php

$lang = 'en';
// Crea la cookie amb el valor d'idioma
setcookie('idioma', $lang, time() + 60 * 60 * 24 * 30, '/');
header('Location: ../inici.php');
