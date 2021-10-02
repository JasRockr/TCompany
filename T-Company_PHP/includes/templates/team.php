<!-- SECCION EQUIPO -->
    <section class="equipo contenido seccion">
        <h2>Conoce a nuestros Artistas</h2>

        <?php
            try {
                require_once('includes/funciones/bd_conexion.php');
                $sql = "SELECT \n"
                    . "usu.idUsuario\n"
                    . ",ter.terPrimerNombre\n"
                    . ",ter.terPrimerApellido\n"
                    . ",rol.rolNombre\n"
                    . ",rol.rolDescripcion\n"
                    . ",ter.terURLimagen\n"
                    . "FROM tc_tercero ter \n"
                    . "INNER JOIN tc_usuario usu ON ter.idTercero = usu.usuTercero\n"
                    . "LEFT JOIN tc_rol rol ON usu.usuRol = rol.idRol\n"
                    . "WHERE ter.terClaseTercero = 1";
                    $resultado = $conn->query($sql);
            } catch (\Exception $e) {
                echo $e->getMessage();
            }
        ?>        
    
        <ul class="lista-equipo contenedor clearfix">
            
            <!-- Se recuperaran todos los productos encontrados con 'fetch_assoc' -->
            <?php while( $artistas = $resultado->fetch_assoc() ) { ?>
                    <li>
                        <div class="integrante">
                            <a class="artista-info" href="#integrante<?php echo $artistas['idUsuario']; ?>">
                                <img src="img/<?php echo $artistas['terURLimagen']; ?>" alt="img team">
                                <p><?php echo $artistas['terPrimerNombre']." ".$artistas['terPrimerApellido']; ?></p>
                            </a>
                        </div>
                    </li>
                    <div style="display:none;">
                        <div class= "artista-info" id="integrante<?php echo $artistas['idUsuario']; ?>">
                            <h2><?php echo $artistas['terPrimerNombre']." ".$artistas['terPrimerApellido']; ?></h2>
                            <img src="img/<?php echo $artistas['terURLimagen']; ?>" alt="img team">
                            <p><?php echo utf8_encode($artistas['rolDescripcion']) ?></p>
                        </div>
                    </div>
            <?php } //while de fetch_assoc()  ?>

        </ul>
    </section> <!-- .equipo contenido seccion -->
                        
    <?php
        $conn->close();
    ?>
