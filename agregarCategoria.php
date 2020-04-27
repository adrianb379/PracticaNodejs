<?php

    require 'clases/Conexion.php';
    require 'clases/Categoria.php';
    $objCategoria = new Categoria;
    $chequeo = $objCategoria->agregarCategoria();
    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Alta de una nueva Categoria</h1>
<?php
        $mensaje = 'No se pudo agregar la Categoria';
        $class = 'danger';
        if( $chequeo ){
            $mensaje = 'Categoria '.$objCategoria->getMkNombre();
            $mensaje .= ' agregada correctamente.';
            $class = 'success';
        }
?>
        <div class="alert alert-<?= $class; ?>">
            <?= $mensaje; ?>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>