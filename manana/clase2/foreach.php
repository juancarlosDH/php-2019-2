<?php
$alumnos = [
    ['nombre' => 'JC1', 'edad' => 33,
        'hobbies' => ['nadar', 'pescar']
    ],
    ['nombre' => 'JC2', 'edad' => 34, 'hobbies' => []],
    ['nombre' => 'JC3', 'edad' => 35, 'hobbies' => []],
    ['nombre' => 'JC4', 'edad' => 36, 'hobbies' => []],
    ['nombre' => 'JC5', 'edad' => 37, 'hobbies' => []],
];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h3>Los Alumnos son:</h3>
        <ol>
        <?php //abri php para iniciar el foreach
        foreach ($alumnos as $alumno):
            //aqui cierro php para embeber el html con php
            ?>
            <li><?php echo $alumno['nombre'] ?></li>
            <?php //abro de nuevo el php para imprimir todo los demas con php
            if (count($alumno['hobbies']) > 0) {
                echo '<h4>Los hobbies son: </h4>';
                echo '<ul>';
                foreach ($alumno['hobbies'] as $hobby) {
                    echo '<li>' . $hobby . '</li>';
                }
                echo '</ul>';
            }
        endforeach;
        ?>
        </ol>



    </body>
</html>
