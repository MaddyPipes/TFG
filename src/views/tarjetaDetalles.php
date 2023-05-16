<div class="container py-6 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-12 col-xl-12">

            <div class="card" style="border-radius: 15px;">
                <div class="card-body text-center">
                    <div class="mt-3 mb-4">
                        <img src="<?= $datosJugadorID["AVATAR"] ?>" class="rounded-circle img-fluid" style="width: 300px;" />
                    </div>
                    <h4 class="mb-2"><?= $datosJugadorID["NOMBRE"] ?></h4>
                    <h5 class="mb-2">ID: #<?= $datosJugadorID["idJUGADOR"] ?></h5>
                    <p class="text-muted mb-4"><?= $datosJugadorID["INTERESES"] ?></p>
                    <div class="mb-4 pb-2">                      
                    </div>
                    <div class="d-flex mt-5 mb-2 d-flex">
                        <p class="mb-2 h5 col-3">Personajes:</p>
                        <ul class="col-9" style="text-align: left !important;">
                        <?php for ($i = 0; $i < count($datosPersonajes); $i++) : ?>
                        <li><?= $datosPersonajes[$i]["NOMBRE"] ?>, 
                        <?php if(isset($datosPersonajes[$i]["RAZA"]))
                            printf($datosPersonajes[$i]["RAZA"]) ?>
                        <?php if(isset($datosPersonajes[$i]["CLASE"]))
                        printf($datosPersonajes[$i]["CLASE"]) ?></li>
                        <?php endfor; ?>
                        </ul>
                       
                    </div>

                    <div class="d-flex justify-content-between text-center mt-5 mb-2">
                        <div>
                            <p class="mb-2 h5">Edad</p>
                            <p class="text-muted mb-0"><?= $datosJugadorID["EDAD"] ?></p>
                        </div>
                        <div class="px-3">
                            <p class="mb-2 h5">Género</p>
                            <p class="text-muted mb-0"><?= $datosJugadorID["GENERO"] ?></p>
                        </div>
                        <div>
                            <p class="mb-2 h5">Localidad</p>
                            <p class="text-muted mb-0"><?= $datosJugadorID["LOCALIDAD"] ?></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>