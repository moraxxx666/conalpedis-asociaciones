<main class="container">

    <h4 class="center-align">ORGANIZACIONES NO GUBERNAMENTALES, FUNDACIONES Y ASOCIACIONES CIVILES SIN FINES DE LUCRO QUE TRABAJAN CON PROGRAMAS Y PROYECTOS EN MATERIA DE DISCAPACIDAD</h4>
    <div class="row">
        <?php foreach ($asociaciones as $asociacion) { ?>
            <div class="col s12 m6 ">
                    <a href="Asociacion/<?php echo $asociacion['id_asociacion'] ?>">
                        <div class="card" style="background:url(<?php echo base_url() ?>uploads/<?php echo $asociacion['imagen'] ?>);background-position:center">
                            <div class="card-content ">
                                <span class="card-title center-align"><?php echo $asociacion['nombre_organizacion'] ?></span>
                                

                            </div>

                        </div>
                    </a>
                </div>
        <?php } ?>
    </div>










</main>