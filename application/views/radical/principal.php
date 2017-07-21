<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <link href="<?php echo base_url(); ?>/application/helpers/css/bootstrap.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>/application/helpers/css/principal.css" rel="stylesheet">
      <title>Radical - WEB</title>
      <link rel="shortcut icon" href="<?php echo base_url(); ?>/application/helpers/iconos/icono.png" type="image/png" />
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
              <a href="#soluciones" class="scroll" style="text-decoration:none;color:white"><span class="subray" id="best">SOLUCIONES</span></a>
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
                  <li class="active"><a href="#soluciones" class="subray" id="best">SOLUCIONES</a></li>
                  <li class=""><a href="<?php echo base_url();?>Radical/exitos">CASOS DE ÉXITO</a></li>
                  <li class=""><a href="<?php echo base_url();?>Radical/nosotros">NOSOTROS</a></li>
                  <li class=""><a href="<?php echo base_url();?>Radical/contacto">CONTACTO</a></li>
                </ul>
              </div>
            </div>
          </div>
          <video style="width: 100%" src="<?php echo base_url(); ?>/application/helpers/images/header.mp4" autoplay preload loop></video>
          <div class="carousel-caption banner_res" id="hide2" style="left: 5%;text-align-last: left;z-index: 10;padding-bottom: 23%;display:none">
            <span class="top" style="font-size: 350%;">Desarrollamos soluciones</span><br>
            <span class="top" style="font-size: 350%;">radicales integrando</span><br>
            <span class="top" style="font-size: 350%;">tecnologías RFID/NFC.</span><br>
            <div>
            <a href="#soluciones" class="scroll">
              <img class="img_res" src="<?php echo base_url(); ?>/application/helpers/images/boton.png" alt="...">
            </a>
            </div>
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
        <div class="col-lg-12">
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
    <div class="cuerpo">
      <img class="fondotop" src="<?php echo base_url(); ?>/application/helpers/images/cuerpo/adorno-superior.png" alt="">
      <img class="fondobot" align="right" src="<?php echo base_url(); ?>/application/helpers/images/cuerpo/adorno-inferior.png" alt="">
      <div class="linea row"  style="display:inline;padding-right:0;padding-left:0;">
        <div class="col-sm-4 col-md-3 col-lg-2" id="hide3" style="min-height: 0;padding-right: 0;padding-left: 0;opacity:0">
          <a href="<?php echo base_url(); ?>Control_Activos">
            <img src="<?php echo base_url(); ?>/application/helpers/images/cuerpo/1.jpg" alt="">
          </a>
          <div class="centro">
            <span>SOLUCIÓN DE </span>
            <span>ACTIVOS</span>
          </div>
        </div>
        <div class="col-sm-4 col-md-3 col-lg-2" id="hide4" style="min-height: 0;padding-right: 0;padding-left: 0;opacity:0">
          <a href="<?php echo base_url(); ?>Trazabilidad_de_Carga">
            <img src="<?php echo base_url(); ?>/application/helpers/images/cuerpo/2.jpg" alt="">
          </a>
          <div class="centro">
            <span>TRAZABILIDAD DE</span>
            <span>CARGA</span>
          </div>
        </div>
        <div class="col-sm-4 col-md-3 col-lg-2" id="hide5" style="min-height: 0;padding-right: 0;padding-left: 0;opacity:0">
          <a href="<?php echo base_url(); ?>Control_Retail_Inventario">
            <img src="<?php echo base_url(); ?>/application/helpers/images/cuerpo/3.jpg" alt="">
          </a>
          <div class="centro">
            <span>SOLUCIÓN DE</span>
            <span>RETAIL E INVENTARIOS</span>
          </div>
        </div>
        <div class="col-sm-4 col-md-3 col-lg-2" id="hide6" style="min-height: 0;padding-right: 0;padding-left: 0;opacity:0">
          <a href="<?php echo base_url(); ?>Salud_y_Trazabilidad">
            <img src="<?php echo base_url(); ?>/application/helpers/images/cuerpo/4.jpg" alt="">
          </a>
          <div class="centro">
            <span>SALUD Y</span>
            <span>TRAZABILIDAD</span>
          </div>
        </div>
        <div class="col-sm-4 col-md-3 col-lg-2" id="hide7" style="min-height: 0;padding-right: 0;padding-left: 0;opacity:0">
          <a href="<?php echo base_url(); ?>Control_de_Gas">
            <img src="<?php echo base_url(); ?>/application/helpers/images/cuerpo/5.jpg" alt="">
          </a>
          <div class="centro">
            <span>SOLUCIÓN</span>
            <span>OIL & GAS</span>
          </div>
        </div>
        <div class="col-sm-4 col-md-3 col-lg-2" id="hide8" style="min-height: 0;padding-right: 0;padding-left: 0;opacity:0">
          <a href="<?php echo base_url(); ?>Control_de_Peaje">
            <img src="<?php echo base_url(); ?>/application/helpers/images/cuerpo/6.jpg" alt="">
          </a>
          <div class="centro">
            <span>SOLUCIÓN DE PEAJE</span>
          </div>
        </div>
        <div class="col-sm-4 col-md-3 col-lg-2" id="hide9" style="min-height: 0;padding-right: 0;padding-left: 0;opacity:0">
          <a href="<?php echo base_url(); ?>Control_de_Mascotas">
            <img src="<?php echo base_url(); ?>/application/helpers/images/cuerpo/7.jpg" alt="">
          </a>
          <div class="centro">
            <span>CONTROL DE</span>
            <span>MASCOTAS</span>
          </div>
        </div>
        <div class="col-sm-4 col-md-3 col-lg-2" id="hide10" style="min-height: 0;padding-right: 0;padding-left: 0;opacity:0">
          <a href="<?php echo base_url(); ?>Control_de_Acceso">
            <img src="<?php echo base_url(); ?>/application/helpers/images/cuerpo/11.jpg" alt="">
          </a>
          <div class="centro">
            <span>SOLUCIÓN DE</span>
            <span>ACCESO RFID + CCTV</span>
          </div>
        </div>
        <div class="col-sm-4 col-md-3 col-lg-2" id="hide13" style="min-height: 0;padding-right: 0;padding-left: 0;opacity:0">
          <a href="<?php echo base_url(); ?>Control_de_Pagos">
            <img src="<?php echo base_url(); ?>/application/helpers/images/cuerpo/12.jpg" alt="">
          </a>
          <div class="centro">
            <span>SOLUCIÓN DE</span>
            <span>CONTROL DE PAGOS</span>
          </div>
        </div>
        <div class="col-sm-4 col-md-3 col-lg-2" id="hide11" style="min-height: 0;padding-right: 0;padding-left: 0;opacity:0">
        <!--  <a href="<?php echo base_url(); ?>Seguridad_Publica">-->
        <a href="#"  data-toggle="modal" data-target=".bs-example-modal-sm">
            <img src="<?php echo base_url(); ?>/application/helpers/images/cuerpo/8.jpg" alt="">
          </a>
          <div class="centro">
            <span>SEGURIDAD</span>
            <span>PÚBLICA</span>
          </div>
        </div>
        <div class="col-sm-4 col-md-3 col-lg-2" id="hide12" style="min-height: 0;padding-right: 0;padding-left: 0;opacity:0">
          <!--<a href="<?php echo base_url(); ?>Manejo_de_Desastres">-->
          <a href="#"  data-toggle="modal" data-target=".bs-example-modal-sm">
            <img src="<?php echo base_url(); ?>/application/helpers/images/cuerpo/9.jpg" alt="">
          </a>
          <div class="centro">
            <span>MANEJO DE</span>
            <span>DESASTRES</span>
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

      $('body').scrollspy({target: ".navbar", offset: 50});

      $('#hide1').fadeIn(4000);
      $('#hide2').fadeIn(4000);
      var count=0;
      $(window).scroll(function() {
          var bottom_of_object = $("#soluciones").offset().top;
          var bottom_of_window_ini = $(window).scrollTop() + $(window).height();
          var bottom_of_window = $(window).scrollTop();

          if( bottom_of_window_ini >= bottom_of_object ){
            if (count==0) {
              var dato = $('#hide3');
              dato.animate({left: '800px', opacity: '0.0'}, "fast");
              dato.animate({left: '0px', opacity: '1'}, 4000);
              dato = $('#hide4');
              dato.animate({right: '800px', opacity: '0.0'}, "fast");
              dato.animate({right: '0px', opacity: '1'}, 4000);
              dato = $('#hide5');
              dato.animate({top: '800px', opacity: '0.0'}, "fast");
              dato.animate({top: '0px', opacity: '1'}, 4000);
              dato = $('#hide6');
              dato.animate({left: '800px', opacity: '0.0'}, "fast");
              dato.animate({left: '0px', opacity: '1'}, 4000);
              dato = $('#hide7');
              dato.animate({top: '800px', opacity: '0.0'}, "fast");
              dato.animate({top: '0px', opacity: '1'}, 4000);
              dato = $('#hide8');
              dato.animate({right: '800px', opacity: '0.0'}, "fast");
              dato.animate({right: '0px', opacity: '1'}, 4000);
              dato = $('#hide9');
              dato.animate({top: '800px', opacity: '0.0'}, "fast");
              dato.animate({top: '0px', opacity: '1'}, 4000);
              dato = $('#hide10');
              dato.animate({bottom: '800px', opacity: '0.0'}, "fast");
              dato.animate({bottom: '0px', opacity: '1'}, 4000);
              dato = $('#hide11');
              dato.animate({top: '800px', opacity: '0.0'}, "fast");
              dato.animate({top: '0px', opacity: '1'}, 4000);
              dato = $('#hide12');
              dato.animate({bottom: '800px', opacity: '0.0'}, "fast");
              dato.animate({bottom: '0px', opacity: '1'}, 4000);
              dato = $('#hide13');
              dato.animate({right: '800px', opacity: '0.0'}, "fast");
              dato.animate({right: '0px', opacity: '1'}, 4000);
            }
            count++;
          }
      });



        // Add smooth scrolling on all links inside the navbar
        $(".scroll").on('click', function(event) {
          // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();
            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 1000, function(){

              // Add hash (#) to URL when done scrolling (default click behavior)
              window.location.hash = hash;
            });
          }  // End if
        });

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
        <h1 class="text_red_bold">Acceso restringido.</h1>
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
          <a href="https://www.youtube.com/channel/UC3r1_TGCB-fGUx3_q4pScNQ">
            <img src="<?php echo base_url(); ?>/application/helpers/iconos/footer/yt.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </footer>
</html>
