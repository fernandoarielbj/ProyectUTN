<!doctype html>
<html class="no-js" lang="">

<head>
  <!-- META -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- TITULO -->
  <title>House of Cut Men</title>

  <!-- Boilerplate -->
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">

  <!-- Icon -->
  <link rel="icon" href="img/icon.ico" type="image/x-icon"/>
  <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon"/>

  <!-- Normalize.css -->
  <link rel="stylesheet" href="css/normalize.css">
  <!-- Main.css -->
  <link rel="stylesheet" href="css/main.css">
   <!-- Bootstrap --> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <!-- Style.css -->
  <link rel="stylesheet" type="text/css" href="css/styleMain.css">

  <!-- Background Change -->
  <style type="text/css">
<!--
.changebg {
  <?php $dayforbackground=date('N'); ?>
  <?php if ($dayforbackground==1) { ?>background-image:url(img/backLunes.jpg);<?php } ?>
  <?php if ($dayforbackground==2) { ?>background-image:url(img/backMartes.jpg);<?php } ?>
  <?php if ($dayforbackground==3) { ?>background-image:url(img/backMiercoles.jpg);<?php } ?>
  <?php if ($dayforbackground==4) { ?>background-image:url(img/backJueves.jpg);<?php } ?>
  <?php if ($dayforbackground==5) { ?>background-image:url(img/backViernes.jpg);<?php } ?>
  <?php if ($dayforbackground==6) { ?>background-image:url(img/backSabado.jpg);<?php } ?>
  <?php if ($dayforbackground==7) { ?>background-image:url(img/backDomingo.jpg);<?php } ?>
}
-->
</style>

</head>

<body data-spy="scroll" data-target="#navbar-example2" data-offset="0">

  <!-- HTML Site -->

<!-- NAVBAR -->
<?php include("includes/navbar.php"); ?>

<!-- HEADER -->

<header class="mainHeader nav-space changebg"> 
  <div class="logoHeader" align="center">
  <div>
    <img src="img/logo.png" class="img-fluid">
  </div>
  </div>

  <div class="sloganHeader text-center">
    <h2>#VivíLaExperiencia</h2>
  </div>

  <div class="botonCont" align="center">
      <button type="button" class="btn btn-outline-light buttonHeader">Pedí tu turno</button>
  </div>

  <div id="sucursales" class="sucursMain container-fluid">
    <div class="sucBoedo container">
    <h3>Sucursal Boedo</h3>
    <p>Av. Independencia 3825</p>
    <a href="#boedo">Ver</a>
  </div> 
  <span class="separador"></span>
  <div class="sucVCrespo container"> 
    <h3>Sucursal Villa Crespo</h3>
    <p>Av. Lavalleja 619</p>
    <a href="#vCrespo">Ver</a>
  </div> 
  </div>
</header>





 
<div id="nosotros" class="separador2 container-fluid">
  <img src="img/tijera.png">
</div>


<section class="row">
   <div class="container col-md-2"></div>
  <article class="container col-md-1 titleNosotros">
    <h3>NOSOTROS</h3>
  </article>
  <article class="container col-md-4 pictureNosotros">
    <img src="img/nosotros.jpg" class="img-fluid">
  </article>
  <article class="container col-md-3 textNosotros">
    <h4>Nuestros clientes nos eligen!</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </article>
  <div class="container col-md-2"></div>
</section>


<div id="horarios" class="separador2 container-fluid">
  <img src="img/maquina.png">
</div>


<section class="row">
  <div class="container col-md-2 titleHorarios">
    <h3 id="horariosCopy">HORARIOS</h3>
  </div>
  <article class="container col-md-3 textHorarios">
    <h4>Nuestros Horarios</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </article>
  <div class="container col-md-1"></div>
  <article class="container col-md-4 pictureHorarios">
    <img src="img/horarios.jpg" class="img-fluid">
  </article>
  <article class="container col-md-2 titleHorarios">
    <h3 id="horariosOrig">HORARIOS</h3>
  </article>
</section>


<div id="precios" class="separador2 container-fluid">
  <img src="img/tijera.png">
</div>


<section class="row">
  <article class="container col-md-2 titlePrecios">
    <h3>PRECIOS</h3>
  </article>
  <article class="container col-md-4 picturePrecios">
    <img src="img/precios.jpg" class="img-fluid">
  </article>
  <div class="container col-md-1"></div>
  <article class="container col-md-3 textPrecios">
    <h4>Lista de precios:</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </article>
  <div class="container col-md-2"></div>
</section>


<div id="clubAmigos" class="separador2 container-fluid">
  <img src="img/maquina.png">
</div>


<section id="boedo" class="row sucursDesc">
    <article class="col-md-6 boedoDesc">
      <div class="sucursDescT">
        <h3>Sucursal Boedo</h3>
        <p>(Avenida Independencia 3825)</p>
      </div>
      <div>
        <h4>Nuestro Staff:</h4>
      </div>
      <div class="row fotos">
        <div class="foto maxi"></div>
        <div class="foto kevin"></div>
        <div class="foto thony"></div>
      </div>
    </article>
    <div class="col-md-6"></div>
</section>

<section id="vCrespo" class="row sucursDesc">
    <div class="col-md-6"></div>
    <article class="col-md-6 crespoDesc">
      <div class="sucursDescT">
        <h3>Sucursal Villa Crespo</h3>
        <p>(Lavalleja 619)</p>
      </div>
      <div>
        <h4>Nuestro Staff:</h4>
      </div>
      <div class="row fotos2">
        <div class="foto maxi"></div>
        <div class="foto kevin"></div>
        <div class="foto thony"></div>
      </div>
    </article>
</section>




<footer class="mainFooter row">
  <div class="col-md-6 footerCopy">
    <div class="logoFoot">
      <img src="img/logo.png" class="img-fluid">
    </div>
    <div class="copyright">
      <p>&copy; Copyright 2018. House of Cut Men.</p>
    </div>
  </div>
  <div class="col-md-6 contactoForm">
    <h3>Contactanos:</h3>
      <form action="mailto:mail@mail.com" method="post" id="form2">
        <div class="camposForm">
          <input type="text" name="nombre" id="campoNombre" placeholder="Nombre">
        </div>

        <div class="camposForm">
          <input type="email" name="email" id="campoEmail" placeholder="Email">
        </div>

        <div class="camposForm">
          <input type="tel" name="nombre" id="campoTel" placeholder="Telefono">
        </div>        
        <div class="camposForm">
           <textarea name="mensaje" placeholder="Consulta"></textarea>
        </div>
        <input type="submit" value="Enviar"
        class="botonEnvio">   
      </form>
  </div>
</footer>


<button type="button" class="btn btn-secondary botonTurnoFix">Pedir Turno</button>

  <!-- Scripts -->

  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <!-- Popper -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <!-- Bootstrap -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <!-- Modernizer & JS -->
  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>


  <!-- Plugins -->

  <!-- SmoothScroll -->
  <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
  <script> var scroll = new SmoothScroll('a[href*="#"]',{
    header: '[data-scroll-header]'
  });</script>

  <!-- NavScroll -->
  <script>
     $(window).scroll(function () {
      if ($(window).scrollTop() >= 50) {
          $('.navbar').css('background','rgba(10,10,10,1)');
      } else {
        $('.navbar').css('background','transparent');
        }
    });
  </script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
