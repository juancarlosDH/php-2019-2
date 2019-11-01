<?php
    require_once('conexion.php');

    $sql = 'SELECT s.*, g.name FROM series AS s
    INNER JOIN genres AS g ON s.genre_id = g.id';

    $sentencia = $conex->prepare($sql);
    $sentencia->execute();

    $series = $sentencia->fetchAll(PDO::FETCH_ASSOC);


foreach ($series as $serie) {
?>
<div class="">
    <div class="">
        <?= $serie['title'] ?> - <?= $serie['name'] ?>
    </div>
    <a href="serie.php?serie_id=<?= $serie['id'] ?>">Ver Serie</a>
</div>

<?php
}
?>
