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
          // inici
          case 'titol-caixa1': return 'SERVEI PROFESSIONAL'; break;
          case 'subt-caixa1': return 'Ofereixo el millor servei al millor preu'; break;
          case 'titol-caixa-benvinguda': return 'Benvingut a el Jardiner'; break;
          case 'recomanacio1': return 'Veure les flors més boniques<br><a href=#><div id="image-1" class="boto thumbnail img-responsive">VEURE AQUÍ</div></a>'; break;
          case 'recomanacio2': return 'Les plantes més exòtiques<br><a href=#><div id="image-2" class="boto thumbnail img-responsive">VEURE AQUÍ</div></a>'; break;
          case 'recomanacio3': return 'Veure els arbustos recomenats<br><a href=#><div id="image-3" class="boto thumbnail img-responsive">VEURE AQUÍ</div></a>'; break;
          case 'text-caixa-benvinguda': return "Des del 1967  que em dedico apassionadament a l'art de cuidar les plantes. Cincuanta anys més tard, tot segueix igual. Al llarg de la meva vida he anat passant per totes les etapes, sectors i nivells de responsabilitat en una empresa dedicada a la producció de plantes, mescles de terres, ventes majorieses i minoristes de plantes i insums per jardineria, la construcció i manteniment de espais verds, etc."; break;
          /* Noms plantes */
          case 'boix': return 'Boix grèvol'; break;
          case 'petunies': return 'Petúnies'; break;
          case 'pensaments': return 'Pensaments'; break;
          case 'roses':return 'Roses'; break;
          case 'pachira':return 'Pachira'; break;
          case 'nenufar': return 'Nenúfar'; break;
          case 'salvia': return 'Salvia'; break;
          case 'seto': return 'Arbust podat'; break;

          case 'tanca': return 'Tanca'; break;

        break;
      }
    }

    // Traduccions espanyol
    if ($language === 'es') {
        switch ($string) {
          case 'titol-caixa1': return 'SERVICIO PROFESIONAL'; break;
          case 'subt-caixa1': return 'Ofrezco el mejor servicio al mejor precio'; break;
          case 'titol-caixa-benvinguda': return 'Bienvenido a el Jardiner'; break;
          case 'recomanacio1': return 'Ver las flores más bonitas<br><a href=#><div id="image-1" class="boto thumbnail img-responsive">VER AQUÍ</div></a>'; break;
          case 'recomanacio2': return 'Las plantas más exóticas<br><a href=#><div id="image-2" class="boto thumbnail img-responsive">VER AQUÍ</div></a>'; break;
          case 'recomanacio3': return 'Ver los arbustos recomendados<br><a href=#><div id="image-3" class="boto thumbnail img-responsive">VER AQUÍ</div></a>'; break;
          case 'text-caixa-benvinguda': return 'Des del 1967  me dedico apasionadamente al arte de cuidar las plantas. Cincuenta años más tarde, todo sigue igual. A lo largo de mi desempeño he ido pasando por todas las etapas , sectores y niveles de responsabilidad en una empresa dedicada a la producción de plantas, mezclas de tierras, ventas mayoristas y minoristas de plantas e insumos para jardinería, la construcción y mantenimiento de espacios verdes, etc.'; break;
          /* Noms plantes */
          case 'boix': return 'Acebo'; break;
          case 'petunies': return 'Petúnias'; break;
          case 'pensaments': return 'Pensamientos'; break;
          case 'roses':return 'Rosas'; break;
          case 'pachira':return 'Pachira'; break;
          case 'nenufar': return 'Nenúfar'; break;
          case 'salvia': return 'Salvia'; break;
          case 'seto': return 'Arbusto podado'; break;

          case 'tanca': return 'Cierra'; break;

        break;
      }
    }

    // Traduccions anglès
    if ($language == 'en') {
        switch ($string) {
          case 'titol-caixa1': return 'PROFESSIONAL SERVICE'; break;
          case 'subt-caixa1': return 'The best service at the best price'; break;
          case 'titol-caixa-benvinguda': return 'Welcome to el Jardiner'; break;
          case 'recomanacio1': return 'See the most beautiful flowers<br><a href=#><div id="image-1" class="boto thumbnail img-responsive">WATCH HERE</div></a>'; break;
          case 'recomanacio2': return 'The most exptotic plants<br><a href=#><div id="image-2" class="boto thumbnail img-responsive">WATCH HERE</div></a>'; break;
          case 'recomanacio3': return 'Watch the recommended bushes<br><a href=#><div id="image-3" class="boto thumbnail img-responsive">WATCH HERE</div></a>'; break;
          case 'text-caixa-benvinguda': return "Since 1967 i amb passionately dedicated to the art of taking care of plants. Fifty years later everything remains the same. In my live I've past a lot of stages, sectors and levels of responsability in an enterprise dedicated to the production of plants, mix of soil, wholesale sells and minosrist sales and supplies for gardening, construction and maintenance of green zones, etc.."; break;
          /* Noms plantes */
          case 'boix': return 'Holly'; break;
          case 'petunies': return 'Petunia'; break;
          case 'pensaments': return 'Thoughts'; break;
          case 'roses':return 'Roses'; break;
          case 'pachira':return 'Pachira'; break;
          case 'nenufar': return 'Water lillies'; break;
          case 'salvia': return 'Salvia'; break;
          case 'seto': return 'Purned bush'; break;

          case 'tanca': return 'Close'; break;

          break;
      }
    }
}
