<?php
include 'head_common.php';
?>
        <form id="form-log" action="<?= $this->pro.'login/log' ?>" method="POST" class="text-center">
            <p>
                <label for="email">Correo electrónico </label>
                <br>
                <input type="email" placeholder="Ingrese su correo" name="email"
                       size="50"
                        value="<?php 
                            if (isset($_COOKIE['email'])){
                                echo $_COOKIE['email'];
                            }else{
                                if (isset($this->email)){
                                    echo $this->email;
                                }    
                            }
                               ?>"/>
                <?php 
                if (isset($this->errores['email'])){
                    echo '<span class="text-danger">'.$this->errores['email'].'</span>';
                } ?>    
            </p>
            <p>
                <label for="clave">Contraseña</label>
                <br>
                <input type="password" placeholder="Ingrese su contraseña" 
                       name="clave" size="50"
                       value="<?php 
                            if (isset($_COOKIE['password'])){
                                echo $_COOKIE['password'];
                            } 
                               ?>"/>
                <?php 
                if (isset($this->errores['password'])){
                    echo '<span class="text-danger">'.$this->errores['password'].'</span>';
                } ?>
            </p>
            <p>
                <input type="checkbox" name="recordar" 
                       value="Si" />Recordar
            </p>
                
            <input type="submit" name="enviar" class="btn btn-success btn-lg" value="Iniciar sesión"/>
            
        </form>
        <br>
        <hr>
        <p><a href="<?= $this->pro.'home'?>" class="btn btn-warning btn-md">Cancelar</a></p>
        </div>
