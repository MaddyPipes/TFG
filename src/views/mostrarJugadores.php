<?php

namespace views;

?>

<!DOCTYPE html>
<html>

<head>
    <title>Lista de Jugadores</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <style>
        #botonInsertar {
            display: flex;
            justify-content: right;
            margin-bottom: 10px;
        }

        #tablaJugadores {
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div id="aviso" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Aviso</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><?= $inf_ms ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Si el id del usuario está seteado, significará que el usuario está logeado, por lo que mostramos un botón para cerrar la sesión -->

    <?php if(isset($_SESSION["idusuario"])): ?>
    <div style="text-align: right;">
        <form action="../controller/mainControler.php" method="POST">
            <button class="btn btn-danger" name="close_sesion">Cerrar Sesión</button>
        </form>
    </div>
    <?php endif; ?>

    <div class="container" id="tablaJugadores">

        <div class="row">
            <div class="col-lg-9 col-sm-9" id="botonInsertar">

                <form method='POST' action='../controller/insertarJugador.php'>
                    <button class='btn btn-success'>Insertar Jugador</button>
                </form>

            </div>
        </div>
        <form method="POST" action="#">
            <div class="row">


                <div class="col-lg-9 col-sm-9">



                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Edad</th>
                                <th scope="col">Género</th>
                                <th scope="col">Localidad</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>



                            <!-- Tenemos que generar una fila tr para cada jugador
                            que tenga el array de datosJugador -->

                            <?php for ($i = 0; $i < count($datosJugador); $i++) : ?>

                                <!-- Comienzo de fila -->

                                <tr>

                                    <!-- Nombre -->

                                    <!-- Dentro del TD del nombre insertamos el código del acordeón de bootstrap para mostrar los detalles, añadiéndole a cada acordeón
                                    que cree el bucle el número del índice $i para que cada evento haga target a su objetivo -->

                                    <td style="width: 55%;">
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                            <div class="accordion-item">
                                                <h1 class="accordion-header" id="flush-heading<?= $i ?>">
                                                    <!-- Cada botón del formulario estará unido a un formulario que enviará los datos del jugador al controlador de detalles -->
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?= $i ?>" aria-expanded="false" aria-controls="flush-collapse<?= $i ?>" onclick='mostrarDetalles(<?= $datosJugador[$i]["idJUGADOR"] ?>)'>
                                                        <?= $datosJugador[$i]["NOMBRE"] ?>
                                                    </button>
                                                </h1>
                                                <div id="flush-collapse<?= $i ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?= $i ?>" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body" id="<?= $datosJugador[$i]["idJUGADOR"] ?>"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Edad -->
                                    <td><?= $datosJugador[$i]["EDAD"] ?></td>

                                    <!-- Género -->
                                    <td><?= $datosJugador[$i]["GENERO"] ?></td>

                                    <!-- Localidad -->
                                    <td><?= $datosJugador[$i]["LOCALIDAD"] ?></td>

                                    <!-- Para cada jugador creamos un boton para eliminarlo -->
                                    <!-- que llamara al controlador borrarjugador y le pasara el id -->
                                    <td>
                                        <form method='POST' action='../controller/borrarJugador.php'>
                                            <input type='hidden' name='idJugador' value='<?= $datosJugador[$i]["idJUGADOR"] ?>' />
                                            <button class='btn btn-danger'>Eliminar</button>
                                        </form>
                                    </td>

                                    <td>
                                        <form method='POST' action='../controller/actualizarJugador.php'>

                                            <input type='hidden' name='idJugador' value=' <?= $datosJugador[$i]["idJUGADOR"] ?>' />
                                            <input type='hidden' name='nombre' value='<?= $datosJugador[$i]["NOMBRE"] ?>' />
                                            <input type='hidden' name='edad' value='<?= $datosJugador[$i]["EDAD"] ?>' />
                                            <input type='hidden' name='genero' value='<?= $datosJugador[$i]["GENERO"] ?>' />
                                            <input type='hidden' name='localidad' value='<?= $datosJugador[$i]["LOCALIDAD"] ?>' />
                                            <input type='hidden' name='intereses' value='<?= $datosJugador[$i]["INTERESES"] ?>' />
                                            <input type='hidden' name='avatar' value='<?= $datosJugador[$i]["AVATAR"] ?>' />

                                            <button name='modificar' value='false' class='btn btn-primary'>Modificar</button>
                                        </form>
                                    </td>
                                    <!-- Final de fila -->

                                </tr>

                            <?php endfor; ?>

                        </tbody>


                        <!-- Creamos un formulario que envíe valor a una variable en el maincontroller que determinará la página -->

                        <form method='POST' action='../controller/mainControler.php'>
                            <!-- Dentro del formulario crearemos un bucle que vaya imprimiendo botones, cada uno de ellos con un valor
                            igual al índice i. El bucle recorrerá el número de páginas, 
                            obtenido de dividir el número de registros entre 10 y redondear para arriba. -->

                            <?php for ($i = 1; $i <= (ceil($numJugadores / 10)); $i++) : ?>
                                
                                <button value="<?= $i ?>" name="pag" class="btn btn-dark" style="margin-right: 3px; margin-bottom: 3px"><?= $i ?></button>
                            <?php endfor; ?>
                        </form>


                    </table>


                </div>


            </div>
    </div>
    </form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <?php
    //Si llega el mensaje implica que se ha modificado o borrado un jugador
    if ($inf_ms != null && isset($inf_ms)) {
        print("<script>
    \$(document).ready(function(){
        \$('#aviso').modal({show:true});
    });
    </script>");
    }
    ?>

    <!-- Creamos el script para la petición AJAX -->

    <script>
        //Creamos la función al que llamará el evento de cada botón, recibiendo como parámetro la id del jugador, que usaremos en el controlador
        function mostrarDetalles(idJugador) {

            //Iniciamos la petición al controlador

            let xmlHttpDoc = new XMLHttpRequest();

            xmlHttpDoc.onreadystatechange = function() {

                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById(idJugador).innerHTML = this.responseText;
                }

            };

            xmlHttpDoc.open("GET", `../controller/detallesJugador.php?idJugador=${idJugador}`, true);

            xmlHttpDoc.send();

        }
    </script>




</body>