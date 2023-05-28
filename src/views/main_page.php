<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What The Dice! | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./styles/stylesheet.css">
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
                    <option value="2">Forbidden Lands</option>
                    <option value="3">D&D 5th Edition</option>
                </select>
            </div>
            <div class="col-12 col-md-8 menu margin-top_8--sm">
                <ul>
                    <li>
                        <a href="" type="button" role="button" tabindex="1" data-bs-toggle="modal" data-bs-target="#modalUsuario"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg><?php if(isset($_SESSION['user_name'])){print $_SESSION['user_name'];} else {print "Usuario";}?></a>
                        <div class="modal fade" id="modalUsuario" tabindex="-1" aria-labelledby="modalUsuarioHeader" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content" id="cuerpoModalUsuario"></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="" role="button" tabindex="1"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z" />
                            </svg>Personaje</a>
                    </li>
                    <li>
                        <a href="" role="button" tabindex="1"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-chat-right-dots-fill" viewBox="0 0 16 16">
                                <path d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                            </svg>Logs</a>
                    </li>
                    <li>
                        <a href="" role="button" tabindex="1"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                                <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z" />
                            </svg>Salas</a>
                    </li>
                    <li>
                        <a href="" role="button" tabindex="1"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                            </svg>Configuración</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
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