<?php

namespace views;
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title>Login</title>

    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/stylesheet.css">
    <!-- <link rel="stylesheet" href="./styles/stylesheet.css"> -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
        button {
            margin: 20px;
        }

        .custom-btn {
            width: 130px;
            height: 40px;
            color: #fff;
            border-radius: 5px;
            padding: 10px 25px;
            font-family: 'Lato', sans-serif;
            font-weight: 500;
            background: transparent;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            display: inline-block;
            box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5),
                7px 7px 20px 0px rgba(0, 0, 0, .1),
                4px 4px 5px 0px rgba(0, 0, 0, .1);
            outline: none;
        }

        .btn-5 {
            width: 130px;
            height: 40px;
            line-height: 42px;
            padding: 0;
            border: none;
            background: rgb(255, 27, 0);
            background: linear-gradient(0deg, rgba(255, 27, 0, 1) 0%, rgba(251, 75, 2, 1) 100%);
        }

        .btn-5:hover {
            color: #f0094a;
            background: transparent;
            box-shadow: none;
        }

        .btn-5:before,
        .btn-5:after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            height: 2px;
            width: 0;
            background: #f0094a;
            box-shadow:
                -1px -1px 5px 0px #fff,
                7px 7px 20px 0px #0003,
                4px 4px 5px 0px #0002;
            transition: 400ms ease all;
        }

        .btn-5:after {
            right: inherit;
            top: inherit;
            left: 0;
            bottom: 0;
        }

        .btn-5:hover:before,
        .btn-5:hover:after {
            width: 100%;
            transition: 800ms ease all;
        }
    </style>
</head>

<body class="text-center">

    <div class="container">
        <div class="row mt-5">
            <div class="d-none d-md-block col-3"></div>
            <div class="col-12 col-md-6">
                <form class="form-signin" action="../controller/controlLogin.php" method="POST">
                    <div class="col-12"><img src="../rsc/whited20.png" alt=""></div>
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control input-wtd" id="email" placeholder="Enter email" name="email">
                        <label for="email" class="label-wtd">Email</label>
                    </div>

                    <div class="form-floating mt-3 mb-3">
                        <input type="password" class="form-control input-wtd" id="pwd" placeholder="Enter password" name="password">
                        <label for="password" class="label-wtd">Contraseña</label>
                    </div>
                    <div class="checkbox mb-3">
                    </div>
                    <button class="custom-btn btn-5" type="submit">Iniciar Sesión</button>
                </form>
                <label>
                    <a href="../controller/controlUsuario.php"> Registrarse </a>
                    <br>
                    <!-- <a href="../controller/controlCambioPass.php"> ¿Ha olvidado su contraseña? </a> -->
                </label>
            </div>
            <div class="d-none d-md-block col-3"></div>
        </div>
    </div>

    <?php

    if ($inf_ms != null && isset($inf_ms)) : ?>
        <div class="alert alert-primary alert-dismissible fade show mt-5" role="alert" style="display:inline-block;">
            <strong><?= $inf_ms ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>

    <?php endif; ?>

</body>

</html>