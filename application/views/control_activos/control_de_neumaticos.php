<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
      <link href="<?php echo base_url(); ?>/application/helpers/css/bootstrap.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>/application/helpers/css/principal.css" rel="stylesheet">
      <title>Control de mascotas</title>
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
          <img src="<?php echo base_url(); ?>/application/helpers/images/control/neumaticos/CONTROL-DE-NEUMATICOS-HEADER.jpg" alt="...">
          <div class="carousel-caption banner_res_2" id="hide1" style="display:none;">
            <span class="top">CONTROL DE </span><span class="text_red top">NEUMÁTICOS</span><br>
            <span class="back">CON TECNOLOGÍA RFID</span><br>
          </div>
        </div>
      </div>
    </div>
    <div class="bloque" id="soluciones">
      <div class="row titulo">
        <div class="col-md-12">
          <span class="">OPTIMICE SUS NEUMÁTICOS</span>
        </div>
      </div>
      <div class="row detalle">
        <div class="col-md-12">
          <span>Nuestra solución utiliza identificadores RFID aplicados en la parte interior del neumático</span><br>
          <span>reduciendo tiempos, recursos y errores involucrados en la gestión de los mismos.</span>
        </div>
      </div>
    </div>
    <div class="cuerpodetalle" id="bloques" >
      <div class="row ">
        <div class="col-md-4 black center" id="a" style="display:none;">
          <div class="">
            <img src="<?php echo base_url(); ?>/application/helpers/iconos/control_activos/ICONO-3.png" alt="">
          </div>
          <div class="">
            <span class="text_white_bold">PROBLEMA</span>
          </div>
          <div class="row">
            <div class="col-xs-1 col-sm-1 col-md-1">
              <span class="text_white_bold">_</span>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10  left">
              <span class="text_white_detalle">Robos y pérdidas de neumáticos.</span>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-1 col-sm-1 col-md-1">
              <span class="text_white_bold">_</span>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10  left">
              <span class="text_white_detalle">Desconocimiento de tiempo de vida de los neumáticos.</span>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-1 col-sm-1 col-md-1">
              <span class="text_white_bold">_</span>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10  left">
              <span class="text_white_detalle">Desperdicio de recursos designados a la gestión de los neumáticos.</span>
            </div>
          </div>
        </div>
        <div class="col-md-4 red center" id="b" style="display:none;">
          <div class="">
            <img src="<?php echo base_url(); ?>/application/helpers/iconos/control_activos/ICONO-2.png" alt="">
          </div>
          <div class="">
            <span class="text_white_bold">SOLUCIÓN</span>
          </div>
          <div class="row">
            <div class="col-xs-1 col-sm-1 col-md-1">
              <span class="text_white_bold">_</span>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10  left">
              <span class="text_white_detalle">Identificar cada neumático con un tag RFID.</span>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-1 col-sm-1 col-md-1">
              <span class="text_white_bold">_</span>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10  left">
              <span class="text_white_detalle">Asociar cada neumático con su vehículo correspondiente.</span>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-1 col-sm-1 col-md-1">
              <span class="text_white_bold">_</span>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10  left">
              <span class="text_white_detalle">El sistema conocerá qué neumático utiliza cada auto para una posterior auditoría.</span>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-1 col-sm-1 col-md-1">
              <span class="text_white_bold">_</span>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10  left">
              <span class="text_white_detalle">Inspeccionar los kilómetros recorridos, la presión del aire y la profundidad de la huella, utilizando el terminar portátil.</span>
            </div>
          </div>
        </div>
        <div class="col-md-4 black center" id="c" style="display:none;">
          <div class="">
            <img src="<?php echo base_url(); ?>/application/helpers/iconos/control_activos/ICONO-1.png" alt="">
          </div>
          <div class="">
            <span class="text_white_bold">BENEFICIO</span>
          </div>
          <div class="row">
            <div class="col-xs-1 col-sm-1 col-md-1">
              <span class="text_white_bold">_</span>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10  left">
              <span class="text_white_detalle">Lectura de activos en tiempo real.</span>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-1 col-sm-1 col-md-1">
              <span class="text_white_bold">_</span>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10  left">
              <span class="text_white_detalle">Mayor seguridad de los equipos e información confidencial.</span>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-1 col-sm-1 col-md-1">
              <span class="text_white_bold">_</span>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10  left">
              <span class="text_white_detalle">Reducción de robos y pérdidas.</span>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-1 col-sm-1 col-md-1">
              <span class="text_white_bold">_</span>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10  left">
              <span class="text_white_detalle">Administración eficiente sobre movimiento de los equipos.</span>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-1 col-sm-1 col-md-1">
              <span class="text_white_bold">_</span>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10  left">
              <span class="text_white_detalle">Reducción de costos y tiempo relacionado a inventarios.</span>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-1 col-sm-1 col-md-1">
              <span class="text_white_bold">_</span>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10  left">
              <span class="text_white_detalle">Visibilidad completa y real sobre el movimiento de los equipos.</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="fichero">
      <img class="fondotop" src="<?php echo base_url(); ?>/application/helpers/images/control/neumaticos/control-de-neumaticos-superior.png" alt="" id="top" style="opacity:0">
      <img class="fondobot" align="right" src="<?php echo base_url(); ?>/application/helpers/images/control/neumaticos/control-de-neumaticos-inferior.png" alt="" id="bot" style="opacity:0">
      <div class="primero" id="num_1" style="display:none">
        <div class="row text_orange_bold">
          <div class="col-xs-1 col-sm-1 col-md-1">
            1.
          </div>
          <div class="col-md-9">
            DIAGNOSTICO PRECISO
          </div>
        </div>
        <div class="row">
          <div class="col-xs-1 col-sm-1 col-md-1">
          </div>
          <div class="col-md-9">
            y seguro.
          </div>
        </div>
      </div>
      <div class="segundo" id="num_2" style="display:none">
        <div class="row" style="margin-left: 10%;">
          <img class="imagen" src="<?php echo base_url(); ?>/application/helpers/iconos/control_activos/neumaticos/icono-1.png" alt="">
        </div>
        <div class="row text_orange_bold">
          <div class="col-xs-1 col-sm-1 col-md-1">
            2.
          </div>
          <div class="col-md-9">
            LECTURA
          </div>
        </div>
        <div class="row">
          <div class="col-xs-1 col-sm-1 col-md-1">
          </div>
          <div class="col-md-9">
            a tiempo real.
          </div>
        </div>
      </div>
      <div class="tercero" style="left: 52%;display:none" id="num_3">
        <div class="row text_orange_bold">
          <div class="col-xs-1 col-sm-1 col-md-1">
            3.
          </div>
          <div class="col-md-9">
            REDUCE
            <span style="color:#333; font-weight:normal;font-size:14px;"> el</span>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-1 col-sm-1 col-md-1">
          </div>
          <div class="col-md-9">
            riesgo de perdidas.
          </div>
        </div>
      </div>
      <div class="cuarto" style="top: 65%;left: 65%;display:none" id="num_4">
        <div class="row" style="margin-left: 20%;">
          <img class="imagen" src="<?php echo base_url(); ?>/application/helpers/iconos/control_activos/neumaticos/icono-2.png" alt="">
        </div>
        <div class="row text_orange_bold">
          <div class="col-xs-1 col-sm-1 col-md-1">
            4.
          </div>
          <div class="col-md-9">
            OPTIMIZA
            <span style="color:#333; font-weight:normal;font-size:14px;"> el</span>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-1 col-sm-1 col-md-1">
          </div>
          <div class="col-md-9">
            ciclo de vida de la llanta.
          </div>
        </div>
      </div>
      <div class="quinto" id="num_5" style="display:none">
        <img style="width: 40%;" class="imagen" src="<?php echo base_url(); ?>/application/helpers/iconos/control_activos/neumaticos/logo-tire-sense.png" alt="">
      </div>
    </div>
    <script src="<?php echo base_url(); ?>/application/helpers/js/jquery-1.11.1.js"></script>
    <script src="<?php echo base_url(); ?>/application/helpers/js/bootstrap.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){

      $('body').scrollspy({target: ".navbar", offset: 50});

      $('#hide1').fadeIn(3000);

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
       var count=0;
       $(window).scroll(function() {
           var bottom_of_object = $("#soluciones").offset().top;
           var bottom_of_window_ini = $(window).scrollTop() + $(window).height();
           var bottom_of_object_bloque = $("#bloques").offset().top;
           var bottom_of_window = $(window).scrollTop();

           if( bottom_of_window_ini >= bottom_of_object ){
             $('#a').delay(0).fadeIn(2000);
             $('#a').css("min-height","645px");
             $('#b').delay(1200).fadeIn(2000);
             $('#b').css("min-height","645px");
             $('#c').delay(2400).fadeIn(2000);
             $('#c').css("min-height","645px");
           }
           if( bottom_of_window >= bottom_of_object_bloque ){
             if (count==0) {
               var top = $("#top");
               top.animate({right: '500px', opacity: '0.0'}, "fast");
               top.animate({right: '0px', opacity: '1'}, 3000);

               var bot = $("#bot");
               bot.animate({left: '500px', opacity: '0.0'}, "fast");
               bot.animate({left: '0px', opacity: '1'}, 3000);
               $("#num_1").delay(3000).fadeIn(2000);
               $("#num_2").delay(4000).fadeIn(2000);
               $("#num_3").delay(5000).fadeIn(2000);
               $("#num_4").delay(6000).fadeIn(2000);
               $("#num_5").delay(3000).fadeIn(2000);
             }
              count++;
           }
       });

    });
    </script>
  </body>
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
