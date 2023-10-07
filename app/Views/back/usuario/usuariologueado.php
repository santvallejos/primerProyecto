<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="col-5">
            <?php if(session()->getFlashdata('msg')):?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('msg')?>
                </div>
                <?php endif;?>
                <br><br>
                <?php if(session()->perfilid == 1): ?>
                    <div>
                        <img src="" alt="">
                    </div>
                    <?php elseif(session()->perfilid == 1): ?>
                        <div>
                            
                        </div>
                    <?php endif;?>
        </div>
    </div>
</div>