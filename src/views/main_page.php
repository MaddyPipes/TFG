<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What The Dice! | Home</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../rsc/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../rsc/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../rsc/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="../styles/stylesheet.css"> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <header class="container">
        <div class="row justify-content-center margin-bottom_16 margin-top_16">
            <div class="col-12 banner">
                <img src="../rsc/banner.png" alt="banner principal" class="banner_img">
            </div>
        </div>
    </header>
    <nav class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12 menu margin-top_8--sm">
                <ul class="p-0">
                    <li>
                        <a href="" type="button" role="button" tabindex="1" data-bs-toggle="modal" data-bs-target="#modalUsuario"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg><?php if (isset($_SESSION['nombre'])) {
                                        print $_SESSION['nombre'];
                                    } else {
                                        print "Usuario";
                                    } ?></a>
                        <div class="modal fade" id="modalUsuario" tabindex="-1" aria-labelledby="modalUsuarioLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalUsuarioLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#offcanvasPersonaje" role="button" tabindex="1" data-bs-toggle="offcanvas" aria-controls="offcanvasPersonaje"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z" />
                            </svg>Personaje</a>
                    </li>
                    <li>
                        <a href="#offcanvaSalas" role="button" tabindex="1" data-bs-toggle="offcanvas" aria-controls="offcanvaSalas"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                                <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z" />
                            </svg>Salas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Offcanvas -->

    <div class="offcanvas offcanvas-start text-body" tabindex="-1" id="offcanvasPersonaje" aria-labelledby="offcanvasPersonaje">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Personajes</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column">
            <button class="btn btn-primary margin-bottom_32" tabindex="1" data-bs-toggle="modal" data-bs-target="#modalCrearPersonaje">Crear Nuevo Personaje</button>
            <div class="modal fade" id="modalCrearPersonaje" tabindex="-1" aria-labelledby="modalCrearPersonajeLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalCrearPersonajeLabel">Elige un juego:</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body d-flex align-items-center">
                            <form class="col-12 d-flex justify-content-evenly" action="../controller/crearPersonajeModelo.php" method="POST">
                                <div>
                                    <button class="btn btn-primary" name="juegoPersonaje" value="ysystem">Ysystem</button>
                                </div>
                                <div class="margin-top__8">
                                    <button class="btn btn-primary" name="juegoPersonaje" value="dyd5">D&D 5a Edición</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mx-auto mt-4">
                <div class="row" id="listaPJ">
                    <?php for ($i = 0; $i < count($personajes); $i++) : ?>
                        <div class="col-md-6 margin-bottom_16" id="recuadroPJ<?= $personajes[$i]["idPERSONAJE"] ?>">
                            <button class="btn p-0 seleccionarPJ" id="<?= $personajes[$i]["idPERSONAJE"] ?>">
                                <div class="card">
                                    <img src="<?= $personajes[$i]["ILUSTRACION"] ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $personajes[$i]["NOMBRE"] ?></h5>
                                        <h6 class="card-subtitle mb-2 text-muted"><?= $personajes[$i]["RAZA"] ?> <?= $personajes[$i]["CLASE"] ?></h6>
                                        <div class="row justify-content-center">
                                            <div class="col-6"><img src="../rsc/DnD-Logo.png" alt="" class="img-fluid"></div>
                                        </div>
                                    </div>
                                </div>
                            </button>
                        </div>
                    <?php endfor; ?>
                </div>

                <div class="row">
                    <?php for ($i = 0; $i < count($personajes); $i++) : ?>
                        <div class="align-self-center d-none cartaPJ" id="cartaPJ<?= $personajes[$i]["idPERSONAJE"] ?>">
                            <div class="card" style="width: 18rem;">
                                <button type="button" class="btn-close deseleccionar" id="deseleccionarPJ<?= $personajes[$i]["idPERSONAJE"] ?>"></button>
                                <img src="<?= $personajes[$i]["ILUSTRACION"] ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $personajes[$i]["NOMBRE"] ?></h5>
                                    <p class="card-text"><?= $personajes[$i]["RAZA"] ?> <?= $personajes[$i]["CLASE"] ?> lvl <?= $personajes[$i]["NIVEL"] ?></p>
                                    <form action="../controller/crearPersonajeModelo.php" method="POST">
                                        <input type="hidden" name="idPJ" value="<?= $personajes[$i]["idPERSONAJE"] ?>">
                                        <button class="btn btn-primary" name="editarPJ" value="editarPJ">Editar</button>
                                    </form>
                                    <a href="#" class="btn btn-danger" tabindex="1" data-bs-toggle="modal" data-bs-target="#modalBorrar<?= $personajes[$i]["idPERSONAJE"] ?>">Borrar</a>
                                    <div class="modal fade" id="modalBorrar<?= $personajes[$i]["idPERSONAJE"] ?>" tabindex="-1" aria-labelledby="modalBorrarLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalBorrarLabel"></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    ¿Estás seguro de querer borrar a <?= $personajes[$i]["NOMBRE"] ?>?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                                                    <button type="button" class="btn btn-primary botonBorrar" id="borrarPJ<?= $personajes[$i]["idPERSONAJE"] ?>">Sí</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row text-center">
                                        <div class="col-4"><b>STR:</b> <?= $personajes[$i]["STAT3"] ?></div>
                                        <div class="col-4"><b>CON:</b> <?= $personajes[$i]["STAT4"] ?></div>
                                        <div class="col-4"><b>DEX:</b> <?= $personajes[$i]["STAT5"] ?></div>
                                        <div class="col-4"><b>INT:</b> <?= $personajes[$i]["STAT6"] ?></div>
                                        <div class="col-4"><b>CHA:</b> <?= $personajes[$i]["STAT8"] ?></div>
                                        <div class="col-4"><b>WIS:</b> <?= $personajes[$i]["STAT7"] ?></div>
                                        <div class="col-6"><b>CA:</b> <?= $personajes[$i]["STAT2"] ?></div>
                                        <div class="col-6"><b>PB:</b> <?php switch (true) {
                                                                            case (intval($personajes[$i]["NIVEL"]) < 5):
                                                                                echo "2";
                                                                                break;
                                                                            case (intval($personajes[$i]["NIVEL"]) >= 5 &&  intval($personajes[$i]["NIVEL"] < 9)):
                                                                                echo "3";
                                                                                break;
                                                                            case (intval($personajes[$i]["NIVEL"]) >= 9 &&  intval($personajes[$i]["NIVEL"] < 13)):
                                                                                echo "4";
                                                                                break;
                                                                            case (intval($personajes[$i]["NIVEL"]) >= 13 &&  intval($personajes[$i]["NIVEL"] < 17)):
                                                                                echo "5";
                                                                                break;
                                                                            default:
                                                                                echo "6";
                                                                                break;
                                                                        } ?></div>
                                        <div class="col-12"><b>HP:</b> <?= $personajes[$i]["STAT1"] ?></div>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <a class="btn btn-primary margin-top_8 margin-bottom_8" data-bs-toggle="collapse" href="#salvaciones" role="button" aria-expanded="false" aria-controls="salvaciones">
                                            Salvaciones
                                        </a>
                                        <div class="collapse" id="salvaciones">
                                            <div class="card card-body">
                                                <ul>
                                                    <?php for ($j = 0; $j < count($personajes[$i]["SALVACIONES"]); $j++) {
                                                        echo "<li>" . $personajes[$i]["SALVACIONES"][$j] . "</i>";
                                                    } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <a class="btn btn-primary margin-top_8 margin-bottom_8" data-bs-toggle="collapse" href="#competencias" role="button" aria-expanded="false" aria-controls="competencias">
                                            Competencias
                                        </a>
                                        <div class="collapse" id="competencias">
                                            <div class="card card-body">
                                                <ul>
                                                    <?php for ($j = 0; $j < count($personajes[$i]["COMPETENCIAS"]); $j++) {
                                                        echo "<li>" . $personajes[$i]["COMPETENCIAS"][$j] . "</i>";
                                                    } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>

            </div>

        </div>
    </div>

    <div class="offcanvas offcanvas-end text-body" tabindex="-1" id="offcanvaSalas" aria-labelledby="offcanvaSalasLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvaSalasLabel">Juegos</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="align-items-center d-flex justify-content-center offcanvas-body">
            <div class="col-md-6 margin-bottom_16">
                <form class="p-0" action="../controller/tableroDYD.php" method="POST">
                    <button class="btn p-0 seleccionarPJ" id="botonDYD" name="botonDYD" value="<?= $_SESSION["idPJ"] ?>">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Dungeon & Dragons 5a Edición</h6>
                                <div class="row justify-content-center">
                                    <div class="col-12"><img src="../rsc/DnD-Logo.png" alt="" class="img-fluid"></div>
                                </div>
                            </div>
                        </div>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script src="../scripts/controlPJ.js"></script>

</body>

</html>