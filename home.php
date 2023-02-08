<?php
require("config/session.php");
// require("config/helper.php");
require("config/database.php");
require("config/constant.php");
confirm_logged_in();
?>
<!DOCTYPE html>
<html lang="es-MX">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1,
      shrink-to-fit=no">
  <meta name="robots" content="noindex, nofollow">

  <title>Inicio - Visor</title>
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/elhorizonte_favicon.png">

  <!-- bootstrap 5.1.0-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

  <!-- Main Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;600&display=swap" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script src="https://npmcdn.com/flatpickr/dist/l10n/es.js"></script>
</head>

<body class="bg-azteca-azul">
  <header>
    <div class="container-fluid bg-azteca-morado">
      <div class="row">
        <div class="col-md-2 py-4 mx-auto">
          <img src="image/azteca-noreste-logo-web.png" class="img-fluid">
        </div>
      </div>
    </div>
  </header>

  <!-- VISORES -->
  <section>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-12 text-center pt-4">
          <!-- <p class="h2 text-uppercase text-white">Rating</p> -->
        </div>
        <hr>
        <div class="col-md-4">
          <div class="mx-auto py-3" style="max-width: 180px; height:100px;">
            <p class="h3 text-uppercase text-white text-center">TELEVISA LOCAL 4.1</p>
          </div>
          <div class="ratio ratio-16x9">
            <video id="televisa" controls="">
              <source src="" type="video/mp4">
            </video>
          </div>
        </div>
        <div class="col-md-4">
          <div class="mx-auto py-3" style="max-width: 180px; height:100px;">
            <p class="h3 text-uppercase text-white text-center">AZTECA LOCAL 7.1</p>
          </div>
          <div class="ratio ratio-16x9">
            <video id="azteca" controls="">
              <source src="" type="video/mp4">
            </video>
          </div>
        </div>
        <div class="col-md-4">
          <div class="mx-auto py-3" style="max-width: 180px; height:100px;">
            <p class="h3 text-uppercase text-white text-center">MULTIMEDIOS LOCAL 6.1</p>
          </div>
          <div class="ratio ratio-16x9">
            <video id="multimedios" controls="">
              <source src="" type="video/mp4">
            </video>
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr>
  <!-- BOTONES -->
  <section>
    <div class="container pt-5 d-flex">
      <div class="row">
        <div class="col-md-12">
          <div class="input-group text-center">
            <select id="año" name="año">
              <option value="2023">2023</option>
            </select>
            <select onchange="getVideo()" id="mes" name="mes">
              <option value="01">Enero</option>
              <option value="02">Febrero</option>
              <option value="03">Marzo</option>
              <option value="04">Abril</option>
              <option value="05">Mayo</option>
              <option value="06">Junio</option>
              <option value="07">Julio</option>
              <option value="08">Agosto</option>
              <option value="09">Septiembre</option>
              <option value="10">Octubre</option>
              <option value="11">Noviembre</option>
              <option value="12">Diciembre</option>
            </select>
            <select onchange="getVideo()" id="dia" name="dia">
              <option value="01">01</option>
              <option value="02">02</option>
              <option value="03">03</option>
              <option value="04">04</option>
              <option value="05">05</option>
              <option value="06">06</option>
              <option value="07">07</option>
              <option value="08">08</option>
              <option value="09">09</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
              <option value="26">26</option>
              <option value="27">27</option>
              <option value="28">28</option>
              <option value="29">29</option>
              <option value="30">30</option>
              <option value="31">31</option>
            </select>
            <select onchange="getVideo()" id="hora" name="hora">
              <option value="00">12:00AM</option>
              <option value="01">01:00AM</option>
              <option value="02">02:00AM</option>
              <option value="03">03:00AM</option>
              <option value="04">04:00AM</option>
              <option value="05">05:00AM</option>
              <option value="06">06:00AM</option>
              <option value="07">07:00AM</option>
              <option value="08">08:00AM</option>
              <option value="09">09:00AM</option>
              <option value="10">10:00AM</option>
              <option value="11">11:00AM</option>
              <option value="12">12:00PM</option>
              <option value="13">01:00PM</option>
              <option value="14">02:00PM</option>
              <option value="15">03:00PM</option>
              <option value="16">04:00PM</option>
              <option value="17">05:00PM</option>
              <option value="18">06:00PM</option>
              <option value="19">07:00PM</option>
              <option value="20">08:00PM</option>
              <option value="21">09:00PM</option>
              <option value="22">10:00PM</option>
              <option value="23">11:00PM</option>
            </select>
            <select onchange="getSpeed()" id="velocidad" name="velocidad">
              <option value="1.0">1X</option>
              <option value="1.5">1.5X</option>
              <option value="2.0">2X</option>
              <option value="4.0">4X</option>
              <option value="6.0">6X</option>
              <option value="8.0">8X</option>
            </select>
          </div>
        </div>
        <br>
        <br>
        <br>
        <div class="col-md-12">
          <button class="btn btn-primary btn-lg btn-play-pause btn-play" onclick="playVid()" type="button">
            <i class="pe-2">
              <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                <path d="M73
                    39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4
                    33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2
                    23-41s-8.7-32.2-23-41L73 39z" />
              </svg>
            </i>Play</button>

          <button class="btn btn-primary btn-lg btn-play-pause btn-pause" onclick="pauseVid()" type="button">
            <i class="pe-2">
              <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                <path d="M48 64C21.5 64 0 85.5 0
                      112V400c0 26.5 21.5 48 48 48H80c26.5 0 48-21.5
                      48-48V112c0-26.5-21.5-48-48-48H48zm192 0c-26.5 0-48
                      21.5-48 48V400c0 26.5 21.5 48 48 48h32c26.5 0 48-21.5
                      48-48V112c0-26.5-21.5-48-48-48H240z" />
              </svg>
            </i>
            Pause</button>

          <button class="btn btn-primary btn-lg btn-play-pause btn-pause" onclick="muteVid()" type="button">
            <i class="pe-2">
              <svg xmlns="http://www.w3.org/2000/svg" height="20" width="30" viewBox="0 0 512 512">
                <path
                  d="M301.1 34.8C312.6 40 320 51.4 320 64V448c0 12.6-7.4 24-18.9 29.2s-25 3.1-34.4-5.3L131.8 352H64c-35.3 0-64-28.7-64-64V224c0-35.3 28.7-64 64-64h67.8L266.7 40.1c9.4-8.4 22.9-10.4 34.4-5.3zM425 167l55 55 55-55c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-55 55 55 55c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-55-55-55 55c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l55-55-55-55c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0z" />
              </svg>
            </i>
            Mute</button>

        </div>
      </div>

    </div>

  </section>
</body>
<script>
var azteca = document.getElementById("azteca");
var televisa = document.getElementById("televisa");
var multimedios = document.getElementById("multimedios");

function playVid() {
  azteca.play();
  televisa.play();
  multimedios.play();
}

function pauseVid() {
  azteca.pause();
  televisa.pause();
  multimedios.pause();
}

function getSpeed() {
  const velocidad = document.getElementById("velocidad").value;
  console.log(velocidad);
  azteca.playbackRate = velocidad;
  televisa.playbackRate = velocidad;
  multimedios.playbackRate = velocidad;
}

function muteVid() {
  if (azteca.muted === false) {    
    azteca.muted = true;
    televisa.muted = true;
    televisa.muted = true;
  } else {
    azteca.muted = false;
    televisa.muted = false;
    televisa.muted = false;
  };  
}

function getVideo() {
  // get date from fp
  const año = document.getElementById("año").value;
  const mes = document.getElementById("mes").value;
  const dia = document.getElementById("dia").value;
  const hora = document.getElementById("hora").value + '0000';
  console.log(año + " " + mes + " " + dia + " " + hora)

  var televisa = document.getElementById('televisa');
  var azteca = document.getElementById('azteca');
  var multimedios = document.getElementById('multimedios');

  // set videos
  televisa.setAttribute('src', 'media/televisa/' + año + '/' + mes + '/' + dia + '/' + hora + '.MP4');
  televisa.setAttribute('type', 'video/mp4');

  azteca.setAttribute('src', 'media/tva/' + año + '/' + mes + '/' + dia + '/' + hora + '.MP4');
  azteca.setAttribute('type', 'video/mp4');

  multimedios.setAttribute('src', 'media/mm/' + año + '/' + mes + '/' + dia + '/' + hora + '.mp4');
  multimedios.setAttribute('type', 'video/mp4');
}
</script>

</html>