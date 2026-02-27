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

    </ul>

  </body>

</html>