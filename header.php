<noscript><?php echo tradueix_header('noscript'); ?></noscript>
<a class="navbar-logo" href="inici.php"></a>

<div class="hidden-sm-down">
<nav class="navbar-inverse nav-upper " >
<div class="container-fluid">
<ul class="nav navbar-upper" id="superior">
<li id="header-tel"><i class="fa fa-envelope" aria-hidden="true"></i>
<span id="email-header" >eljardiner@jardiner.com</span></li>
  <li><span ><i class="fa fa-phone" aria-hidden="true"></i>
    93 936 28 92</span>
  </li>

  <li><span><?php echo strtoupper($_COOKIE['idioma']); ?></span></li>

</ul>
</div>
</nav>
</div>

<nav class="navbar navbar-inverse navbar-static-top navbar-lower" id="asd">
<div class="container-fluid">

<div class="navbar-header">
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"> <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
</div>

<div class="collapse navbar-collapse" id="navbar">
  <ul class="nav navbar-nav" id="inferior">
    <li><span><a href="inici.php"><?php echo tradueix_header('inici'); ?></a></span><span id="separador"> | </span>
    </li>
    <li><span><a href="perfil.php"><?php echo tradueix_header('sobre'); ?></a></span><span id="separador"> | </span>
    </li>
    <li>  <span><a href="consells.php"><?php echo tradueix_header('consells'); ?></a></span>
    </li>
    <li><span id="header-buscador"></span>
    </li>
  </ul>
  <form class="navbar-form navbar-right" role="search">
    <div class="form-group">
      <div class="input-group">
        <script>
  (function() {
    var cx = '015322807430614698454:h1yaqbaypxc';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search>
  <span class="input-group-btn">
    <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
  </span>
</gcse:search>

      </div>
    </div>
  </form>
</div>
</div>
</nav>
<!-- HEADER -->
