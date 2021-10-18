<?php include_once 'includes/templates/header.php'; ?>
  

  <section id="content" class="seccion contenedor">
    <h2>Listado de productos</h2>

    <?php
        try {
            require_once('includes/funciones/bd_conexion.php');
            $sql = "SELECT 
                        pro.codigoSKU
                        , pro.proNombre
                        , pro.proDescripcion
                        , cat.catNombre
                        , pro.proTalla
                        , pro.proUnidadesStock 
                    FROM tc_producto pro 
                        LEFT JOIN tc_Categoria cat ON pro.idCategoriaProd = cat.idCategoria
                    ";
            $resultado = $conn->query($sql);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    ?>
 
    <div class="listado">
        <?php
            
            $inventario = array();
            // Se recuperaran todos los productos encontrados con 'fetch_assoc'
            while( $productos = $resultado->fetch_assoc() ) { 

                // obtener categoria de producto
                $categoria = $productos['catNombre'];

                $producto = array (
                    'producto' => $productos['proNombre'],
                    'descripcion' => $productos['proDescripcion'],
                    'categoria' => $productos['catNombre'],
                    'talla' => $productos['proTalla'],
                    'unidades disponibles' => $productos['proUnidadesStock'] // ." "
                );

                // data set de productos agrupados por categoria
                $inventario [$categoria][] = $producto;
                
                ?>

                <?php } //while de fetch_assoc()  ?>

                <?php 
                        // Conversión fechas 
                            // Unix: setlocale (LC_TIME, 'es_ES.UTF-8');
                            // Win: setlocale (LC_TIME, 'espanish');
                            // echo date( "F j, Y", strtotime ($fecha)  ); 
                            // echo strtotime( "%A, %d de %B del %Y, strtotime ($fecha)  );
                    
                            // Imprime todos los productos
                    foreach ($inventario as $categoria => $lista_productos) { ?>
                        <h3>
                            <i class="fas fa-shopping-bag"></i>
                            <?php echo $categoria ?>  
                        </h3>
                        
                        <?php foreach($lista_productos as $producto) { ?>
                            
                            <div class="categoria">
                                <p class="titulo producto"> 
                                    <?php echo $producto['producto']; ?>  </p>
                                <p class="titulo"> 
                                    <i class="fas fa-tasks"></i>
                                    <?php echo $producto['categoria']; ?>  </p>
                                <p class="titulo"> 
                                    <i class="fas fa-user-tag"></i>
                                    <?php echo $producto['talla']; ?>  </p>
                                <p class="titulo"> 
                                    <i class="fas fa-clipboard-check"></i>
                                    <?php echo $producto['unidades disponibles']; ?>  </p>

                            </div>

                        <?php } // fin foreach productos ?>
                <?php } // fin foreach categorias ?>
                        
    </div>

    <?php
        $conn->close();
    ?>

  </section>  <!-- seccion -->


<?php include_once 'includes/templates/footer.php'; ?>