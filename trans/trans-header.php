<?php

function tradueix_header($www_string)
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
          // barra navegacio superior
          case 'login': return 'INICIAR SESSIÓ/REGISTRE'; break;
          case 'inici': return 'INICI'; break;
          case 'sobre': return 'CONTACTE'; break;
          case 'consells': return 'CONSELLS'; break;
          case 'buscador': return '<input type="text" class="form-control" placeholder="Busca">'; break;
          case 'noscript': return 'Necessites tenir activat javascript per utilitzar totes les aplicacions d aquesta pàgina. <a href="http://enable-javascript.com/es/">Com activar javascript?</a>'; break;
        break;
      }
    }

    // Traduccions espanyol
    if ($language === 'es') {
        switch ($string) {
          case 'login': return 'INICIAR SESIÓN/REGISTRO'; break;
          case 'inici': return 'INICIO'; break;
          case 'sobre': return 'CONTACTO'; break;
          case 'consells': return 'CONSEJOS'; break;
          case 'buscador': return '<input type="text" class="form-control" placeholder="Buscar">'; break;
          case 'noscript': return 'Necesitas tener activado javascript para utilizar todas las aplicaciones de esta página. <a href="http://enable-javascript.com/es/">Como activar javascript?</a>'; break;
        break;
      }
    }

    // Traduccions anglès
    if ($language == 'en') {
        switch ($string) {
          case 'login': return 'LOGIN/REGISTER'; break;
          case 'inici': return 'INDEX'; break;
          case 'sobre': return 'CONTACT'; break;
          case 'consells': return 'ADVICES'; break;
          case 'buscador': return '<input type="text" class="form-control" placeholder="Search">'; break;
          case 'noscript': return 'You need javascript to fully use this page. <a href="http://enable-javascript.com/es/">Com activar javascript?</a>'; break;
          break;
      }
    }
}
