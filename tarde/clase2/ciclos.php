<?php

/*
for ($i=1; $i <= 100; $i++) {
    echo 'Hola a Todos';
}
*/

?>
Año de Nacimiento for y Echo
<select class="" name="anioDeNacimiento">
    <?php for ($i=2019; $i >= 1970; $i--) {
        echo '<option value="' . $i . '">' . $i . '</option>';
    } ?>
</select>
<br>

Año de Nacimiento for html embebido
<select class="" name="anioDeNacimiento">
    <?php for ($i=2019; $i >= 1970; $i--) : ?>
        <option value="<?= $i ?>"><?= $i ?></option>
    <?php endfor; ?>
</select>
<br>

Año de nacimiento con while
<select class="" name="anioDeNacimiento">
    <?php
    $i = 1970;
    while ($i <= 2019) {
        echo '<option value="' . $i . '">' . $i . '</option>';
        $i++;
    }
     ?>
</select>

Año de nacimiento con do-while
<select class="" name="anioDeNacimiento">
    <?php
    $i = 1970;
    do {
        echo '<option value="' . $i . '">' . $i . '</option>';
        $i++;
    } while ($i <= 2019);
     ?>
</select>









<br>
