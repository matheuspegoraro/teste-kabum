<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - Kabum</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/sb-login.css" rel="stylesheet">
  </head>

  <body class="bg-gradient-primary">

    <div class="container">

      <!-- Outer Row -->
      <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                <div class="col-lg-6">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-1">Já é cadastrado?</h1>
                      <h4 class="h6 text-gray-900 mb-4">Então entre com seus dados de login e senha.</h4>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="login" placeholder="Digite aqui seu login...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" placeholder="Digite aqui sua senha...">
                    </div>
                    <button onclick="login();" class="btn btn-primary btn-user btn-block">
                      Entrar
                    </button>
                    <hr>
                    <div class="text-center">
                      <a class="small" href="register.php">Crie uma conta!</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
      function login() {
        let login = $("#login").val();
        let password = $("#password").val();

        $.post('../backend/routes/LoginUser.php', {
          login,
          password
        }, data => {
          console.log(data);
          if (data == '0') {
            alert('Login ou senha incorreto!');
          } else {
            window.location.href = "index.php";
          }
        });
      }

      $( "#button-container button" ).on( "click", function( event ) {
        hiddenBox.show();
      });
    </script>
  </body>
</html>
