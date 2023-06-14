<!DOCTYPE html>
<html>

<head>
    <title>Registro Usuario</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/stylesheet.css">
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

        .btn-3 {
            background: white;
            background: linear-gradient(0deg, rgba(0, 172, 238, 1) 0%, rgba(2, 126, 251, 1) 100%);
            width: 130px;
            height: 40px;
            line-height: 42px;
            padding: 0;
            border: none;

        }

        .btn-3 span {
            position: relative;
            display: block;
            width: 100%;
            height: 100%;
        }

        .btn-3:before,
        .btn-3:after {
            position: absolute;
            content: "";
            right: 0;
            top: 0;
            background: rgba(2, 126, 251, 1);
            transition: all 0.3s ease;
        }

        .btn-3:before {
            height: 0%;
            width: 2px;
        }

        .btn-3:after {
            width: 0%;
            height: 2px;
        }

        .btn-3:hover {
            background: transparent;
            box-shadow: none;
        }

        .btn-3:hover:before {
            height: 100%;
        }

        .btn-3:hover:after {
            width: 100%;
        }

        .btn-3 span:hover {
            color: rgba(2, 126, 251, 1);
        }

        .btn-3 span:before,
        .btn-3 span:after {
            position: absolute;
            content: "";
            left: 0;
            bottom: 0;
            background: rgba(2, 126, 251, 1);
            transition: all 0.3s ease;
        }

        .btn-3 span:before {
            width: 2px;
            height: 0%;
        }

        .btn-3 span:after {
            width: 0%;
            height: 2px;
        }

        .btn-3 span:hover:before {
            height: 100%;
        }

        .btn-3 span:hover:after {
            width: 100%;
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

                <div class="col-12 d-flex justify-content-center"><img src="../rsc/whited20.png" alt=""></div>

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

                    <button type="submit" name="registro" value="true" class="custom-btn btn-3">Registro</button>

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