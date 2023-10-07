<!--Inicio del formulario login-->
<form method="post" action="<?php echo base_url('/enviarlogin') ?>" class="login">
            <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input name="email" type="email" class="form-control" id="inputEmail3">
            </div>
            </div>
            <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
            <div class="col-sm-10">
                <input name="pass" type="password" class="form-control" id="inputPassword3">
            </div>
            </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary colorGreen">Ingresar</button>
            <p>¿Aún no se registró? <a href="registro" class="loginARegister">Registrese aquí</a></p>
</form>