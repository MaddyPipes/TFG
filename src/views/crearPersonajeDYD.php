<!DOCTYPE html>
<html>

<head>
    <title>Registro Usuario</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

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
                            <input type="text" class="form-control" id="nombre" name="nombre" value='<?php echo isset($_SESSION['nombrePJ']) ? $_SESSION['nombrePJ'] : ''; ?>' placeholder="<?php echo isset($_SESSION['nombrePJ']) ? $_SESSION['nombrePJ'] : ''; ?>"/>
                        </div>
                    </div>

                    <div class="form-group row mb-sm-2 mt-sm-2">
                        <label for="raza" class="col-lg-3 col-form-label">Raza:</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="raza" name="raza" value='<?php echo isset($_SESSION['razaPJ']) ? $_SESSION['razaPJ'] : ''; ?>' placeholder="<?php echo isset($_SESSION['razaPJ']) ? $_SESSION['razaPJ'] : ''; ?>"/>
                        </div>
                    </div>

                    <div class="form-group row mb-sm-2 mt-sm-2">
                        <label for="clase" class="col-lg-3 col-form-label">Clase:</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="clase" name="clase" value='<?php echo isset($_SESSION['clasePJ']) ? $_SESSION['clasePJ'] : ''; ?>' placeholder="<?php echo isset($_SESSION['clasePJ']) ? $_SESSION['clasePJ'] : ''; ?>"/>
                        </div>
                    </div>

                    <div class="form-group row mb-sm-2 mt-sm-2">
                        <label for="nivel" class="col-lg-3 col-form-label">Nivel:</label>
                        <div class="col-lg-6">
                            <input type="number" class="form-control" id="nivel" name="nivel" value='<?php echo isset($_SESSION['nivel']) ? $_SESSION['nivel'] : ''; ?>' placeholder="<?php echo isset($_SESSION['nivel']) ? $_SESSION['nivel'] : ''; ?>"/>
                        </div>
                    </div>
                    
                    <div class="form-group row mb-sm-2 mt-sm-2">
                        <label for="picture" class="col-lg-3 col-form-label">URL de imagen de avatar:</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="picture" name="picture" value='<?php echo isset($_SESSION['picturePJ']) ? $_SESSION['picturePJ'] : ''; ?>' placeholder="<?php echo isset($_SESSION['picturePJ']) ? $_SESSION['picturePJ'] : ''; ?>"/>
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

</body>

</html>