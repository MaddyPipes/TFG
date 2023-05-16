<!DOCTYPE html>
<html>

<head>
  <title>Modificar Jugador</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    .error.fail-alert {
      border: 2px solid red;
      border-radius: 4px;
      line-height: 1;
      padding: 2px 0 6px 6px;
      background: #ffe6eb;
    }

    .valid.success-alert {
      border: 2px solid #4CAF50;
      color: green;
    }
  </style>
</head>

<body>

  <?php
  //dependiendo de la accion llamaremos a un controlador u otro con los datos
  switch ($accion) {
    case "modificar":
      $url_destino = "../controller/actualizarJugador.php";
      break;
    case "insertar":
      $url_destino = "../controller/insertarJugador.php";
      break;
    default:
      $url_destino = "../views/mostrarJugadores.php";
  }

  ?>
  <!-- Añadimos al formulario la verificación htmlSpecialChars para evitar las inyecciones de código -->
  <form method="POST" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="formularioJugador">

    <div class="container">

      <div class="row">

        <div class="col-lg-9 col-sm-9">


          <!-- Misma linea -->
          <div class="form-group row mb-sm-2 mt-sm-2">
            <label for="nombre" class="col-lg-3 col-form-label">Nombre:</label>
            <div class="col-lg-6">
              <input type="text" class="form-control" id="nombre" name="nombre" value='<?= (isset($jugador) ? $jugador["nombre"] : "") ?>' />
            </div>
          </div>

          <div class=" form-group row mb-sm-2 mt-sm-2 ">
            <label for="edad" class="col-lg-3 col-form-label">Edad:</label>
            <div class="col-lg-6">
              <select class="form-control w-25" id="edad" name="edad">
                <?php
                //Generamos las option del select edad
                for ($i = 1; $i <= 120; $i++) {
                  print("<option value='" . $i . "' ");
                  //Si la edad de nuestro jugador a modificar es la que estamos escribiendo ahora
                  //La marcamos como seleccionada 
                  if (isset($jugador)) {
                    if ($jugador["edad"] == $i) print("selected");
                  }
                  print(">" . $i . "</option>\n");
                }
                ?>
              </select>
            </div>
          </div>

          <div class="form-group row mb-sm-2 mt-sm-2">
            <label for="localidad" class="col-lg-3 col-form-label">Localidad:</label>
            <div class="col-lg-6">
              <input type="localidad" class="form-control" id="localidad" name="localidad" value='<?= (isset($jugador) ? $jugador["localidad"] : "") ?>' />
            </div>
          </div>

          <br>

          <label class="form-check-label">Género: </label>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" value="M" id="radio1" name="genero" <?php
                                                                                              //Si el genero es masculino marcamos esta opcion
                                                                                              if (isset($jugador)) {
                                                                                                if ($jugador["genero"] == 'M') print("checked");
                                                                                              }
                                                                                              ?> required>
            <label class="form-check-label" for="radio1">Masculino</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" value="F" id="radio2" name="genero" <?php
                                                                                              //Si el genero es femenino marcamos esta opcion
                                                                                              if (isset($jugador)) {
                                                                                                if ($jugador["genero"] == 'F') print("checked");
                                                                                              }
                                                                                              ?>>
            <label class="form-check-label" for="radio2">Femenino</label>
          </div>

          <br>

          <div class="form-group row mb-sm-2 mt-sm-2">
            <label for="localidad" class="col-lg-3 col-form-label">Intereses:</label>
            <div class="col-lg-6">

              <textarea name="intereses" id="intereses" cols="50" rows="5" value='<?= (isset($jugador) ? $jugador["intereses"] : "") ?>'><?= (isset($jugador) ? $jugador["intereses"] : "") ?></textarea>

            </div>
          </div>

          <div class="form-group row mb-sm-2 mt-sm-2">
            <label for="avatar" class="col-lg-3 col-form-label">URL Avatar:</label>
            <div class="col-lg-6">
              <input type="avatar" class="form-control" id="avatar" name="avatar" value='<?= (isset($jugador) ? $jugador["avatar"] : "") ?>' />
            </div>
          </div>

          <!--Añadimos un campo oculto con el identificador del jugador para poder modificar el registro en Bd-->
          <input type="hidden" name="idJugador" value='<?= (isset($jugador) ? $jugador["idJugador"] : "") ?>' />
          <button type="submit" name="modificar" value="true" class="btn btn-default mb-sm-2 shadow p-3 mb-5 bg-body rounded px-3 py-2">Enviar</button>

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


  <script src="../scripts/playerValidation.js"></script>

</body>

</html>