<?php

function tradueix_inici($www_string)
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

        break;
      }
    }

    // Traduccions espanyol
    if ($language === 'es') {
        switch ($string) {

        break;
      }
    }

    // Traduccions anglès
    if ($language == 'en') {
        switch ($string) {

          break;
      }
    }
}
