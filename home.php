<?php
require("config/session.php");
require("config/helper.php");
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
  <div class="col-md-12 text-center pt-4">
    <input type="range" class="form-range" step="any" id="seekbar" style="width:700px; text-align: center;" onchange="ChangeTheTime()">
    <br>
    <span id="lblTime"></span>
  </div>
  <br>
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
              <option selected value="02">Febrero</option>
            </select>
            <select onchange="getVideo()" id="dia" name="dia">
              <option value="02">02</option>
              <option value="03">03</option>
              <option value="06">06</option>
              <option value="07">07</option>
              <option value="08">08</option>
              <option value="09">09</option>
              <option value="10">10</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option selected value="16">16</option>
            </select>
            <select onchange="getVideo()" id="hora" name="hora">
              <option selected value="horario">HORARIO</option>
              <option value="05">05:00AM</option>
              <option value="06">06:00AM</option>
              <option value="07">07:00AM</option>
              <option value="08">08:00AM</option>
              <option value="09">09:00AM</option>
            </select>
            <select onchange="getSpeed()" id="velocidad" name="velocidad">
              <option value="1.0">1X</option>
              <option value="5.0">5X</option>
              <option value="10.0">10X</option>
              <option value="15.0">15X</option>
            </select>
          </div>
        </div>
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
var seekbar = document.getElementById('seekbar');

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
  azteca.playbackRate = velocidad;
  televisa.playbackRate = velocidad;
  multimedios.playbackRate = velocidad;
}

function muteVid() {
  if (azteca.muted === false) {    
    azteca.muted = true;
    televisa.muted = true;
    multimedios.muted = true;
  } else {
    azteca.muted = false;
    televisa.muted = false;
    multimedios.muted = false;
  };  
}

window.onload = function () {
  azteca.addEventListener('timeupdate', UpdateTheTime, false);
  televisa.addEventListener('timeupdate', UpdateTheTime, false);
  multimedios.addEventListener('timeupdate', UpdateTheTime, false);
  azteca.addEventListener('durationchange', SetSeekBar, false);
  televisa.addEventListener('durationchange', SetSeekBar, false);
  multimedios.addEventListener('durationchange', SetSeekBar, false);
}

function SetSeekBar() {
  seekbar.min = 0;
  seekbar.max = azteca.duration;
}

function ChangeTheTime() {
  azteca.currentTime = seekbar.value;
  televisa.currentTime = seekbar.value;
  multimedios.currentTime = seekbar.value;
}

function UpdateTheTime() {
  var sec = azteca.currentTime;
  var h = Math.floor(sec / 3600);
  sec = sec % 3600;
  var min = Math.floor(sec / 60);
  sec = Math.floor(sec % 60);
  if (sec.toString().length < 2) sec = "0" + sec;
  if (min.toString().length < 2) min = "0" + min;
  document.getElementById("lblTime").style.color = "white";
  document.getElementById('lblTime').innerHTML = h + ":" + min + ":" + sec;
  seekbar.min = azteca.startTime;
  seekbar.max = azteca.duration;
  seekbar.value = azteca.currentTime;
}

function getVideo() {
  // get date from fp
  const año = document.getElementById("año").value;
  const mes = document.getElementById("mes").value;
  const dia = document.getElementById("dia").value;
  const hora = document.getElementById("hora").value + '0000';

  var televisa = document.getElementById('televisa');
  var azteca = document.getElementById('azteca');
  var multimedios = document.getElementById('multimedios');

  // set videos
  televisa.setAttribute('src', 'media/televisa/' + año + '/' + mes + '/' + dia + '/' + hora + '.mp4');
  // televisa.setAttribute('src', 'video.mp4');
  televisa.setAttribute('type', 'video/mp4');

  azteca.setAttribute('src', 'media/tva/' + año + '/' + mes + '/' + dia + '/' + hora + '.mp4');
  // azteca.setAttribute('src', 'video.mp4');
  azteca.setAttribute('type', 'video/mp4');

  multimedios.setAttribute('src', 'media/mm/' + año + '/' + mes + '/' + dia + '/' + hora + '.mp4');
  // multimedios.setAttribute('src', 'video.mp4');
  multimedios.setAttribute('type', 'video/mp4');
}
</script>

</html>
