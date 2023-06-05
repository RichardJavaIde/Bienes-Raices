<?php
include"./includes/templates/header.php";
?>
    <main class="contenedor seccion contenido-centrado">
      <h1>Casa en venta frete al bosque</h1>

      <picture
        ><source srcset="build/img/destacada.webp" type="image/webp" />
        <source srcset="build/img/destacada.jpg" type="image/jpeg" />
        <img
          loading="lazy"
          src="build/img/destacada.jpg"
          alt="Entrada de la propiedad"
        />
      </picture>
      <div class="resumen-propiedad">
        <p class="precio">3,000,000</p>
        <ul class="iconos-caracterisrticas">
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="Icono wc" />
            <p>3</p>
          </li>
          <li>
            <img class="icono"
              loading="lazy"
              src="build/img/icono_estacionamiento.svg"
              alt="Icono estacionamiento"
            />
            <p>4</p>
          </li>
          <li>
            <img class="icono"
              loading="lazy"
              src="build/img/icono_dormitorio.svg"
              alt="Icono dormitorio"
            />
            <p>4</p>
          </li>
        </ul>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint officiis
          alias repellat, facere quia harum nisi aliquam cupiditate aut. Odio a
          cupiditate aliquam earum provident nam porro illo rerum in. Lorem
          ipsum dolor sit amet consectetur adipisicing elit. Ab praesentium est
          ipsam sed accusantium velit, animi rem nemo perferendis et architecto
          ex vitae, necessitatibus non quo odio eius, nam nobis. Lorem ipsum
          dolor sit amet consectetur adipisicing elit. Tempora qui consequatur
          sequi architecto nulla, neque soluta praesentium voluptatum
          necessitatibus est in veritatis repudiandae voluptas eum, itaque
          dolorum saepe possimus autem.
        </p>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse suscipit
          atque ducimus ab iusto dolorem omnis consectetur? Et modi doloribus,
          sed reiciendis, tempore ab sunt amet eveniet rem, voluptates incidunt?
        </p>
      </div>
    </main>

    <?php

    include"./includes/templates/footer.php";
?>
