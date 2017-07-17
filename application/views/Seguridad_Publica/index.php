<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <link href="<?php echo base_url(); ?>/application/helpers/css/bootstrap.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>/application/helpers/css/principal.css" rel="stylesheet">
      <title>Seguridad publica</title>
  </head>
  <body>
    <header>

    </header>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <div class="row center responsive_header">
            <div class="col-sm-4 col-md-2 col-lg-2" style="text-align: left;left: 5%;">
              <img class="logo" src="<?php echo base_url(); ?>/application/helpers/images/carousel/LOGO-BLANCO.png" alt="">
            </div>
            <div class="col-sm-2 col-sm-offset-2 col-md-2 col-md-offset-4 col-lg-1 col-lg-offset-5">
              <a href="<?php echo base_url();?>" class="scroll" style="text-decoration:none;color:white"><span class="subray" id="best">SOLUCIONES</span></a>
            </div>
            <div class="col-sm-2-5 col-lg-2-5">
              <a href="<?php echo base_url();?>Radical/exitos" style="text-decoration:none;color:white"><span class="subray">CASOS DE ÉXITO</span></a>
            </div>
            <div class="col-sm-2 col-lg-1">
              <a href="<?php echo base_url();?>Radical/nosotros" style="text-decoration:none;color:white"><span class="subray">NOSOTROS</span></a>
            </div>
            <div class="col-sm-2 col-lg-1">
              <a href="<?php echo base_url();?>Radical/contacto" style="text-decoration:none;color:white"><span class="subray">CONTACTO</span></a>
            </div>
          </div>
          <div class="colapsive_header navbar navbar-inverse">
            <div class="container-fluid" style="width: 100%;">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="<?php echo base_url();?>">SOLUCIONES</a></li>
                  <li class=""><a href="<?php echo base_url();?>Radical/exitos">CASOS DE ÉXITO</a></li>
                  <li class=""><a href="<?php echo base_url();?>Radical/nosotros">NOSOTROS</a></li>
                  <li class=""><a href="<?php echo base_url();?>Radical/contacto">CONTACTO</a></li>
                </ul>
              </div>
            </div>
          </div>
          <img src="<?php echo base_url(); ?>/application/helpers/images/header.png" alt="...">
          <div class="carousel-caption banner_res_2" id="hide1" style="display:none;">
            <span class="top">SEGURIDAD </span><span class="text_red top">PÚBLICA</span>
          </div>
        </div>
      </div>
    </div>
    <div class="bloque" id="soluciones">
      <div class="row">
        <div class="top">
          <span class="barra" style="background-color:#E2231A"></span>
          <span class="barra" style="background-color:#E53131"></span>
          <span class="barra" style="background-color:#EA5C2D"></span>
          <span class="barra" style="background-color:#F29224"></span>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <span class="aviso">Soluciones a medida de cada&nbsp;</span><span class="text_red  aviso"> cliente</span>
        </div>
      </div>
        <div class="row">
          <div class="bot">
            <span class="barra" style="background-color:#E2231A"></span>
            <span class="barra" style="background-color:#E53131"></span>
            <span class="barra" style="background-color:#EA5C2D"></span>
            <span class="barra" style="background-color:#F29224"></span>
          </div>
        </div>
    </div>
    <div class="cuerpo" >
      <img class="fondotop" src="<?php echo base_url(); ?>/application/helpers/images/cuerpo/adorno-superior.png" alt="">
      <img class="fondobot" align="right" src="<?php echo base_url(); ?>/application/helpers/images/cuerpo/adorno-inferior.png" alt="">
      <div class="linea" style="padding-bottom: 8%;padding-left: 15%;padding-right: 15%;padding-top: 4%;">
        <div>
          <a href="<?php echo base_url(); ?>Seguridad_Publica/clonacion">
            <img src="<?php echo base_url(); ?>/application/helpers/images/item.jpg" alt="">
          </a>
          <div class="centro" style="text-align:left;padding-left:5%;">
            <span>Solución de</span>
            <span>clonación de</span>
            <span>celular</span>
          </div>
        </div>
        <div>
          <a href="<?php echo base_url(); ?>Seguridad_Publica/bloqueo">
            <img src="<?php echo base_url(); ?>/application/helpers/images/item.jpg" alt="">
          </a>
          <div class="centro" style="text-align:left;padding-left:5%;">
            <span>Bloqueo de</span>
            <span>celulares en las</span>
            <span>cárceles.</span>
          </div>
        </div>
      </div>
    </div>
    <marquee width="100%">
      <div >
        <img class="logo_banner" src="<?php echo base_url();?>application/helpers/images/logos/lib.png" alt="">
        <img class="logo_banner" src="<?php echo base_url();?>application/helpers/images/logos/kathrein.png" alt="">
        <img class="logo_banner" src="<?php echo base_url();?>application/helpers/images/logos/escon.png" alt="">
        <img class="logo_banner" src="<?php echo base_url();?>application/helpers/images/logos/mojix.png" alt="">
      </div>
    </marquee>
    <script src="<?php echo base_url(); ?>/application/helpers/js/jquery-1.11.1.js"></script>
    <script src="<?php echo base_url(); ?>/application/helpers/js/bootstrap.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $(".subray").mouseover(function() {
        if ($(this)[0].id != "best") {
          $("#best").css("border-bottom-style", "none");
          $(this).css("border-bottom-style", "solid");
          $(this).css("border-bottom-width", "thick");
        }
       });
      $(".subray").mouseout(function() {
        if ($(this)[0].id != "best") {
          $(this).css("border-bottom-style", "none");
          $("#best").css("border-bottom-style", "solid");
          $("#best").css("border-bottom-width", "thick");
        }
       });

    });
    </script>
  </body>
  <footer>
    <div class="container" >
      <div class="row footer">
        <div class="col-md-3">
          <div class="text_red">Dirección:</div>
          <span class="text_white">Calle German Schreiber 276</span><br>
          <span class="text_white">San Isidro - Lima - Perú</span>
        </div>
        <div class="col-md-2">
          <div class="text_red">Teléfono:</div>
          <a href="tel:4697684">
  <span class="text_white">+51 | 4697684</span>
</a>
        </div>
        <div class="col-md-3">
          <div class="text_red">Mail</div>
          <a href="mailto:info@rfidperu.pe">
  <span class="text_white">info@rfidperu.pe</span>
</a>
        </div>
      </div>
      <br>
      <div class="row footer">
        <div class="col-xs-1 col-sm-1 col-md-1">
          <a href="https://www.facebook.com">
            <img src="<?php echo base_url(); ?>/application/helpers/iconos/footer/icono-de-face.png" alt="">
          </a>
        </div>
        <div class="col-xs-1 col-sm-1 col-md-1">
          <a href="https://twitter.com">
            <img src="<?php echo base_url(); ?>/application/helpers/iconos/footer/twitter.png" alt="">
          </a>
        </div>
        <div class="col-xs-1 col-sm-1 col-md-1">
          <a href="https://www.youtube.com/">
            <img src="<?php echo base_url(); ?>/application/helpers/iconos/footer/yt.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </footer>
</html>
