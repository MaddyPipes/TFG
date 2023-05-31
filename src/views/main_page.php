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
            <div class="col-12 col-md-4">
                <select class="form-select" size="4" aria-label="size 3 select example">
                    <option value="0" selected>---</option>
                    <option value="1">Ysystem</option>
                    <option value="3">D&D 5th Edition</option>
                </select>
            </div>
            <div class="col-12 col-md-8 menu margin-top_8--sm">
                <ul>
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
                        <a href="" role="button" tabindex="1"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                                <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z" />
                            </svg>Salas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Offcanvas -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasPersonaje" aria-labelledby="offcanvasPersonaje">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
            </div>
            <div class="dropdown mt-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
                    Dropdown button
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
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