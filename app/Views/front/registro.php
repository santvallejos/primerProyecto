<?php $validation = \Config\Services::validation(); ?>
    <form method="post" action="<?php echo base_url('/enviar-form')?>" class="formulario">
    <?=csrf_field();?>
    <?=csrf_field();?>
    <?php if(!empty (session()->getFlashdata('fail'))):?>

    <div class="alert alert-danger"><?=session()->getFlashdata('fail');?></div>

    <?php endif?>
    <?php if(!empty (session()->getFlashdata('success'))):?>

    <div class="alert alert-danger"><?=session()->getFlashdata('success');?></div>

    <?php endif?>
        <div class="mb-3">
            <div class="col">
            <label for="exampleInputName" class="form-label">Nombre</label>
            <input name="nombre" type="text" class="form-control" placeholder="Nombre" aria-label="First name" id="exampleInputName">
                <!--Error-->
                <?php if($validation->getError('nombre')) {?>
                    <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('nombre'); ?>
                    </div>
                    <?php }?>
            </div>
            <div class="col">
            <label for="exampleInputLastName" class="form-label">Apelldio</label>
            <input name="apellido" type="text" class="form-control" placeholder="Apellido" aria-label="Last name" id="exampleInputLastName">
                <!--Error-->
                <?php if($validation->getError('apellido')) {?>
                    <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('apellido'); ?>
                    </div>
                    <?php }?>
            </div>
        </div>


        <div class="mb-3">
            <label for="exampleInputUsarname" class="form-label">Nombre de Usuario</label>
            <input name="usuario" type="text" class="form-control" placeholder="Nombre de Usuario" aria-label="Username" id="exampleInputUsarname">
                <!--Error-->
                <?php if($validation->getError('usuario')) {?>
                    <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('usuario'); ?>
                    </div>
                    <?php }?>
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="correo@gmail.com">
                <!--Error-->
                <?php if($validation->getError('email')) {?>
                    <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('email'); ?>
                    </div>
                    <?php }?>
        </div>

            <div class="row">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="pass" type="password" class="form-control" id="exampleInputPassword1">
                <!--Error-->
                <?php if($validation->getError('pass')) {?>
                    <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('pass'); ?>
                    </div>
                    <?php }?>
            </div>

            <div class="col-12">
                    <input type="submit" value="Guardar" class="btn btn-success">
                    <input type="reset" value="Cancelar" class="btn btn-danger">
            </div>
    </form>