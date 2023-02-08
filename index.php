<?php
require("config/session.php");
require("config/constant.php");
require("config/helper.php");

//redirect to template page if the user is logged in
if(logged_in()){
    header( "Location: home.php" ); die;
}
?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="robots" content="noindex, nofollow">

  <title>Iniciar Sesión - Visor</title>
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/elhorizonte_favicon.png">
  <!-- bootstrap 5.1.0-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- Main Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;600&display=swap" rel="stylesheet">
</head>

<body class="bg-azteca-morado">
  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <div class="mb-md-5 mt-md-4 pb-5">
                <div class="mx-auto pb-5">
                  <img src="image/azteca-noreste-logo-web.png" class="img-fluid">
                </div>

                <?php
                  $error_code = @$_GET['error']; 
                  if($error_code==ERROR_CODE_LOGIN) {
                      display_error('alert-danger',ERROR_MSG_LOGIN);      
                  } else if ($error_code==ERROR_CODE_BLOCKED) {
                      display_error('alert-danger',ERROR_MSG_BLOCKED);
                  } 
                ?>

                <form action="process_login.php" method="POST">
                  <div class="form-outline form-white mb-4">
                    <input type="text" name="email" id="typeuser" class="form-control form-control-lg" />
                    <label class="form-label" for="typeuser">Usuario</label>
                  </div>

                  <div class="form-ouline form-white mb-4">
                    <input type="password" name="password" id="typepassword" class="form-control form-control-lg" />
                    <label class="form-label" for="typepassword">Contraseña</label>
                  </div>

                  <button class="btn text-uppercase fw-bold btn-outline btn-yellow-azteca btn-lg px-5"
                    type="submit">Iniciar Sesión</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>