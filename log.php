<?php
require("config/session.php");
require("config/helper.php");
require("config/database.php");
require("config/constant.php");
// confirm_logged_in();
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
        <div class="col-md-4 text-center pt-4">
          <div class="mx-auto py-3" style="max-width: 180px; height:100px;">
            <p class="h3 text-uppercase text-white text-center">LOGS</p>
          </div>
          <div class="mx-auto py-3" style="max-width: 180px; height:100px;">
            <p class="h5 text-uppercase text-white text-center">
              <?php 
                $logFile = 'media/logs/log.log';
                if ($logFile != '') { 
                  $lines = file($logFile); // Get each line of the file and store it as an array

                  // The regular expression to break lines
                  $rgx = '/(\d+-\d+-\d+) (\d+:\d+:\d+) (\d+\.\d+\.\d+\.\d+) (.*? \(.*\)) (.*? .*?) (\d*) (.* email: .*@.*?) (.*$)/';

                  echo "<table class='text-white'>\n";
                  foreach($lines as $line) {
                      echo "<tr>\n";
                      $output = preg_split($rgx, $line);
                      echo "<td>$output[0]</td>\n";
                      echo "</tr>\n";
                  }
                  echo "</table>\n";
                }
                ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>