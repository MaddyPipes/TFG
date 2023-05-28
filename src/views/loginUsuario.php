<div class="modal-header">
    <h1 class="modal-title fs-5" id="modalUsuarioHeader" class="modalHeader">Login<img src="../rsc/whited20.png" alt="logo"></h1>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body" id="cuerpoModalUsuario">
    <div class="container">
        <div class="row mt-5">
            <div class="col-3"></div>
            <div class="col-6">
                <form class="form-signin" action="../controller/controlLogin.php" method="POST">

                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                        <label for="email">Email</label>
                    </div>

                    <div class="form-floating mt-3 mb-3">
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                        <label for="password">Contraseña</label>
                    </div>
                    <div class="checkbox mb-3">
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesión</button>
                </form>
                <label>
                    <a href="../controller/controlUsuario.php"> Registrarse </a>
                    <br>
                    <a href="../controller/controlCambioPass.php"> ¿Ha olvidado su contraseña? </a>
                </label>
            </div>
            <div class="col-3"></div>
        </div>
    </div>

    <?php

    if ($inf_ms != null && isset($inf_ms)) : ?>
        <div class="alert alert-primary alert-dismissible fade show mt-5" role="alert" style="display:inline-block;">
            <strong><?= $inf_ms ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>

    <?php endif; ?>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Entrar</button>
    <button type="button" class="btn btn-danger">Regístrate</button>
</div>