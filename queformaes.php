<html>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</html>
<?php
$opciones = $_POST['opciones'];

if ($opciones === "Triangulo") {
    ?>
    <script>
        Swal.fire({
            title: "Aceptado",
            text: "Has entrado",
            icon: "success"
        }).then(() => {
            // Redirección a la página de los lados del triangulo
            window.location.href = "./lados_triangulo.php";
        });
    </script>
    <?php
} else if ($opciones === "Rectangulo") {
    ?>
    <script>
        Swal.fire({
            title: "Aceptado",
            text: "Has entrado",
            icon: "success"
        }).then(() => {
            // Redirección a la página de los lados del triangulo
            window.location.href = "./lados_rectangulo.php";
        });
    </script>
    <?php
} else if ($opciones === "Cuadrado") {
    ?>
    <script>
        Swal.fire({
            title: "Aceptado",
            text: "Has entrado",
            icon: "success"
        }).then(() => {
            // Redirección a la página de los lados del triangulo
            window.location.href = "./lados_cuadrado.php";
        });
    </script>
    <?php
} else if ($opciones === "Circulo") {
    ?>
    <script>
        Swal.fire({
            title: "Aceptado",
            text: "Has entrado",
            icon: "success"
        }).then(() => {
            // Redirección a la página de los lados del triangulo
            window.location.href = "./lados_circulo.php";
        });
    </script>
    <?php
}
?>
