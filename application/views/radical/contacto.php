<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <link href="<?php echo base_url(); ?>/application/helpers/css/bootstrap.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>/application/helpers/css/principal.css" rel="stylesheet">
      <title>Nosotros</title>
  </head>
  <body>
    <header>

    </header>
    <div class="row" style="width:100%;z-index: 10;padding-top:2%;padding-bottom:2%">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="text-align: left;left: 5%;">
        <img class="logo" style="width: 100%" src="<?php echo base_url(); ?>/application/helpers/images/carousel/LOGO-COLORES.png" alt="">
      </div>
      <div class="col-xs-2 col-sm-2 col-sm-offset-2 col-md-2 col-md-offset-2 col-lg-1 col-lg-offset-5">
        <a href="#soluciones" class="scroll" style="text-decoration:none;color:black"><span class="subray">SOLUCIONES</span></a>
      </div>
      <div class="col-xs-2 col-sm-2 col-lg-1">
        <a href="<?php echo base_url();?>Radical/exitos" style="text-decoration:none;color:black"><span class="subray">CASOS DE ÉXITO</span></a>
      </div>
      <div class="col-xs-2 col-sm-2 col-lg-1">
        <a href="<?php echo base_url();?>Radical/nosotros" style="text-decoration:none;color:black"><span class="subray">NOSOTROS</span></a>
      </div>
      <div class="col-xs-2 col-sm-2 col-lg-1">
        <a href="<?php echo base_url();?>Radical/contacto" style="text-decoration:none;color:black"><span class="subray" id="best">CONTACTO</span></a>
      </div>
    </div>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img style="height:800px" src="<?php echo base_url(); ?>/application/helpers/images/CONTACTO.jpg" alt="...">
          <div class="carousel-caption center" style="top: 45%;">
            <div class="" style="width: 40%;opacity: 0.7;">
              <span class="top">CONTACTANOS</span>
              <form role="form">
                <div class="input-group input-group-lg" style="width: 100%;">
                  <input type="text" class="form-control" placeholder="Nombre:" aria-describedby="sizing-addon1">
                </div>
                <div class="input-group input-group-lg" style="width: 100%;">
                <input type="text" class="form-control" placeholder="Email:" aria-describedby="sizing-addon1">
                </div>
                <div class="input-group input-group-lg" style="width: 100%;">
                  <input type="text" class="form-control" placeholder="Teléfono:" aria-describedby="sizing-addon1">
                </div>
                <div class="input-group input-group-lg" style="width: 100%;">
                  <input type="text" class="form-control" placeholder="Mensaje:" aria-describedby="sizing-addon1">
                </div>
                <button style="width: 100%;" type="submit" class="btn btn-default">Enviar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
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
          <a href="mailto:info@rfidperu.pe">
            <span class="text_white">info@rfidperu.pe</span>
          </a>
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
        <a href="https://www.youtube.com/">
          <img src="<?php echo base_url(); ?>/application/helpers/iconos/footer/yt.png" alt="">
        </a>
      </div>
    </div>
  </div>
</footer>
</html>
