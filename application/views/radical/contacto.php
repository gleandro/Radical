<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <link href="<?php echo base_url(); ?>/application/helpers/css/bootstrap.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>/application/helpers/css/principal.css" rel="stylesheet">
      <title>Contacto</title>
  </head>
  <body>
    <header>

    </header>
    <div class="row contac_row aditional_none">
      <div class="row center responsive_header_2">
        <div class="logo_ref col-sm-3 col-md-2 col-lg-2">
          <img class="logo_contac" src="<?php echo base_url(); ?>/application/helpers/images/carousel/LOGO-COLORES.png" alt="">
        </div>
        <div class="col-sm-1 col-sm-offset-1 col-md-1 col-md-offset-4 col-lg-1 col-lg-offset-5">
          <a href="<?php echo base_url();?>" class="scroll" style="text-decoration:none;color:black"><span class="subray">SOLUCIONES</span></a>
        </div>
        <div class="col-sm-3 col-md-2 col-lg-2-5" style="text-align:center;">
          <a href="<?php echo base_url();?>Radical/exitos" style="text-decoration:none;color:black"><span class="subray">CASOS DE ÉXITO</span></a>
        </div>
        <div class="col-sm-2 col-md-1 col-lg-1">
          <a href="<?php echo base_url();?>Radical/nosotros" style="text-decoration:none;color:black"><span class="subray">NOSOTROS</span></a>
        </div>
        <div class="col-sm-2 col-md-1 col-lg-1">
          <a href="<?php echo base_url();?>Radical/contacto" style="text-decoration:none;color:black"><span class="subray" id="best">CONTACTO</span></a>
        </div>
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
            <li class=""><a href="<?php echo base_url();?>">SOLUCIONES</a></li>
            <li class=""><a href="<?php echo base_url();?>Radical/exitos">CASOS DE ÉXITO</a></li>
            <li class=""><a href="<?php echo base_url();?>Radical/nosotros">NOSOTROS</a></li>
            <li class="active"><a href="<?php echo base_url();?>Radical/contacto">CONTACTO</a></li>
          </ul>
        </div>
      </div>
    </div>
    <a href="mailto:info@rfidperu.pe">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img style="height:800px" src="<?php echo base_url(); ?>/application/helpers/images/CONTACTO.jpg" alt="...">
            <div class="carousel-caption center_2" id="hide1" style="display:none;">
              <div class="row">
                <div class="col-lg-12">
                  <span class="top">CONTACTANOS</span>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <img class="sobre" src="<?php echo base_url();?>/application//helpers/images/enviar.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </a>
    <script src="<?php echo base_url(); ?>/application/helpers/js/jquery-1.11.1.js"></script>
    <script src="<?php echo base_url(); ?>/application/helpers/js/bootstrap.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){

      $('body').scrollspy({target: ".navbar", offset: 50});

      $('#hide1').fadeIn(4000);

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
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document" style="width: 50%;text-align:center">
    <div class="modal-content">
        <h1 class="text_red_bold">No puede ingresar a esta opción.</h1>
    </div>
  </div>
</div>
<footer>
  <div class="container" >
    <div class="row footer">
      <div class="col-lg-3">
        <div class="text_red">Dirección:</div>
        <span class="text_white">Calle German Schreiber 276</span><br>
        <span class="text_white">San Isidro - Lima - Perú</span>
      </div>
      <div class="col-lg-2">
        <div class="text_red">Teléfono:</div>
        <a href="tel:4697684">
          <span class="text_white">+51 | 4697684</span>
        </a>
      </div>
      <div class="col-lg-3">
        <div class="text_red">Mail</div>
        <a href="mailto:info@rfidperu.pe">
            <span class="text_white">info@rfidperu.pe</span>
        </a>
      </div>
    </div>
    <br>
    <div class="row footer">
      <div class="col-xs-2 col-md-1 col-lg-1">
        <a href="https://www.facebook.com">
          <img src="<?php echo base_url(); ?>/application/helpers/iconos/footer/icono-de-face.png" alt="">
        </a>
      </div>
      <div class="col-xs-2 col-md-1 col-lg-1">
        <a href="https://twitter.com">
          <img src="<?php echo base_url(); ?>/application/helpers/iconos/footer/twitter.png" alt="">
        </a>
      </div>
      <div class="col-xs-2 col-md-1 col-lg-1">
        <a href="https://www.youtube.com/channel/UC3r1_TGCB-fGUx3_q4pScNQ">
          <img src="<?php echo base_url(); ?>/application/helpers/iconos/footer/yt.png" alt="">
        </a>
      </div>
    </div>
  </div>
</footer>
</html>
