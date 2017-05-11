<?php

function tradueix_mapa($www_string)
{
    $string = filter_var($www_string, FILTER_SANITIZE_STRING); //Treiem js, SQL injections i iPhones Gratis

    // Si la cookie existeix agafa l'idioma que marca la sessió
    if (isset($_COOKIE['idioma'])) {
        $language = $_COOKIE['idioma'];
    } else { // Si la cookie no existeix l'idioma predeterminat serà català
        $language = 'ca';
    }

    // Traduccions català
    if ($language === 'ca') {
        switch ($string) {
        case 'titol': return 'Mapa Web'; break;
        case 'inici': return 'Inici'; break;
        case 'sobre': return 'Sobre mi'; break;
        case 'consells': return 'Consells'; break;

        break;
      }
    }

    // Traduccions espanyol
    if ($language === 'es') {
        switch ($string) {
        case 'titol': return 'Mapa Web'; break;
        case 'inici': return 'Inicio'; break;
        case 'sobre': return 'Acerca de mi'; break;
        case 'consells': return 'Consejos'; break;

        break;
      }
    }

    // Traduccions anglès
    if ($language == 'en') {
        switch ($string) {
        case 'titol': return 'Web Map'; break;
        case 'inici': return 'Index'; break;
        case 'sobre': return 'About me'; break;
        case 'consells': return 'Advice'; break;

        break;
      }
    }
}
