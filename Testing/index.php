
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

  <body>

    <h1>Courses</h1>

    <?php

    $herramientas = [
      "Meditacion 1" => [
        'Sesion 1' => [
          'Meditacion Espiritual'
        ],
        'Sesion 2' => [
          'Meditacion Completa'
        ]
      ],
      "Acces Conciouness" => [
        'Sesion 1' => [
          'Accediendo a la conciencia',
        ],
        'Sesion 2' => [
          'La conciencia interior'
        ]
      ]
    ];
    ?>

    <ul>
      <!-- Se accede al arreglo principal, se le pasan las herramientas y se accede a las sesiones -->
      <?php foreach($herramientas as $herramienta => $Sesiones ) : ?>
        <li><?= $herramienta ?> </li>

        <!-- Se accede a las sesiones y se le pasan las herramientas -->
        <?php foreach($Sesiones as $Titulo => $Lecciones) : ?>
          <li><br><?= $Titulo?></li>

          <!-- Se accede a las lecciones y se pasan las sesiones individuales -->
          <?php foreach($Lecciones as $Leccion => $Informacion) : ?>
            <li><br><?= $Informacion ?></li>

          <?php endforeach ?>

        <?php endforeach ?>

      <?php endforeach ?>

      <!-- La logica de est aparte del foreach "$courses as $course => $variableChapters" es que se va a recorrer el array de cursos, y por cada curso se va a asignar el nombre del curso a la variable $course y el array de capitulos a la variable $variableChapters. -->

      <!-- En este foreach la logica es que se va a recorrer el array de capitulos de cada curso, y por cada capitulo se va a asignar el nombre del capitulo a la variable $chapter y el numero del capitulo a la variable $ChapterNumber. ya que el array de capitulos es un array asociativo donde la clave es el nombre del capitulo y el valor es el numero del capitulo. -->
    </ul>

  </body>

</html>