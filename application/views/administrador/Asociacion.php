<main>
    <div class="row">
        <div class="col m5 s12 izquierda">
            <img class="responsive-img circle" src="<?php echo base_url() ?>uploads/<?php echo $asociacion['imagen'] ?>" alt="">

            <div class="row">
                <div class="col s6">
                    <p> <b>Nombre de la Organización:</b></p>
                </div>
                <div class="col s6">
                    <p><?php echo $asociacion['nombre_organizacion'] ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col s6">
                    <p> <b>Representante Legal :</b></p>
                </div>
                <div class="col s6">
                    <p> <?php echo $asociacion['nombre_representante_legal'] ?> </p>
                </div>
            </div>

            <div class="row">
                <div class="col s6">
                    <p> <b>Dirección :</b></p>
                </div>
                <div class="col s6">
                    <p> <?php echo $asociacion['direccion'] ?> </p>
                </div>
            </div>

            <div class="row">
                <div class="col s6">
                    <p> <b>Correo Electrónico :</b></p>
                </div>
                <div class="col s6">
                    <p> <?php echo $asociacion['correo_electronico'] ?> </p>
                </div>
            </div>

            <div class="row">
                <div class="col s6">
                    <p> <b>Teléfono :</b></p>
                </div>
                <div class="col s6">
                    <p> <?php echo $asociacion['telefono'] ?> </p>
                </div>
            </div>

            <div class="row">
                <div class="col s6">
                    <p> <b>Celular :</b></p>
                </div>
                <div class="col s6">
                    <p> <?php echo $asociacion['celular'] ?> </p>
                </div>
            </div>



        </div>
        <div class="col m7 s12 derecha">
            <div class="row">
                <div class="col s12">
                    <ul class="tabs">
                        <li class="tab col s3"><a href="#test1">Antecedentes</a></li>
                        <li class="tab col s3"><a href="#test2">Proyectos</a></li>

                    </ul>
                </div>
                <div id="test1" class="col s12">
                    <div class="row">
                        <div class="col s12">
                            <ul class="tabs">
                                <li class="tab col s3"><a href="#test10">Descripción</a></li>
                                <li class="tab col s3"><a href="#test11">Trabajo Realizado</a></li>
                                <li class="tab col s3"><a href="#test13">Resultados</a></li>
                            </ul>
                        </div>
                        <div id="test10" class="col s12">
                            <div class="row">
                                <div class="col s12 cuadro">
                                    <h4 class="center-align">Descripción</h4>
                                    <pre>
                                 <?php echo $antecedente['descripcion'] ?>
                                 </pre>
                                </div>
                            </div>
                        </div>
                        <div id="test11" class="col s12">
                            <div class="row">
                                <div class="col s12 cuadro">
                                    <h4 class="center-align">Trabajo Realizado</h4>
                                    <pre>
                                 <?php echo $antecedente['trabajo_realizado'] ?>
                                 </pre>
                                    <h4 class="center-align">Ámbito Geográfico de Trabajo</h4>
                                    <pre>
                                        <?php echo $antecedente['ambito_geografico'] ?>
                                    </pre>
                                    <h4 class="center-align">Tipo de Discapacidad Beneficiada</h4>
                                    <pre>
                                        <?php echo $antecedente['discapacidad_beneficiada'] ?>
                                    </pre>
                                </div>

                            </div>
                        </div>

                        <div id="test13" class="col s12">
                            <div class="row">
                                <div class="col s12 cuadro">
                                    <h4 class="center-align">Resultados Alcanzados</h4>
                                    <pre>
                                 <?php echo $antecedente['resultados_alcanzados'] ?>
                                 </pre>

                                </div>
                            </div>
                        </div>
                    </div>





                </div>
                <div id="test2" class="col s12">

                    <ul class="collapsible">
                        <?php foreach ($proyectos as $proyecto) { ?>
                            <li>
                                <div class="collapsible-header ">
                                    <p><?php echo $proyecto['nombre'] ?></p>
                                </div>
                                <div class="collapsible-body">
                                    <div class="row">

                                        <div class="col s6">
                                            <p><b>Área del Proyecto</b></p>
                                        </div>
                                        <div class="col s6">
                                            <pre>
                                                <?php echo $proyecto['area'] ?>
                                            </pre>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col s6">
                                            <p><b>Entidad Proponente</b></p>
                                        </div>
                                        <div class="col s6">
                                            <pre>
                                                <?php echo $proyecto['entidad_proponente'] ?>
                                            </pre>
                                        </div>
                                    </div>
                                    <div class="row">
                                        
                                        <div class="col s6">
                                            <p><b>Fuente de Financiamiento</b></p>
                                        </div>
                                        <div class="col s6">
                                            <pre>
                                                <?php echo $proyecto['fuente_financiamiento']?>
                                            </pre>
                                        </div>
                                    </div>
                                    <div class="row">
                                        
                                        <div class="col s6">
                                            <p><b>Duración</b></p>
                                        </div>
                                        <div class="col s6">
                                            <pre>
                                                <?php echo $proyecto['duracion']?>
                                            </pre>
                                        </div>
                                    </div>
                                    <div class="row">
                                        
                                        <div class="col s6">
                                            <p><b>Lugar de Ejecución</b></p>
                                        </div>
                                        <div class="col s6">
                                            <pre>
                                                <?php echo $proyecto['lugar_ejecucion']?>
                                            </pre>
                                        </div>
                                    </div>
                                    <div class="row">
                                        
                                        <div class="col s6">
                                            <p><b>Pobalción Beneficiada</b></p>
                                        </div>
                                        <div class="col s6">
                                            <pre>
                                                <?php echo $proyecto['poblacion_beneficiada']?>
                                            </pre>
                                        </div>
                                    </div>
                                    <div class="row">
                                        
                                        <div class="col s6">
                                            <p><b>Contraparte</b></p>
                                        </div>
                                        <div class="col s6">
                                            <pre>
                                                <?php echo $proyecto['contraparte']?>
                                            </pre>
                                        </div>
                                    </div>
                                    <div class="row">
                                        
                                        <div class="col s6">
                                            <p><b>Estado del Proyecto</b></p>
                                        </div>
                                        <div class="col s6">
                                            <pre>
                                                <?php echo $proyecto['estado']?>
                                            </pre>
                                        </div>
                                    </div>
                                    <div class="row">
                                        
                                        <div class="col s6">
                                            <p><b>Objetivo del Proyecto</b></p>
                                        </div>
                                        <div class="col s6">
                                            <pre>
                                                <?php echo $proyecto['objetivo']?>
                                            </pre>
                                        </div>
                                    </div>
                                    <div class="row">
                                        
                                        <div class="col s6">
                                            <p><b>Resultados Obtenidos</b></p>
                                        </div>
                                        <div class="col s6">
                                            <pre>
                                                <?php echo $proyecto['resultados']?>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>

                </div>

            </div </div> </div> </main>