<!DOCTYPE html>
<html>

<head>
    <title>WHAT THE DICE || DYD</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../rsc/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../rsc/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../rsc/favicon_io/favicon-16x16.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/stylesheet.css">
    <link rel="stylesheet" href="../styles/dydTablero.css">
    <style>
        input:focus {
            box-shadow: none !important;
            border-color: red !important;
        }

        input:checked {
            background-color: red !important;
            border-color: red !important;
        }
    </style>
</head>

<body style="background-image:url(../rsc/wp2227193-dungeons-dragons-wallpapers.jpg); background-position:center; background-size:cover; background-repeat:no-repeat;">

    <?php
    //Definimos el destino de el formulario
    $url_destino = "../controller/registroUsuarioController.php";
    ?>

    <form method="POST" action="../controller/crearPersonajeModelo.php" id="registroUsuario">

        <div class="container margin-top_48 margin-bottom_48 border border-2" style="background-color: #353535;">

            <div class="row justify-content-center">

                <div class="col-7 d-flex justify-content-center"><img src="../rsc/whited20.png" alt=""></div>

                <div class="col-7 d-flex justify-content-center"><img class="img-fluid col-5" src="../rsc/DnD-Logo.png" alt=""></div>

                <div class="align-items-center col-9">

                    <div class="row">
                        <div class="col-4 d-flex flex-column align-items-center justify-content-center w-50 stat" style="background-image: url(../rsc/pgIcon.png);">
                            <div>PG</div>
                            <div id="hp" class="statNumber">64</div>
                        </div>                      
                        <div class="col-4 d-flex flex-column align-items-center justify-content-center w-50 stat" style="background-image: url(../rsc/caIcon.png);">
                            <div>IP</div>
                            <div id="ip" class="statNumber">1</div>
                        </div>                      
                        <div class="col-4 d-flex flex-column align-items-center justify-content-center w-50 stat" style="background-image: url(../rsc/caIcon.png);">
                            <div>CA</div>
                            <div id="ca" class="statNumber">16</div>
                        </div>                      
                    </div>

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

    </script>

</body>

</html>