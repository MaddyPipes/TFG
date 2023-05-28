<!DOCTYPE html>
<html>

<head>
    <title>Registro Usuario</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .error.fail-alert {
            border: 2px solid red;
            border-radius: 4px;
            line-height: 1;
            padding: 2px 0 6px 6px;
            background: #ffe6eb;
        }

        .valid.success-alert {
            border: 2px solid #4CAF50;
            color: green;
        }
    </style>

</head>

<body>

    <?php
    //Definimos el destino de el formulario
    $url_destino = "../controller/registroUsuarioController.php";
    ?>

    <form method="POST" action="../controller/controlUsuario.php" id="registroUsuario">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-12"><img src="../rsc/whited20.png" alt=""></div>

                <div class="col-lg-9 col-sm-9">

                    <!-- Margenes con mb mr ml mt -sm-distancia-->
                    <!-- Misma linea -->
                    <div class="form-group row mb-sm-2 mt-sm-2">
                        <label for="nombre" class="col-lg-3 col-form-label">Nombre:</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="nombre" name="nombre" value='' />
                        </div>
                    </div>

                    <div class="form-group row mb-sm-2 mt-sm-2">
                        <label for="email" class="col-lg-3 col-form-label">Email:</label>
                        <div class="col-lg-6">
                            <input type="email" class="form-control" id="email" name="email" value='' />
                        </div>
                    </div>

                    <div class="form-group row mb-sm-2 mt-sm-2">
                        <label for="password" class="col-lg-3 col-form-label">Password:</label>
                        <div class="col-lg-6">
                            <input type="password" class="form-control" id="password" name="password" value='' />
                        </div>
                    </div>

                    <div class="form-group row mb-sm-2 mt-sm-2">
                        <label for="passConfirm" class="col-lg-3 col-form-label">Confirmar Password:</label>
                        <div class="col-lg-6">
                            <input type="password" class="form-control" id="passConfirm" name="passConfirm" value='' />
                        </div>
                    </div>

                    <br>

                    <button type="submit" name="registro" value="true" class="btn btn-default mb-sm-2 shadow p-3 mb-5 bg-body rounded px-3 py-2">Registro</button>

                </div>
            </div>
        </div>
    </form>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- jQuery Validation Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

    <!-- jQuery Validation Additional Methods -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>


    <script src="../scripts/userValidation.js"></script>
</body>

</html>