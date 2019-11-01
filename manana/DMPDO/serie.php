<?php

    require_once('conexion.php');
    $idSerie = $_GET['serie_id'];

    //me traigo la serie por el id que viene por get
    $sql = 'SELECT * FROM series WHERE id = :idSerie';

    $sentencia = $conex->prepare($sql);
    $sentencia->bindValue(':idSerie', $idSerie, PDO::PARAM_INT);
    $sentencia->execute();
    //lo guardo en esta variable a la serie
    $serie = $sentencia->fetch(PDO::FETCH_ASSOC);

    //consulto a la BD las temporadas de esa serie
    $sql = 'SELECT * FROM seasons WHERE serie_id = :idSerie';
    $sentencia = $conex->prepare($sql);
    $sentencia->bindValue(':idSerie', $idSerie, PDO::PARAM_INT);
    $sentencia->execute();
    //las temporadas las guardo en la variable de abajo
    $temporadas = $sentencia->fetchAll(PDO::FETCH_ASSOC);


 ?>

<?= $serie['title'] ?><br>

<?php foreach ($temporadas as $temp) { ?>
    <li><?= $temp['title'] ?></li>
<?php } ?>












 <!-- -->
