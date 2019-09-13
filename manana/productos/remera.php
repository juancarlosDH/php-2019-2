<?php
    $remeras = [
        ['img' => 'img/remera1.php', 'nombre' => 'Remera Posta'],
    ];

 ?>

<?php foreach ($remeras as $remera) { ?>

    <img src="<?php echo $remera['img']; ?>" alt="">
    <h3><?php echo $remera['nombre']; ?></h3>

<?php } ?>
