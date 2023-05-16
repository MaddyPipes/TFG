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

    <title>Recuperación Pass</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="../css/login.css" rel="stylesheet">
</head>

<body class="text-center">

    <div class="container" style="text-align: center;">
        <div class="row mt-5">
            <div class="col-5"></div>
            <div class="col-3">
                <form class="form-signin" action="../controller/controlCambioPass.php" method="POST">

                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="tempPass" placeholder="Introduce tu contraseña Temporal" name="tempPass">
                        <label for="tempPass" style="text-align: center;">Introduce tu contraseña Temporal</label>
                    </div>

                    <div class="form-floating mb-3 mt-3">
                        <input type="password" class="form-control" id="newPass" placeholder="Introduce tu nueva contraseña" name="newPass">
                        <label for="newPass" style="text-align: center;">Introduce tu nueva contraseña</label>
                    </div>

                    <input type="hidden" value="<?= $_GET["email"] ?>" name="email">
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="mailPass">Restablecer Contraseeña</button>
                </form>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>

</html>