<?php
require('conexion.php');

$resultados=[];

$query = $conex->query("SELECT * FROM genres");
$generos = $query->fetchAll(PDO::FETCH_ASSOC);

if (isset($_GET['tipo'])) {

    $sql = 'SELECT * from movies;';
    $query = $conex->query($sql);
    $resultados = $query->fetchAll(PDO::FETCH_ASSOC);

}

    require_once('plantilla/header.php');
    require_once('plantilla/menu.php');
 ?>

<section class="principal">

    <article class="nuevas" id="peliculas">
        <div name='buscador' class="peliculas">
            <h2>Buscador</h2>
            <form class="" action="" method="get">
            <div class="row">
                <div class="col-3">
                    <label for="">Tipo</label>
                    <div class="">
                        <input type="radio" name="tipo" id="movies" value="movies" checked>
                        <label for="movies">Película</label>
                        <input type="radio" name="tipo" id="series" value="series">
                        <label for="series">Serie</label>
                    </div>
                </div>
                <div class="col-3">
                    <label for="title">Titulo</label>
                    <input class="form-control" type="text" name="title" placeholder="¿Que vas a ver hoy?">
                </div>
                <div class="col-3">
                    <label for="title">Genero</label>
                    <select class="form-control" name="genero">
                        <option value="">Todos</option>
                        <?php
                        foreach ($generos as $genero) {
                        echo "<option value='{$genero['id']}'>".$genero['name']."</option>";
                        }
                         ?>
                    </select>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Buscar</button>
          </form>
          <div class="">
              <h4>Resultados de la Busqueda</h4>
              <?php foreach ($resultados as $peli) { ?>

                <a href=''><h3><?= $peli['title'] ?></h3></a>

              <?php } ?>
          </div>
        </div>

    </article>

    </section>
<?php
require_once('plantilla/footer.php');
 ?>
