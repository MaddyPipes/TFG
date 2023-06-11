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

        <?= var_dump($personaje) ?>

            <div class="row justify-content-center">

                <div class="col-12 d-flex justify-content-center"><img src="../rsc/whited20.png" alt=""></div>

                <div class="col-12 d-flex justify-content-center"><img class="img-fluid col-5" src="../rsc/DnD-Logo.png" alt=""></div>

                <div class="align-items-center col-lg-9 col-sm-9 d-flex flex-column page" id="page1">

                    <!-- Margenes con mb mr ml mt -sm-distancia-->
                    <!-- Misma linea -->
                    <div class="row">
                        <div class="col-md-6 col-sm-12 d-flex form-group justify-content-end mb-sm-2 mt-sm-2">
                            <label for="nombre" class="col-3 col-form-label">Nombre:</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="nombre" name="nombre" value='<?php echo isset($personaje["NOMBRE"]) ? $personaje["NOMBRE"] : ''; ?>' placeholder="<?php echo isset($personaje["NOMBRE"]) ? $personaje["NOMBRE"] : ''; ?>">
                            </div>
                        </div>

                        <div class="col-6 col-md-6 col-sm-12 d-flex form-group mb-sm-2 mt-sm-2">
                            <label for="raza" class="col-3 col-form-label">Raza:</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="raza" name="raza" value='<?php echo isset($personaje["RAZA"]) ? $personaje["RAZA"] : ''; ?>' placeholder="<?php echo isset($personaje["RAZA"]) ? $personaje["RAZA"] : ''; ?>">
                            </div>
                        </div>

                        <div class="col-6 d-flex form-group justify-content-end mb-sm-2 mt-sm-2">
                            <label for="clase" class="col-3 col-form-label">Clase:</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="clase" name="clase" value='<?php echo isset($personaje["CLASE"]) ? $personaje["CLASE"] : ''; ?>' placeholder="<?php echo isset($personaje["CLASE"]) ? $personaje["CLASE"] : ''; ?>">
                            </div>
                        </div>

                        <div class="col-6 d-flex form-group mb-sm-2 mt-sm-2">
                            <label for="nivel" class="col-3 col-form-label">Nivel:</label>
                            <div class="col-lg-6">
                                <input type="number" class="form-control" id="nivel" name="nivel" value='<?php echo isset($personaje["NIVEL"]) ? intval($personaje["NIVEL"]) : ''; ?>' placeholder="<?php echo isset($personaje["NIVEL"]) ? intval($personaje["NIVEL"]) : ''; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="align-items-center col-12 d-flex form-group justify-content-center mb-sm-2 mt-sm-2">
                        <label for="picture" class="col-3 col-form-label">URL de imagen de avatar:</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="picture" name="picture" value='<?php echo isset($personaje["ILUSTRACION"]) ? $personaje["ILUSTRACION"] : ''; ?>' placeholder="<?php echo isset($personaje["ILUSTRACION"]) ? $personaje["ILUSTRACION"] : ''; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-6 d-flex align-items-center justify-content-center">
                            <label for="hp" class="col-lg-3 col-form-label">Puntos de golpe:</label>
                            <div class="col-lg-3">
                                <input type="number" class="form-control" id="hp" name="hp" value='<?php echo isset($personaje["STAT1"]) ? intval($personaje["STAT1"]) : ''; ?>' placeholder="<?php echo isset($personaje["STAT1"]) ? intval($personaje["STAT1"]) : ''; ?>" />
                            </div>
                        </div>
                        <div class="col-6 d-flex align-items-center justify-content-center">
                            <label for="ca" class="col-lg-3 col-form-label">Clase de Armadura:</label>
                            <div class="col-lg-3">
                                <input type="number" class="form-control" id="ca" name="ca" value='<?php echo isset($personaje["STAT2"]) ? intval($personaje["STAT2"]) : ''; ?>' placeholder="<?php echo isset($personaje["STAT2"]) ? intval($personaje["STAT2"]) : ''; ?>" />
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center margin-bottom__16">
                        <h4 class="col-12 text-center">Características</h4>
                        <div class="row">
                            <div class="col-6">
                                <div class="d-flex justify-content-end">
                                    <label for="fuerza" class="mx-2 col-form-label">Fuerza:</label>
                                    <input type="number" class="form-control w-50" id="fuerza" name="fuerza" value='<?php echo isset($personaje["STAT3"]) ? intval($personaje["STAT3"]) : ''; ?>' placeholder="<?php echo isset($personaje["STAT3"]) ? intval($personaje["STAT3"]) : ''; ?>" />
                                </div>
                                <div class="d-flex justify-content-end">
                                    <label for="constitucion" class="mx-2 col-form-label">Constitución:</label>
                                    <input type="number" class="form-control w-50" id="constitucion" name="constitucion" value='<?php echo isset($personaje["STAT4"]) ? intval($personaje["STAT4"]) : ''; ?>' placeholder="<?php echo isset($personaje["STAT4"]) ? intval($personaje["STAT4"]) : ''; ?>" />
                                </div>
                                <div class="d-flex justify-content-end">
                                    <label for="destreza" class="mx-2 col-form-label">Destreza:</label>
                                    <input type="number" class="form-control w-50" id="destreza" name="destreza" value='<?php echo isset($personaje["STAT5"]) ? intval($personaje["STAT5"]) : ''; ?>' placeholder="<?php echo isset($personaje["STAT5"]) ? intval($personaje["STAT5"]) : ''; ?>" />
                                </div>

                            </div>
                            <div class="col-6">
                                <div class="d-flex row-cols-4">
                                    <label for="inteligencia" class="mx-2 col-form-label">Inteligencia:</label>
                                    <input type="number" class="form-control w-50" id="inteligencia" name="inteligencia" value='<?php echo isset($personaje["STAT6"]) ? intval($personaje["STAT6"]) : ''; ?>' placeholder="<?php echo isset($personaje["STAT6"]) ? intval($personaje["STAT6"]) : ''; ?>" />
                                </div>
                                <div class="d-flex row-cols-4">
                                    <label for="sabiduria" class="mx-2 col-form-label">Sabiduría:</label>
                                    <input type="number" class="form-control w-50" id="sabiduria" name="sabiduria" value='<?php echo isset($personaje["STAT7"]) ? intval($personaje["STAT7"]) : ''; ?>' placeholder="<?php echo isset($personaje["STAT7"]) ? intval($personaje["STAT7"]) : ''; ?>" />
                                </div>
                                <div class="d-flex row-cols-4">
                                    <label for="carisma" class="mx-2 col-form-label">Carisma:</label>
                                    <input type="number" class="form-control w-50" id="carisma" name="carisma" value='<?php echo isset($personaje["STAT8"]) ? intval($personaje["STAT8"]) : ''; ?>' placeholder="<?php echo isset($personaje["STAT8"]) ? intval($personaje["STAT8"]) : ''; ?>" />
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="row justify-content-center margin-bottom__16">
                        <h4 class="col-12 text-center">Salvaciones</h4>
                        <div class="col-12 d-flex flex-md-nowrap flex-wrap justify-content-around">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" <?php if (isset($personaje["SALVACIONES"]) && in_array("Fuerza", $personaje["SALVACIONES"])) echo 'checked'; ?> value="Fuerza" id="fuerza" name="salvaciones[]">
                                <label class="form-check-label" for="fuerza">
                                    Fuerza
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" <?php if (isset($personaje["SALVACIONES"]) && in_array("Constitución", $personaje["SALVACIONES"])) echo 'checked'; ?> value="Constitución" id="constitucion" name="salvaciones[]">
                                <label class="form-check-label" for="constitucion">
                                    Constitución
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" <?php if (isset($personaje["SALVACIONES"]) && in_array("Destreza", $personaje["SALVACIONES"])) echo 'checked'; ?> value="Destreza" id="destreza" name="salvaciones[]">
                                <label class="form-check-label" for="destreza">
                                    Destreza
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" <?php if (isset($personaje["SALVACIONES"]) && in_array("Inteligencia", $personaje["SALVACIONES"])) echo 'checked'; ?> value="Inteligencia" id="inteligencia" name="salvaciones[]">
                                <label class="form-check-label" for="inteligencia">
                                    Inteligencia
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" <?php if (isset($personaje["SALVACIONES"]) && in_array("Sabiduría", $personaje["SALVACIONES"])) echo 'checked'; ?> value="Sabiduría" id="sabiduria" name="salvaciones[]">
                                <label class="form-check-label" for="sabiduria">
                                    Sabiduría
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" <?php if (isset($personaje["SALVACIONES"]) && in_array("Carisma", $personaje["SALVACIONES"])) echo 'checked'; ?> value="Carisma" id="carisma" name="salvaciones[]">
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
                                        <input class="form-check-input" type="checkbox" <?php if (isset($personaje["COMPETENCIAS"]) && in_array("Acrobacias", $personaje["COMPETENCIAS"])) echo 'checked'; ?> value="Acrobacias" id="acrobacias" name="competencias[]">
                                        <label class="form-check-label" for="acrobacias">
                                            Acrobacias
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 d-flex justify-content-center row-cols-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" <?php if (isset($personaje["COMPETENCIAS"]) && in_array("Arcanos", $personaje["COMPETENCIAS"])) echo 'checked'; ?> value="Arcanos" id="arcanos" name="competencias[]">
                                        <label class="form-check-label" for="arcanos">
                                            Arcanos
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 d-flex justify-content-center row-cols-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" <?php if (isset($personaje["COMPETENCIAS"]) && in_array("Atletismo", $personaje["COMPETENCIAS"])) echo 'checked'; ?> value="Atletismo" id="atletismo" name="competencias[]">
                                        <label class="form-check-label" for="atletismo">
                                            Atletismo
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 d-flex justify-content-center row-cols-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" <?php if (isset($personaje["COMPETENCIAS"]) && in_array("Engaño", $personaje["COMPETENCIAS"])) echo 'checked'; ?> value="Engaño" id="engaño" name="competencias[]">
                                        <label class="form-check-label" for="engaño">
                                            Engaño
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 d-flex justify-content-center row-cols-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" <?php if (isset($personaje["COMPETENCIAS"]) && in_array("Historia", $personaje["COMPETENCIAS"])) echo 'checked'; ?> value="Historia" id="historia" name="competencias[]">
                                        <label class="form-check-label" for="historia">
                                            Historia
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 d-flex justify-content-center row-cols-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" <?php if (isset($personaje["COMPETENCIAS"]) && in_array("Interpretación", $personaje["COMPETENCIAS"])) echo 'checked'; ?> value="Interpretación" id="interpretacion" name="competencias[]">
                                        <label class="form-check-label" for="interpretacion">
                                            Interpretación
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 d-flex justify-content-center row-cols-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" <?php if (isset($personaje["COMPETENCIAS"]) && in_array("Investigación", $personaje["COMPETENCIAS"])) echo 'checked'; ?> value="Investigación" id="investigacion" name="competencias[]">
                                        <label class="form-check-label" for="investigacion">
                                            Investigación
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 d-flex justify-content-center row-cols-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" <?php if (isset($personaje["COMPETENCIAS"]) && in_array("Prestidigitación", $personaje["COMPETENCIAS"])) echo 'checked'; ?> value="Prestidigitación" id="prestidigitacion" name="competencias[]">
                                        <label class="form-check-label" for="prestidigitacion">
                                            Prestidigitación
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 d-flex justify-content-center row-cols-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" <?php if (isset($personaje["COMPETENCIAS"]) && in_array("Intimidación", $personaje["COMPETENCIAS"])) echo 'checked'; ?> value="Intimidación" id="intimidacion" name="competencias[]">
                                        <label class="form-check-label" for="prestidigitacion">
                                            Prestidigitación
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 d-flex justify-content-center row-cols-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" <?php if (isset($personaje["COMPETENCIAS"]) && in_array("Medicina", $personaje["COMPETENCIAS"])) echo 'checked'; ?> value="Medicina" id="medicina" name="competencias[]">
                                        <label class="form-check-label" for="medicina">
                                            Medicina
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 d-flex justify-content-center row-cols-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" <?php if (isset($personaje["COMPETENCIAS"]) && in_array("Naturaleza", $personaje["COMPETENCIAS"])) echo 'checked'; ?> value="Naturaleza" id="naturaleza" name="competencias[]">
                                        <label class="form-check-label" for="naturaleza">
                                            Naturaleza
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 d-flex justify-content-center row-cols-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" <?php if (isset($personaje["COMPETENCIAS"]) && in_array("Percepción", $personaje["COMPETENCIAS"])) echo 'checked'; ?> value="Percepción" id="percepcion" name="competencias[]">
                                        <label class="form-check-label" for="percepcion">
                                            Percepción
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 d-flex justify-content-center row-cols-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" <?php if (isset($personaje["COMPETENCIAS"]) && in_array("Perspicacia", $personaje["COMPETENCIAS"])) echo 'checked'; ?> value="Perspicacia" id="perspicacia" name="competencias[]">
                                        <label class="form-check-label" for="perspicacia">
                                            Perspicacia
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 d-flex justify-content-center row-cols-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" <?php if (isset($personaje["COMPETENCIAS"]) && in_array("Persuasión", $personaje["COMPETENCIAS"])) echo 'checked'; ?> value="Persuasión" id="persuasion" name="competencias[]">
                                        <label class="form-check-label" for="persuasion">
                                            Persuasión
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 d-flex justify-content-center row-cols-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" <?php if (isset($personaje["COMPETENCIAS"]) && in_array("Religión", $personaje["COMPETENCIAS"])) echo 'checked'; ?> value="Religión" id="religion" name="competencias[]">
                                        <label class="form-check-label" for="religion">
                                            Religión
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 d-flex justify-content-center row-cols-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" <?php if (isset($personaje["COMPETENCIAS"]) && in_array("Sigilo", $personaje["COMPETENCIAS"])) echo 'checked'; ?> value="Sigilo" id="sigilo" name="competencias[]">
                                        <label class="form-check-label" for="sigilo">
                                            Sigilo
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 d-flex justify-content-center row-cols-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" <?php if (isset($personaje["COMPETENCIAS"]) && in_array("Supervivencia", $personaje["COMPETENCIAS"])) echo 'checked'; ?> value="Supervivencia" id="supervivencia" name="competencias[]">
                                        <label class="form-check-label" for="supervivencia">
                                            Supervivencia
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 d-flex justify-content-center row-cols-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" <?php if (isset($personaje["COMPETENCIAS"]) && in_array("Trato con animales", $personaje["COMPETENCIAS"])) echo 'checked'; ?> value="Trato con animales" id="tratoanimal" name="competencias[]">
                                        <label class="form-check-label" for="tratoanimal">
                                            Trato animal
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <br>

                    <button class="btn btn-danger margin-bottom_24" name="crearPersonaje">¡Crear!</button>
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