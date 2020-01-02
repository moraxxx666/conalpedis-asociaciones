<main>
    <div class="row">
        <div class="col s12">
            <h4 class="center-align"><?php echo strtoupper($asociacion['nombre']) ?></h4>
        </div>
        <div class="col s12">
            <p><?php echo $asociacion['descripcion'] ?></p>
        </div>

        <?php if (isset($fotos)) {
            foreach ($fotos as $foto) {   ?>
                <div class="col s12 m6 ">
                    <a href="/Noticia/<?php echo $asociacion['id_noticia'] ?>">
                        <div class="card " style="background:url(<?php echo base_url() ?>uploads/<?php echo $asociacion['nombre_imagen'] ?>);background-position:center">
                            <div class="card-content ">
                                <span class="card-title center-align"><?php echo $asociacion['titulo'] ?></span>
                                <p class="center-align"><?php echo $asociacion['fecha'] ?></p>

                            </div>

                        </div>
                    </a>
                </div>
        <?php }
        } ?>



    </div>
</main>