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
                            <div>
                                <select class="form-select margin-bottom_48 margin-top_48" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <img src="../rsc/whited20.png" alt="logoD20" style="max-width: 5em;" class="margin-top_48 margin-bottom_16">
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

    <script src="../scripts/controlDYD.js"></script>

</body>

</html>