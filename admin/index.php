<?php

//Improtar la coneccion a de la base de datos.
require "../includes/config/datebase.php"; 
$db = conectarDB();

//Escribir el Query.
$query ="SELECT id, titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento, Creado, vendedores_id
FROM propiedades;";

//Consultar la db
$resultadoConsulta = mysqli_query($db,$query);

//Mesage condicional.
$resultado = $_GET['resultado'] ?? null;

//Incluir template.
require"../includes/funciones.php";
incluirTemplate("header");
?>
    <main class="contenedor seccion">
      <h1>Administrador de bienes raices</h1>

      <?php if(intval( $resultado ) === 1): ?>
          <p class="alerta exito">Anuncio creado correctamente.</p>
        <?php elseif(intval( $resultado ) === 2): ?>
          <p class="alerta exito">Anuncio actualizado correctamente.</p>
          <?php endif;?>

      <a href="propiedades/crear.php" class="boton boton-verde">Crear propidad</a>

      <table class="propiedades">
        <thead>
          <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Imagen</th>
            <th>Precio</th>
            <th>Acciones</th>
          </tr>
        </thead>

        <tbody>
        <?php while( $propiedad = mysqli_fetch_assoc($resultadoConsulta)):?>
           <tr>
            <td><?php echo $propiedad['id'];?> </td>
            <td><?php echo $propiedad['titulo'];?></td>
            <td><img src="../imagen/<?php echo $propiedad['imagen'];?>" class="imagen-tabla" alt="Imagen del anuncio"> </td>
            <td><?php echo $propiedad['precio'];?></td>
            <td>
              <a href="#" class="boton-rojo-block">Eliminar</a>
              <a href="propiedades/actualizar.php?id=<?php echo $propiedad['id'];?>" class="boton-amarillo-block">Actualizar</a>
            </td>
           </tr>
           <?php endwhile;?>
        </tbody>

      </table>

    </main>

    <?php

      mysqli_close($db);
    incluirTemplate("footer");
?>
