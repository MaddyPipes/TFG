<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WHAT THE DICE || DYD</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../rsc/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../rsc/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../rsc/favicon_io/favicon-16x16.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/stylesheet.css">
    <link rel="stylesheet" href="../styles/dydTablero.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top sticky-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <form action="../controller/sesion.php" method="POST">
                            <button class="btn btn-danger" type="submit">Cerrar Sesión</button>
                        </form>
                    </li>
                    <li class="nav-item">
                        <form action="../index.php" method="POST">
                            <button class="btn btn-primary" type="submit">Volver al Menú Principal</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container margin-top_48 margin-bottom_48 border border-2" style="background-color: #353535;">

        <div class="row justify-content-center">

            <div class="col-7 d-flex justify-content-center"><img class="img-fluid col-5" src="../rsc/DnD-Logo.png" alt="logoDYD"></div>

            <div class="align-items-center col-9 margin-bottom_48">

                <div class="border border-2 rounded-2 margin-bottom_24 row p-3">
                    <div class="col-3 stat" style="background-image: url(../rsc/pgIcon.png);">
                        <div>PG</div>
                        <div class="d-flex align-items-center justify-content-center">
                            <input type="text" value="" id="actualHP"> / <span id="hp" class="statNumber"></span>
                        </div>
                    </div>
                    <div class="col-3 stat" style="background-image: url(../rsc/inspiIcon.png);">
                        <div>Inspiración</div>
                        <div id="insp">1</div>
                    </div>
                    <div class="col-3 stat" style="background-image: url(../rsc/compIcon.png);">
                        <div>Competencia</div>
                        <div id="comp"></div>
                    </div>
                    <div class="col-3 stat" style="background-image: url(../rsc/caIcon.png);">
                        <div>CA</div>
                        <div class="d-flex align-items-center justify-content-center">
                            <span id="ca" class="statNumber"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex d-lg-none justify-content-evenly margin-bottom_16 margin-top_16 border border-2 rounded-2">
                        <button class="btn p-0" tabindex="1" data-bs-toggle="modal" data-bs-target="#modalIlust"><img src="../rsc/portIcon.png" class="margin-bottom_16 margin-top_16" alt="Icono retrato" style="max-width: 50px;"></button>
                        <button class="btn p-0" tabindex="1" data-bs-toggle="modal" data-bs-target="#modalMagia"><img src="../rsc/wizIcon.png" class="margin-bottom_16 margin-top_16" alt="icono magia" style="max-width: 50px;"></button>
                    </div>
                    <div class="col-lg-4 col-12 d-none d-lg-flex border border-2 rounded-2 align-items-center justify-content-center flex-column">
                        <img src="../rsc/portIcon.png" class="col-3 margin-bottom_16" alt="Icono retrato">
                        <img src="" class="img-fluid" alt="Ilustración personaje" id="ilust">
                    </div>
                    <div class="col-lg-4 col-12 border border-2 rounded-2 d-flex align-items-center justify-content-center">
                        <div class="row justify-content-center">
                            <img src="../rsc/swordIcon.png" alt="logoD20" style="max-width: 5em;" class="margin-bottom_48 margin-top_16">
                            <div class="margin-bottom_8 margin-top_48">
                                <select class="form-select" aria-label="Default select example" id="tipoTirada">
                                    <option value="ataqueArmado" selected>Ataque Armado</option>
                                    <option value="ataqueSutil">Ataque Sutil</option>
                                    <option value="ataqueDistancia">Ataque Distancia</option>
                                    <option value="salvacionFuerza">Salvación Fuerza</option>
                                    <option value="salvacionDestreza">Salvación Destreza</option>
                                    <option value="salvacionConstitucion">Salvación Constitución</option>
                                    <option value="salvacionInteligencia">Salvación Inteligencia</option>
                                    <option value="salvacionSabiduria">Salvación Sabiduría</option>
                                    <option value="salvacionCarisma">Salvación Carisma</option>
                                    <option value="dmgFue">Daño Fuerza</option>
                                    <option value="dmgDes">Daño Destreza</option>
                                    <option value="dmgInt">Daño Inteligencia</option>
                                    <option value="dmgSab">Daño Sabiduría</option>
                                    <option value="dmgCar">Daño Carisma</option>
                                    <option value="acrobacia">Acrobacia</option>
                                    <option value="arcano">Arcano</option>
                                    <option value="atletismo">Atletismo</option>
                                    <option value="engaño">Engaño</option>
                                    <option value="historia">Historia</option>
                                    <option value="interpretacion">Interpretación</option>
                                    <option value="intimidacion">Intimidación</option>
                                    <option value="investigacion">Investigación</option>
                                    <option value="prestidigitacion">Prestidigitación</option>
                                    <option value="medicina">Medicina</option>
                                    <option value="naturaleza">Naturaleza</option>
                                    <option value="percepcion">Percepcion</option>
                                    <option value="perspicacia">Perspicacia</option>
                                    <option value="persuasion">Persuasión</option>
                                    <option value="religion">Religión</option>
                                    <option value="sigilo">Sigilo</option>
                                    <option value="supervivencia">Supervivencia</option>
                                    <option value="tratoAnimal">Trato Animal</option>
                                </select>
                            </div>
                            <div class="margin-bottom_48 margin-top_8 d-flex justify-content-evenly align-items-center">
                                <select class="form-select" aria-label="Default select example" style="width: 33%;" id="dadoNum">
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <span>D</span>
                                <select class="form-select" aria-label="Default select example" style="width: 33%;" id="dadoSize">
                                    <option value="4">4</option>
                                    <option value="6">6</option>
                                    <option value="8">8</option>
                                    <option value="10">10</option>
                                    <option value="12">12</option>
                                    <option value="20" selected>20</option>
                                </select>
                            </div>
                            <button class="btn p-0" id="rollem">
                                <img src="../rsc/whited20.png" alt="logoD20" style="max-width: 5em;" class="margin-top_48 margin-bottom_8">
                            </button>
                            <div class="text-center">¡Lanzar!</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 d-none d-lg-flex border border-2 rounded-2 align-items-center justify-content-center">
                        <div class="row justify-content-center">
                            <img src="../rsc/wizIcon.png" class="col-3 margin-bottom_16 margin-top_16" alt="icono magia">
                            <div class="col-12">
                                <h6 class="text-center">Nivel 1</h6>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label"></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label"></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label"></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label"></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <h6 class="text-center">Nivel 2</h6>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label"></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label"></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label"></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <h6 class="text-center">Nivel 3</h6>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label"></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label"></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label"></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <h6 class="text-center">Nivel 4</h6>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label"></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label"></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label"></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <h6 class="text-center">Nivel 5</h6>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label"></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label"></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label"></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <h6 class="text-center">Nivel 6</h6>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label"></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label"></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <h6 class="text-center">Nivel 7</h6>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label"></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label"></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <h6 class="text-center">Nivel 8</h6>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label"></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <h6 class="text-center">Nivel 9</h6>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="dice-box" class="margin-top_16" style="background-image: url(https://www.etc.cmu.edu/projects/surfacescapes/background.gif);">
                    <h2 class="text-center p-4" id="sign" style="height: 6rem;"><span id="resultados" class="d-none"><span id="diceResult"></span> + <span id="bonusStat"></span> + <span id="bonusPB"></span> = <span id="totalResult"></span></span></h2>
                </div>
                <div class="row overflow-auto border border-2 rounded-2 margin-top_24 margin-bottom_48" style="height: 10em;">
                    <div class="col-12">
                        <ul id="logs">

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalIlust" tabindex="-1" aria-labelledby="modalIlustLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="" class="img-fluid" alt="Ilustración personaje" id="ilust2">
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalMagia" tabindex="-1" aria-labelledby="modalMagiaLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="background-color: #212529;">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <h6 class="text-center">Nivel 1</h6>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label"></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label"></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label"></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label"></label>
                            </div>
                        </div>
                        <div class="col-12">
                            <h6 class="text-center">Nivel 2</h6>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label"></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label"></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label"></label>
                            </div>
                        </div>
                        <div class="col-12">
                            <h6 class="text-center">Nivel 3</h6>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label"></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label"></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label"></label>
                            </div>
                        </div>
                        <div class="col-12">
                            <h6 class="text-center">Nivel 4</h6>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label"></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label"></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label"></label>
                            </div>
                        </div>
                        <div class="col-12">
                            <h6 class="text-center">Nivel 5</h6>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label"></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label"></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label"></label>
                            </div>
                        </div>
                        <div class="col-12">
                            <h6 class="text-center">Nivel 6</h6>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label"></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label"></label>
                            </div>
                        </div>
                        <div class="col-12">
                            <h6 class="text-center">Nivel 7</h6>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label"></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label"></label>
                            </div>
                        </div>
                        <div class="col-12">
                            <h6 class="text-center">Nivel 8</h6>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label"></label>
                            </div>
                        </div>
                        <div class="col-12">
                            <h6 class="text-center">Nivel 9</h6>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label"></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <script type="module" src="../scripts/controlDYD.mjs" crossorigin="anonymous"></script>

</body>

</html>