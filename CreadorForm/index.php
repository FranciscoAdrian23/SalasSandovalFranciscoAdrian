<?php
ob_start();
require_once('./classes/DBConnection.php');
$db = new DBConnection();

$page = isset($_GET['p']) ? $_GET['p'] : "forms";
ob_end_flush();
?>

<!DOCTYPE html>
<html lang="en">
<style>
    /* canvas {
        height: 250px !important
    } */

    table th,
    table td {
        padding: 3px !important
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adient Formularios</title>
    <?php include('./header.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        // Función para mostrar el mensaje al dar doble clic izquierdo
        function mostrarMensaje(event) {
            if (event.button === 0) {
                alert("¡Bienvenido! Has realizado un doble clic izquierdo.");
            }
        }
    </script>
</head>

<style>
    /* Modify brand and text color */
    .navbar-custom .navbar-brand,
    .navbar-custom .navbar-text {
        color: green;
    }
</style>

<body class=''>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100 border-bottom border-light mb-2" id="top-nav">
        <img src="https://www.adient.com/wp-content/uploads/2021/11/adn_rgb_grn_pos.png" width="120px" height="60 px">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-menu" aria-controls="nav-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-menu">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item nav-forms">
                    <a class="nav-link" href="./index.php?p=forms" ondblclick="mostrarMensaje(event)"><i class="fa fa-th-list"></i> Formularios</a>
                </li>
                <li class="nav-item nav-manage_forms">
                    <a class="nav-link" href="./index.php?p=manage_forms" ondblclick="mostrarMensaje(event)"><i class="fa fa-plus"></i> Crear Nuevo</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <?php include("./" . $page . ".php") ?>
    </div>
</body>

<script>
    $(function() {
        var page = "<?php echo $page ?>";

        $('#nav-menu').find(".nav-item.nav-" + page).addClass("active")
    })
</script>
<script>
        function mostrarMensaje() {
            Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Bienvenido a creador de formulario, esta es una sweetalert :D',
  showConfirmButton: false,
  timer: 1500
})
        }
    </script>


<script>
        document.addEventListener("DOMContentLoaded", function() {
            var elemento = document.querySelector("body");
            elemento.addEventListener("dblclick", mostrarMensaje);
        });
    </script>

</html>
