<?php
header('Access-Control-Allow-Origin: *');
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
  <link rel="stylesheet" href="https://unpkg.com/cloudinary-video-player/dist/cld-video-player.light.min.css" />
  <link rel="stylesheet" href="https://cdn.plyr.io/3.7.3/plyr.css" />
  <script src="https://cdn.plyr.io/3.7.3/plyr.js"></script>

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
          <div style='width:500px;'>
            <video preload="metadata" id="televisa" class="js-player" playsinline controls crossorigin="anonymous">
              <source src="" type="video/mp4" />
            </video>
          </div>
        </div>
        <div class="col-md-4">
          <div class="mx-auto py-3" style="max-width: 180px; height:100px;">
            <p class="h3 text-uppercase text-white text-center">AZTECA LOCAL 7.1</p>
          </div>
          <div style='width:500px;'>
            <video preload="metadata" id="televisa" class="js-player" playsinline controls crossorigin="anonymous">
              <source src="" type="video/mp4" />
            </video>
          </div>
        </div>
        <div class="col-md-4">
          <div class="mx-auto py-3" style="max-width: 180px; height:100px;">
            <p class="h3 text-uppercase text-white text-center">MULTIMEDIOS LOCAL 6.1</p>
          </div>
          <div style='width:500px;'>
            <video preload="metadata" id="televisa" class="js-player" playsinline controls crossorigin="anonymous">
              <source src="" type="video/mp4" />
            </video>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="col-md-12 text-center pt-4">
    <input type="range" class="form-range" step="any" value="0" id="seekbar" style="width:700px; text-align: center;">
    <br>
    <span id="lblTime"></span>
  </div>
  <!-- BOTONES -->
  <section>
    <div class="container pt-5 d-flex">
      <div class="row">
        <div class="col-md-12">
          <div class="input-group text-center">
            <select id="year" name="año">
              <option value="2023">2023</option>
            </select>
            <select id="month" id="mes" name="mes">
              <option selected value="02">Febrero</option>
            </select>
            <select id="day" name="dia">
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
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option selected value="22">22</option>
            </select>
            <select id="hour" name="hora">
              <option selected value="horario">HORARIO</option>
              <option value="05">05:00AM</option>
              <option value="06">06:00AM</option>
              <option value="07">07:00AM</option>
              <option value="08">08:00AM</option>
              <option value="09">09:00AM</option>
            </select>
            <select id="velocidad" name="velocidad">
              <option value="1">1X</option>
              <option value="5">5X</option>
              <option value="10">10X</option>
              <option value="15">15X</option>
            </select>
          </div>
        </div>
        <br>
        <br>
        <div class="col-md-12">
          <button id="play" class="btn btn-primary btn-lg btn-play-pause btn-play" type="button">
            <i class="pe-2">
              <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                <path d="M73
                    39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4
                    33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2
                    23-41s-8.7-32.2-23-41L73 39z" />
              </svg>
            </i>Play</button>

          <button id="pause" class="btn btn-primary btn-lg btn-play-pause btn-pause" type="button">
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

          <button id="mute" class="btn btn-primary btn-lg btn-play-pause btn-pause" type="button">
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
  <script src="https://cdn.plyr.io/3.7.3/plyr.js"></script>

</body>
<script>
document.addEventListener('DOMContentLoaded', () => {

  const controls = [
    'play-large', // The large play button in the center
    'play', // Play/pause playback
    'progress', // The progress bar and scrubber for playback and buffering
    'current-time', // The current time of playback
    'duration', // The full duration of the media
    'airplay', // Airplay (currently Safari only)
    'fullscreen' // Toggle fullscreen
  ];

  var players_multiple = Plyr.setup('.js-player', {
    controls
  });

  // Expose
  window.player = players_multiple;

  // Bind event listener
  function on(selector, type, callback) {
    document.querySelector(selector).addEventListener(type, callback, false);
  }

  // Play
  on('#play', 'click', () => {
    var i = 0;
    while (i <= 2) {
      players_multiple[i].play();
      i++;
    }
  });

  // Pause
  on('#pause', 'click', () => {
    var i = 0;
    while (i <= 2) {
      players_multiple[i].pause();
      i++;
    }
  });

  on('#velocidad', 'change', () => {
    var velocidad = document.getElementById("velocidad").value;
    players_multiple[0].speed = Number(velocidad);
    players_multiple[1].speed = Number(velocidad);
    players_multiple[2].speed = Number(velocidad);
  });

  // Stop
  on('#mute', 'click', () => {
    var i = 0;
    while (i <= 2) {
      if (players_multiple[i].volume == 1) {
        players_multiple[i].volume = 0;
      } else {
        players_multiple[i].volume = 1;
      }
      i++;
    }
  });

  // Month  
  on('#month', 'change', () => {
    var month = document.getElementById("month").value;
    var day = document.getElementById("day").value;
    var hour = document.getElementById("hour").value;
  });

  // Day  
  on('#day', 'change', () => {
    var year = document.getElementById("year").value;
    var month = document.getElementById("month").value;
    var day = document.getElementById("day").value;
    var hour = document.getElementById("hour").value;
    var hour = hour + '0000.mp4';
    var hourSpriteF = hour + '0000';
    var hourSprite = hour + '0000.vtt';

    document.getElementById("lblTime").style.color = "white";
    document.getElementById('lblTime').innerHTML = '00:00:00';

    players_multiple[0].source = {
      type: 'video',
      sources: [{
        // src: hour,
        src: 'media/televisa/' + year + '/' + month + '/' + day + '/' + hour,
        type: 'video/mp4',
      }, ],
      previewThumbnails: {
        enabled: true,
        src: 'thumbs/televisa/' + year + '/' + month + '/' + day + '/' + hourSpriteF + '/' + hourSprite,
        // src: 'sprite.vtt',
      },
    };

    players_multiple[1].source = {
      type: 'video',
      sources: [{
        src: 'media/tva/' + year + '/' + month + '/' + day + '/' + hour,
        // src: hour,
        type: 'video/mp4',
      }, ],
      previewThumbnails: {
        enabled: true,
        src: 'thumbs/tva/' + year + '/' + month + '/' + day + '/' + hourSpriteF + '/' + hourSprite,
        // src: 'sprite.vtt',
      },
    };

    players_multiple[2].source = {
      type: 'video',
      sources: [{
        src: 'media/mm/' + year + '/' + month + '/' + day + '/' + hour,
        // src: hour,
        type: 'video/mp4',
      }, ],
      previewThumbnails: {
        enabled: true,
        src: 'thumbs/mm/' + year + '/' + month + '/' + day + '/' + hourSpriteF + '/' + hourSprite,
        // src: 'sprite.vtt',
      },
    };
  });

  // Hour  
  on('#hour', 'change', () => {
    var year = document.getElementById("year").value;
    var month = document.getElementById("month").value;
    var day = document.getElementById("day").value;
    var hour = document.getElementById("hour").value;
    var hourV = hour + '0000.mp4';
    var hourF = hour + '0000';
    var hourSprite = hourF + '.vtt';

    console.log(hourSprite)

    document.getElementById("lblTime").style.color = "white";
    document.getElementById('lblTime').innerHTML = '00:00:00';

    players_multiple[0].source = {
      type: 'video',
      sources: [{
        // src: hour,
        src: 'media/televisa/' + year + '/' + month + '/' + day + '/' + hourF + '.mp4',
        type: 'video/mp4',
      }, ],
      previewThumbnails: {
        enabled: true,
        src: 'thumbs/televisa/' + month + '/' + day + '/' + hourF + '/' + hourSprite,
        // src: 'sprite.vtt',
      },
    };

    players_multiple[1].source = {
      type: 'video',
      sources: [{
        src: 'media/tva/' + año + '/' + month + '/' + day + '/' + hourF + '.mp4',
        // src: hour,
        type: 'video/mp4',
      }, ],
      previewThumbnails: {
        enabled: true,
        src: 'thumbs/tva/' + month + '/' + day + '/' + hourF + '/' + hourSprite,
        // src: 'sprite.vtt',
      },
    };

    players_multiple[2].source = {
      type: 'video',
      sources: [{
        src: 'media/mm/' + month + '/' + mes + '/' + day + '/' + hourF + '.mp4',
        // src: hour,
        type: 'video/mp4',
      }, ],
      previewThumbnails: {
        enabled: true,
        src: 'thumbs/mm/' + month + '/' + day + '/' + hourF + '/' + hourSprite,
        // src: 'sprite.vtt',
      },
    };
  });

  // Day  
  on('#seekbar', 'input', () => {
    seekbar.max = 3600;
    var seekbar_value = seekbar.value.split('.')[0]
    players_multiple[0].currentTime = Number(seekbar_value);
    players_multiple[1].currentTime = Number(seekbar_value);
    players_multiple[2].currentTime = Number(seekbar_value);

    function secondsToTime(e) {
      const h = Math.floor(e / 3600).toString().padStart(2, '0'),
        m = Math.floor(e % 3600 / 60).toString().padStart(2, '0'),
        s = Math.floor(e % 60).toString().padStart(2, '0');

      return h + ':' + m + ':' + s;
    }

    document.getElementById("lblTime").style.color = "white";
    document.getElementById('lblTime').innerHTML = secondsToTime(players_multiple[0].currentTime);

  });
});
</script>

</html>