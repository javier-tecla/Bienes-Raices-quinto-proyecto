<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Conoce Sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>
           
            <div class="texto-nosotros">
                <blockquote>
                    25 Años de experiencia
                </blockquote>

                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In et possimus quaerat, rerum expedita soluta, ipsam enim dignissimos maxime iste ad nihil natus cumque officiis cupiditate laudantium deleniti. Itaque, repellendus? ipsum dolor sit, amet consectetur adipisicing elit. In et possimus quaerat, rerum expedita soluta, ipsam enim dignissimos maxime iste ad nihil natus cumque officiis cupiditate laudantium deleniti. Itaque, repellendus? ipsam enim dignissimos maxime iste ad nihil natus cumque officiis cupiditate laudantium deleniti. Itaque, repellendus iste ad nihil natus cumque officiis cupiditate laudantium deleniti.</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, rem saepe animi quos consequatur quam impedit dolore aperiam quaerat cupiditate nam voluptatum, modi sequi, corrupti veritatis! Rerum illum unde quos. dolor sit amet, consectetur adipisicing elit. Sunt, rem saepe animi quos consequatur quam impedit dolore aperiam quaerat cupiditate nam voluptatum</p>

            </div>
        </div>

    </main> 

    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Sapiente,est fugiat? Illum autem, 
                   numquam architecto officiis at eius quae id fugiat a ipsum sapiente esse nisi aspernatur 
                   pariatur.Magnam, labore.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Sapiente,est fugiat? Illum autem, 
                   numquam architecto officiis at eius quae id fugiat a ipsum sapiente esse nisi aspernatur 
                   pariatur.Magnam, labore.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Sapiente,est fugiat? Illum autem, 
                   numquam architecto officiis at eius quae id fugiat a ipsum sapiente esse nisi aspernatur 
                   pariatur.Magnam, labore.</p>
            </div>
        </div>
    </section>

    <?php
        incluirTemplate('footer');
    ?>