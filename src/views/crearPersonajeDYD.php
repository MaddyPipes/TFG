<!DOCTYPE html>
<html>

<head>
    <title>WHAT THE DICE || Creación Personaje</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../rsc/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../rsc/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../rsc/favicon_io/favicon-16x16.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/stylesheet.css">
    <style>
    input:focus{
        box-shadow: none;
    }
    input:checked{
        background-color: red;
        border-color: red;
    }
    </style>
</head>

<body style="background-image:url(../rsc/wp2227193-dungeons-dragons-wallpapers.jpg); background-position:center; background-size:cover; background-repeat:no-repeat;">

    <?php
    //Definimos el destino de el formulario
    $url_destino = "../controller/registroUsuarioController.php";
    ?>

    <form method="POST" action="../controller/controlUsuario.php" id="registroUsuario">

        <div class="container margin-top_48 margin-bottom_48 border border-2" style="background-color: #353535;">

            <div class="row justify-content-center">

                <div class="col-12 d-flex justify-content-center"><img src="../rsc/whited20.png" alt=""></div>

                <div class="col-12 d-flex justify-content-center"><img class="img-fluid col-5" src="../rsc/DnD-Logo.png" alt=""></div>

                <div class="align-items-center col-lg-9 col-sm-9 d-flex flex-column">

                    <!-- Margenes con mb mr ml mt -sm-distancia-->
                    <!-- Misma linea -->
                    <div class="form-group mb-sm-2 mt-sm-2 col-11 d-flex form-group justify-content-center mb-sm-2 mt-sm-2">
                        <label for="nombre" class="col-lg-1 col-form-label">Nombre:</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="nombre" name="nombre" value='<?php echo isset($_SESSION['nombrePJ']) ? $_SESSION['nombrePJ'] : ''; ?>' placeholder="<?php echo isset($_SESSION['nombrePJ']) ? $_SESSION['nombrePJ'] : ''; ?>" />
                        </div>
                    </div>

                    <div class="form-group mb-sm-2 mt-sm-2 col-11 d-flex form-group justify-content-center mb-sm-2 mt-sm-2">
                        <label for="raza" class="col-lg-1 col-form-label">Raza:</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="raza" name="raza" value='<?php echo isset($_SESSION['razaPJ']) ? $_SESSION['razaPJ'] : ''; ?>' placeholder="<?php echo isset($_SESSION['razaPJ']) ? $_SESSION['razaPJ'] : ''; ?>" />
                        </div>
                    </div>

                    <div class="form-group mb-sm-2 mt-sm-2 col-11 d-flex form-group justify-content-center mb-sm-2 mt-sm-2">
                        <label for="clase" class="col-lg-1 col-form-label">Clase:</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="clase" name="clase" value='<?php echo isset($_SESSION['clasePJ']) ? $_SESSION['clasePJ'] : ''; ?>' placeholder="<?php echo isset($_SESSION['clasePJ']) ? $_SESSION['clasePJ'] : ''; ?>" />
                        </div>
                    </div>

                    <div class="form-group mb-sm-2 mt-sm-2 col-11 d-flex form-group justify-content-center mb-sm-2 mt-sm-2">
                        <label for="nivel" class="col-lg-1 col-form-label">Nivel:</label>
                        <div class="col-lg-6">
                            <input type="number" class="form-control" id="nivel" name="nivel" value='<?php echo isset($_SESSION['nivel']) ? $_SESSION['nivel'] : ''; ?>' placeholder="<?php echo isset($_SESSION['nivel']) ? $_SESSION['nivel'] : ''; ?>" />
                        </div>
                    </div>

                    <div class="form-group mb-sm-2 mt-sm-2 col-11 d-flex form-group justify-content-center mb-sm-2 mt-sm-2">
                        <label for="picture" class="col-lg-1 col-form-label">URL de imagen de avatar:</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="picture" name="picture" value='<?php echo isset($_SESSION['picturePJ']) ? $_SESSION['picturePJ'] : ''; ?>' placeholder="<?php echo isset($_SESSION['picturePJ']) ? $_SESSION['picturePJ'] : ''; ?>" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-6 d-flex align-items-center justify-content-center">
                            <label for="picture" class="col-lg-3 col-form-label">Puntos de golpe:</label>
                            <div class="col-lg-3">
                                <input type="number" class="form-control" id="hp" name="hp" value='<?php echo isset($_SESSION['hpPJ']) ? $_SESSION['hpPJ'] : ''; ?>' placeholder="<?php echo isset($_SESSION['hpPJ']) ? $_SESSION['hpPJ'] : ''; ?>" />
                            </div>
                        </div>
                        <div class="col-6 d-flex align-items-center justify-content-center">
                            <label for="picture" class="col-lg-3 col-form-label">Clase de Armadura:</label>
                            <div class="col-lg-3">
                                <input type="number" class="form-control" id="ca" name="ca" value='<?php echo isset($_SESSION['caPJ']) ? $_SESSION['caPJ'] : ''; ?>' placeholder="<?php echo isset($_SESSION['caPJ']) ? $_SESSION['caPJ'] : ''; ?>" />
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center margin-bottom__16">
                        <h4 class="col-12 text-center">Salvaciones</h4>
                        <div class="col-12 d-flex flex-md-nowrap flex-wrap justify-content-around">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="Fuerza" id="fuerza" name="competencias[]">
                                <label class="form-check-label" for="fuerza">
                                    Fuerza
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="Constitución" id="constitucion" name="competencias[]">
                                <label class="form-check-label" for="constitucion">
                                    Constitución
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="Destreza" id="destreza" name="competencias[]">
                                <label class="form-check-label" for="destreza">
                                    Destreza
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="Inteligencia" id="inteligencia" name="competencias[]">
                                <label class="form-check-label" for="inteligencia">
                                    Inteligencia
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="Sabiduría" id="sabiduria" name="competencias[]">
                                <label class="form-check-label" for="sabiduria">
                                    Sabiduría
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="Carisma" id="carisma" name="competencias[]">
                                <label class="form-check-label" for="carisma">
                                    Carisma
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center margin-bottom__16">
                        <h4 class="col-12 text-center">Competencias</h4>
                        <div class="col-12 container flex-md-nowrap flex-wrap justify-content-around">
                            <div class="row">
                                <div class="col-6 col-md-4 d-flex justify-content-center row-cols-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="Acrobacias" id="acrobacias" name="competencias[]">
                                        <label class="form-check-label" for="acrobacias">
                                            Acrobacias
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 d-flex justify-content-center row-cols-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="Arcanos" id="arcanos" name="competencias[]">
                                        <label class="form-check-label" for="arcanos">
                                            Arcanos
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 d-flex justify-content-center row-cols-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="Atletismo" id="atletismo" name="competencias[]">
                                        <label class="form-check-label" for="atletismo">
                                            Atletismo
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 d-flex justify-content-center row-cols-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="Engaño" id="engaño" name="competencias[]">
                                        <label class="form-check-label" for="engaño">
                                            Engaño
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 d-flex justify-content-center row-cols-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="Historia" id="historia" name="competencias[]">
                                        <label class="form-check-label" for="historia">
                                            Historia
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 d-flex justify-content-center row-cols-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="Interpretación" id="interpretacion" name="competencias[]">
                                        <label class="form-check-label" for="interpretacion">
                                            Interpretación
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 d-flex justify-content-center row-cols-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="Investigación" id="investigacion" name="competencias[]">
                                        <label class="form-check-label" for="investigacion">
                                            Investigación
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 d-flex justify-content-center row-cols-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="Prestidigitación" id="prestidigitacion" name="competencias[]">
                                        <label class="form-check-label" for="prestidigitacion">
                                            Prestidigitación
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 d-flex justify-content-center row-cols-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="Medicina" id="medicina" name="competencias[]">
                                        <label class="form-check-label" for="medicina">
                                            Medicina
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 d-flex justify-content-center row-cols-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="Medicina" id="medicina" name="competencias[]">
                                        <label class="form-check-label" for="medicina">
                                            Medicina
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 d-flex justify-content-center row-cols-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="Naturaleza" id="naturaleza" name="competencias[]">
                                        <label class="form-check-label" for="naturaleza">
                                            Naturaleza
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 d-flex justify-content-center row-cols-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="Percepción" id="percepcion" name="competencias[]">
                                        <label class="form-check-label" for="percepcion">
                                            Percepción
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 d-flex justify-content-center row-cols-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="Perspicacia" id="perspicacia" name="competencias[]">
                                        <label class="form-check-label" for="perspicacia">
                                            Perspicacia
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 d-flex justify-content-center row-cols-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="Persuasión" id="persuasion" name="competencias[]">
                                        <label class="form-check-label" for="persuasion">
                                            Persuasión
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 d-flex justify-content-center row-cols-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="Religión" id="religion" name="competencias[]">
                                        <label class="form-check-label" for="religion">
                                            Religión
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 d-flex justify-content-center row-cols-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="Sigilo" id="sigilo" name="competencias[]">
                                        <label class="form-check-label" for="sigilo">
                                            Sigilo
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 d-flex justify-content-center row-cols-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="Supervivencia" id="supervivencia" name="competencias[]">
                                        <label class="form-check-label" for="supervivencia">
                                            Supervivencia
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 d-flex justify-content-center row-cols-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="Trato con animales" id="tratoanimal" name="competencias[]">
                                        <label class="form-check-label" for="tratoanimal">
                                            Trato animal
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <br>

                    <button type="submit" name="crearPersonaje" value="true" class="btn btn-default mb-sm-2 shadow p-3 mb-5 bg-body rounded px-3 py-2">Registro</button>

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