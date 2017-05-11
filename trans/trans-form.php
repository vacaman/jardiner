<?php

function tradueix_formulari($www_string)
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
          case 'nom': return 'Nom'; break;
          case 'comment': return 'Comentari'; break;
          case 'enviar': return 'Enviar'; break;
          case 'contacte': return 'Contacte'; break;
        break;
      }
    }

    // Traduccions espanyol
    if ($language === 'es') {
        switch ($string) {
          case 'nom': return 'Nombre'; break;
          case 'comment': return 'Comentario'; break;
          case 'enviar': return 'Enviar'; break;
          case 'contacte': return 'Contacto'; break;
        break;
      }
    }

    // Traduccions anglès
    if ($language == 'en') {
        switch ($string) {
          case 'nom': return 'Name'; break;
          case 'comment': return 'Comment'; break;
          case 'enviar': return 'Submit'; break;
          case 'contacte': return 'Contact'; break;
        break;
      }
    }
}
