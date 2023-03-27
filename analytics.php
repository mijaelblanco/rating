<?php
require("config/session.php");
require("config/helper.php");
require("config/database.php");
require("config/constant.php");
// confirm_logged_in();
if($_SESSION['MEMBER_ID'] == NULL) {
  header( "Location: index.php" ); die;
}

?>

<!DOCTYPE html>
<html lang="es-MX">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1,
      shrink-to-fit=no">
  <meta name="robots" content="noindex, nofollow">

  <title>Inicio - Analytics</title>
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/elhorizonte_favicon.png">

  <!-- bootstrap 5.1.0-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.21.3/dist/bootstrap-table.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

  <!-- Bootstrap Table -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js">
  <script src="https://unpkg.com/bootstrap-table@1.21.3/dist/bootstrap-table.min.js"></script>

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
    <div class="container">
      <br>
      <div class="text-center">
          <a href="home.php" class="h4 text-uppercase text-white">inicio</a> 
        </div>
        <hr>
      <div class="col-md-12">
        <div class="panel panel-success">
          <div class="panel-body">
            <br>
            <div class="row">
              <div style="background-color: white" class="col-md-12">
                <br>
                <table id="table" data-show-columns="true"></table>
                <br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
<script type="text/javascript">
var $table = $('#table');
$table.bootstrapTable({
  url: 'data.php',
  search: true,
  pagination: true,
  buttonsClass: 'primary',
  showFooter: true,
  minimumCountColumns: 2,
  sortName: 'final_date',
  sortOrder: 'desc',
  pageSize: 15,
  columns: [{
      field: 'id',
      title: '#',
      sortable: false,
    },
    {
      field: 'username',
      title: 'Usuario',
      sortable: false,
    },
    {
      field: 'final_date',
      title: 'Fecha',
      sortable: true,

    },
  ],

});
</script>

</html>