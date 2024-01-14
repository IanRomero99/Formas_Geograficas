<html>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</html>
<?php
// Recogemos del formulario de opciones

// Depende de lo que sea cada uno le saldra  un sweetalert con su forma correspondientey redirigira a otro formulario
$opciones = $_POST['opciones'];

if ($opciones === "Triangulo") {
    ?>
    <script>
        Swal.fire({
            title: "Aceptado",
            text: "Has entrado",
            icon: "success",
             
  imageUrl: "https://www2.ual.es/jardinmatema/wp-content/uploads/2022/01/triangulo_sinfondo.png",
  imageWidth: 600,
  imageHeight: 200,
  imageAlt: "Custom image"
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
            icon: "success",
            imageUrl: "https://4.bp.blogspot.com/-yxXwC5-gRno/UjeOxa_eoxI/AAAAAAAAAJg/KGrPbem_P0k/s1600/rectangulo.jpg",
            imageWidth: 600,
            imageHeight: 200,
            imageAlt: "Custom image"
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
            icon: "success",
            imageUrl: "https://www.caracteristicasdel.com/wp-content/uploads/2022/11/Caracteristicas-del-cuadrado.jpg",
            imageWidth: 600,
            imageHeight: 200,
            imageAlt: "Custom image"
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
            icon: "success",
            imageUrl: "https://cdn.pixabay.com/photo/2023/04/03/08/24/circle-7896254_1280.png",
            imageWidth: 400,
            imageHeight: 200,
            imageAlt: "Custom image"
            
        }).then(() => {
            // Redirección a la página de los lados del triangulo
            window.location.href = "./lados_circulo.php";
        });
    </script>
    <?php
}
?>
