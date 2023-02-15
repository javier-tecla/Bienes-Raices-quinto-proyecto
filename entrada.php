<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guia para la decoracion de tu hogar</h1>

        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad">
        </picture>

        <p class="informacion-meta" >Escrito el: <span>20/01/2023</span> por: <span>Admin</span> </p>

        <div class="resumen-propiedad">
            

            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In et possimus quaerat, rerum expedita soluta, ipsam enim dignissimos maxime iste ad nihil natus cumque officiis cupiditate laudantium deleniti. Itaque, repellendus? ipsum dolor sit, amet consectetur adipisicing elit. In et possimus quaerat, rerum expedita soluta, ipsam enim dignissimos maxime iste ad nihil natus cumque officiis cupiditate laudantium deleniti. Itaque, repellendus? ipsam enim dignissimos maxime iste ad nihil natus cumque officiis cupiditate laudantium deleniti. Itaque, repellendus iste ad nihil natus cumque officiis cupiditate laudantium deleniti.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, rem saepe animi quos consequatur quam impedit dolore aperiam quaerat cupiditate nam voluptatum, modi sequi, corrupti veritatis! Rerum illum unde quos. dolor sit amet, consectetur adipisicing elit. Sunt, rem saepe animi quos consequatur quam impedit dolore aperiam quaerat cupiditate nam voluptatum</p>

        </div>
    </main> 

    <?php
        incluirTemplate('footer');
    ?>