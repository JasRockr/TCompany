<!-- Validación del POST por SUBMIT-->
<?php if(isset($_POST['submit'])): 
    //Variables del POST
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $regalo = $_POST['regalo'];
    $total = $_POST['total_pedido'];
    $fecha = date('Y-m-d H:i:s');
    //pedidos
    $productos = $_POST['productos'];
    $camibuso = $_POST['pedido_camibuso'];
    $mug = $_POST['pedido_mug'];
    include_once 'includes/funciones/funciones.php';
    $pedido = productos_json($productos, $camibuso, $mug);
    //detalles
    $detalles = $_POST['detalle'];
    $detalle = detalles_json($detalles);
    //Insercion de datos en DB de manera segura
    try {
        require_once('includes/funciones/bd_conexion.php');
        $stmt = $conn->prepare("INSERT INTO tc_usuariosregistrados (nombre_registrado, apellido_registrado, email_registrado, fecha_registro, productos_articulos, detalles_registrados, regalo, total_pagado) VALUES (?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssis", $nombre, $apellido, $email, $fecha, $pedido, $detalle, $regalo, $total);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        //redireccionado para evitar recargar y repetir datos en DB
        header('Location: validar_registro.php?exitoso=1');
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
?>
<?php endif; ?>
<?php include_once 'includes/templates/header.php'?>

<section id="content" class="seccion contenedor">
    <h2>Resumen Registro</h2>

    <?php if(isset($_GET['exitoso'])): 
            if($_GET['exitoso'] == "1"):
                echo "Registro exitoso";
            endif;
        endif; ?>

    

</section>

<?php include_once 'includes/templates/footer.php'?>