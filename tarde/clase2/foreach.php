<?php
    $anios = [ ];

    for ($i=1970; $i <= 2019 ; $i++) {
        $anios[] = $i;
    }
 ?>

Año de nacimiento con foreach
<select class="" name="anioDeNacimiento">
    <?php
        foreach ($anios as $anio) {
            echo '<option value="' . $anio . '">' . $anio . '</option>';
        }
     ?>
</select>



<br>
