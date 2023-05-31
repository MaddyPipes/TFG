<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What The Dice! | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/stylesheet.css">
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
            <button class="btn btn-primary margin-bottom_32">Crear Nuevo Personaje</button>
            <div class="align-self-center">
                <div class="card" style="width: 18rem;">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <img src="https://i.pinimg.com/originals/51/9b/f9/519bf955cad48f57fda9c41996a64744.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Aelrik Rounar</h5>
                        <p class="card-text">Elfo Paladín lvl 5</p>
                        <a href="#" class="btn btn-primary">Editar</a>
                        <a href="#" class="btn btn-danger">Borrar</a>
                    </div>
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-4"><b>STR:</b> 16</div>
                            <div class="col-4"><b>CON:</b> 14</div>
                            <div class="col-4"><b>DEX:</b> 9</div>
                            <div class="col-4"><b>INT:</b> 12</div>
                            <div class="col-4"><b>CHA:</b> 14</div>
                            <div class="col-4"><b>WIS:</b> 14</div>
                            <div class="col-6"><b>CA:</b> 18</div>
                            <div class="col-6"><b>PB:</b> 3</div>
                            <div class="col-12"><b>HP:</b> 3</div>
                        </div>
                        <div>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#competencias" role="button" aria-expanded="false" aria-controls="competencias">
                                Competencias
                            </a>
                            <div class="collapse" id="competencias">
                                <div class="card card-body">
                                    <ul>
                                        <li>Atletismo</li>
                                        <li>Religion</li>
                                        <li>Armas marciales</li>
                                        <li>Historia</li>
                                        <li>Historia</li>
                                        <li>Historia</li>
                                    </ul>
                                </div>
                            </div>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#ataques" role="button" aria-expanded="false" aria-controls="ataques">
                                Ataques
                            </a>
                            <div class="collapse" id="ataques">
                                <div class="card card-body">
                                    <ul>
                                        <li><b>Mandoble:</b> 2d6 cortante + 3</li>
                                        <li><b>Mandoble + Castigo:</b> 2d6 cortante + 2d6 radiante + 3</li>
                                        <li><b>Mandoble:</b> 2d6 + 3</li>
                                        <li><b>Mandoble:</b> 2d6 + 3</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvaSalas" aria-labelledby="offcanvaSalasLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvaSalasLabel">Offcanvas right</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            ...
        </div>
    </div>

    <script src="../scripts/includes.js"></script>

    <!-- Peticiones AJAX -->
    <!-- <script>
        //Creamos la función al que llamará el evento de cada botón, recibiendo como parámetro la id del jugador, que usaremos en el controlador
        function login(loginStatus) {

            //Iniciamos la petición al controlador

            let xmlHttpDoc = new XMLHttpRequest();

            xmlHttpDoc.onreadystatechange = function() {

                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("cuerpoModalUsuario").innerHTML = this.responseText;
                }

            };

            xmlHttpDoc.open("POST", `../controller/controlLogin.php?loginStatus=${loginStatus}`, true);

            xmlHttpDoc.send();
        }
    </script> -->
</body>

</html>