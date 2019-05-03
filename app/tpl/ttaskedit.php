<?php

include 'head_common.php';

?>
        <form action="<?= $this->pro.'task/modificar'?>" method="POST" id="form-tareas">
            <p>
                <label for="titulo">Título</label>
                <br>
                <input type="text" placeholder="Ingrese el titulo" name="titulo"
                       value="<?= $this->tarea['title'];?>"/>
                <?php 
                if (isset($this->errores['title'])){
                    echo '<span class="text-danger">'.$this->errores['title'].'</span>';
                } ?>
                
            </p>
            <p>
                <label for="descripcion">Descripción</label>
                <br>
                <textarea name="descripcion" form="form-tareas"
                      placeholder="Ingrese la descripción" rows="4" cols="50"><?php
                       echo $this->tarea['descripcion'];
                       ?></textarea>
                <?php 
                if (isset($this->errores['descripcion'])){
                    echo '<span class="text-danger">'.$this->errores['descripcion'].'</span>';
                } ?>
            </p>
            <p>
                <label for="estado">Estado</label>
                <br>
                <input type="radio" name="estado" 
                        <?php
                        if ($this->tarea['estado']==0){
                                echo "checked";
                        }
                       ?>
                       value="Pendiente"/> Pendiente
                <br>
                <input type="radio" name="estado" 
                        <?php 
                        if ($this->tarea['estado']==1){
                            echo "checked";
                        }
                        ?>
                       value="Finalizada"/> Finalizada
                <?php 
                if (isset($this->errores['estado'])){
                    echo '<span class="text-danger">'.$this->errores['estado'].'</span>';
                } 
                ?>
            </p>
            
            <input type="hidden" name="id_tarea" value="<?= $this->id_tarea; ?>" />
            
            <input type="submit" name="modificar" value="Modificar tarea"/>
            
        </form>
        <br>
        <hr>
        <p><a href="<?= $this->pro.'task'?>" class="btn btn-success btn-md">Listado de tareas</a></p>
    <?php
        include 'footer_common.php';
        ?>