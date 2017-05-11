<?php

function tradueix_footer($www_string)
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
        case 'explicacio': return 'Jardiner professional des del 1967. Oferim serveis de jardineria i venta de tot tipus de plantes i arbustos. Per contactar amb nosaltres utilitzeu les dates de continuació.'; break;
        case 'links': return '<div class="col-md-3 col-sm-6 footer-col">
          <span class="heading7">LINKS GENERALS</span>
          <ul class="footer-ul">
            <li><a href="/"> Inici</a></li>
            <li><a href="#"> Privacy Policy</a></li>
            <li><a href="#"> Terms & Conditions</a></li>
            <li><a href="#"> Client Gateway</a></li>
            <li><a href="#"> Ranking</a></li>
            <li><a href="#"> Case Studies</a></li>
            <li><a href="#"> Frequently Ask Questions</a></li>
          </ul>
        </div>'; break;
        case 'subfooter': return "<ul class='bottom_ul'>
          <li><a href='#'>Sobre</a></li>
          <li><a href='#'>Faq's</a></li>
          <li><a href='perfil.php'>Contactar</a></li>
          <li><a href='mapaweb.php'>Mapa web</a></li>
        </ul>"; break;
        case 'xarxes': return 'Xarxes Socials'; break;
        case 'llicencia': return '<div class="col-md-3 col-sm-6 footer-col">
          <span class="heading7">LLICÈNCIA</span><br><br>
          <a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png" /></a><br />

          <br><p>

            Aquesta pàgina està llicenciada sota <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>.
          </p>
        </div>'; break;
        break;
      }
    }

    // Traduccions espanyol
    if ($language === 'es') {
        switch ($string) {
          case 'explicacio': return 'Jardinero profesional des del 1967. Ofrecemos servicios de jardineria y venta de todo tipo de plantas y arbustos. Para contacata con nosotros utilizad las datas de continación.'; break;
          case 'links': return '<div class="col-md-3 col-sm-6 footer-col">
            <span class="heading7">LINKS GENERALES</span>
            <ul class="footer-ul">
              <li><a href="#"> Career</a></li>
              <li><a href="#"> Privacy Policy</a></li>
              <li><a href="#"> Terms & Conditions</a></li>
              <li><a href="#"> Client Gateway</a></li>
              <li><a href="#"> Ranking</a></li>
              <li><a href="#"> Case Studies</a></li>
              <li><a href="#"> Frequently Ask Questions</a></li>
            </ul>
          </div>'; break;
          case 'subfooter': return "<ul class='bottom_ul'>
            <li><a href='#'>Acerca de</a></li>
            <li><a href='#'>Faq's</a></li>
            <li><a href='perfil.php'>Contactar</a></li>
            <li><a href='mapaweb.php'>Mapa web</a></li>
          </ul>"; break;
          case 'xarxes': return 'Redes Sociales'; break;
          case 'llicencia': return '<div class="col-md-3 col-sm-6 footer-col">
            <span class="heading7">LLICÈNCIA</span><br><br>
            <a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png" /></a><br />

            <br><p>

              Esta página está licenciada sobre<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>.
            </p>
          </div>'; break;
        break;
      }
    }

    // Traduccions anglès
    if ($language == 'en') {
        switch ($string) {
          case 'explicacio': return 'Professional gardener since 1967. We offer gardening services and sale of all kinds of plants and bushes. To contact us, use the data below this.'; break;
          case 'links': return '<div class="col-md-3 col-sm-6 footer-col">
            <span class="heading7">GENERAL LINKS</span>
            <ul class="footer-ul">
              <li><a href="inici.php"> Index </a></li>
              <li><a href="#"> Terms & Conditions</a></li>
              <li><a href="#"> Client Gateway</a></li>
              <li><a href="#"> Ranking</a></li>
              <li><a href="#"> Case Studies</a></li>
              <li><a href="#"> Frequently Ask Questions</a></li>
            </ul>
          </div>'; break;
          case 'subfooter': return "<ul class='bottom_ul'>
            <li><a href='#'>About</a></li>
            <li><a href='#'>Faq's</a></li>
            <li><a href='perfil.php'>Contact us</a></li>
            <li><a href='mapaweb.php'>Site Map</a></li>
          </ul>"; break;
          case 'xarxes': return 'Social Media'; break;
          case 'llicencia': return '<div class="col-md-3 col-sm-6 footer-col">
            <span class="heading7">LLICÈNCIA</span><br><br>
            <a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png" /></a><br />

            <br><p>
              This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>.b
            </p>
          </div>'; break;
          break;
      }
    }
}
