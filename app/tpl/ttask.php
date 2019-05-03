<?php

include 'head_common.php';
?>
        <div class="col-md-12">
            <div class="table-responsive">
                <?php if($this->cantTareas==0){ echo "<p>No tienes tareas creadas aún</p>";
                }else{?>
                <p>
                    Total: <span id="total"><?=$this->cantTareas;?></span>
                </p>
                <?php } ?>
                <br>
                <?php if(count($this->tasks)>0){?>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Estado</th>
                            <th>Fecha de creación</th>
                            <th>Fecha de modificación</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($this->tasks as $tarea){ ?>
                        <tr data-id="id_usuario">
                            <td><?= $tarea['title']?></td>
                            <td>
                                <?php 
                                if($tarea['estado']==0){
                                    echo "<strong>Pendiente</strong>";
                                }elseif($tarea['estado']==1){
                                    echo "<strong>Finalizada</strong>";
                                } 
                                ?>    
                            </td>
                            <td><?= $tarea['fecha_creado']?></td>
                            <td><?= $tarea['fecha_act']?></td>
                            
                            <td class="actions">
                                <a href="<?= $this->pro.'task/ver/id_tarea/'.$tarea['id']?>" class="btn btn-sm btn-primary">
                                    Ver
                                </a>

                                <a href="<?= $this->pro.'task/editar/id_tarea/'.$tarea['id']?>" class="btn btn-sm btn-info">
                                    Edit
                                </a>

                                <a href="<?= $this->pro.'task/borrar/id_tarea/'.$tarea['id']?>" class="btn btn-sm btn-danger btn-delete">
                                    Borrar
                                </a>
                            </td>
                        </tr>
                    <?php }  ?>
                    </tbody>
                </table>
                <?php } ?>
            </div>
        </div>

    <hr>
    <p><a href="<?= $this->pro.'task/nueva'?>" class="btn btn-success btn-md">Nueva tarea</a></p>
    <?php
        include 'footer_common.php';
        ?>