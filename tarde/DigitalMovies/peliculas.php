<?php
    require('conexion.php');

    if (!isset($_GET['pagina'])){
        $_GET['pagina'] = 0;
    }
    $sql = 'SELECT * FROM movies LIMIT 6 OFFSET ' . (6 * $_GET['pagina']) . ';';

    if (isset($_GET['order'])) {
        $sql = 'SELECT * FROM movies ORDER BY ' . $_GET['order'] . ' ASC LIMIT 6;';
    }

    $query = $conex->query($sql);
    $resultados = $query->fetchAll(PDO::FETCH_ASSOC);

    require_once('plantilla/header.php');
    require_once('plantilla/menu.php');

  ?>
       <section class="principal">
           <article class="nuevas" id="peliculas">
               <div class="peliculas">
               <h2 class="titulo-nav">
                 <div >
                   Peliculas en Digital Movies
                 </div>
                 <div class="">
                   <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="peliculas.php?order=title">Title</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="">Genre</a>
                    </li>
                    <li class="breadcrumb-item ">
                        <a href="peliculas.php?order=rating">Rating</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <a href="peliculas.php?order=awards">Awards</a>
                    </li>
                  </ol>
                 </div>
                 <nav >
                   <ul class="pagination">
                     <li class="page-item">
                       <a class="page-link" href="#" aria-label="Previous">
                         <span aria-hidden="true">&laquo;</span>
                         <span class="sr-only">Previous</span>
                       </a>
                     </li>
                     <?php for($i = 0; $i <= 3; $i++ ){ ?>
                       <li class="page-item">
                           <a class="page-link" href="peliculas.php?pagina=<?= $i ?>"><?= $i+1 ?></a>
                       </li>
                     <?php }
                      ?>

                     <li class="page-item">
                       <a class="page-link" href="#" aria-label="Next">
                         <span aria-hidden="true">&raquo;</span>
                         <span class="sr-only">Next</span>
                       </a>
                     </li>
                   </ul>
                 </nav>
               </h2>

               <div class="card-group">
<?php foreach ($resultados as $pelicula) { ?>
    <div class="card">
      <img class="card-img-top" src="images/default.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"><?= $pelicula['title'] ?></h5>
        <p class="card-text"><?= $pelicula['genre_id'] ?></p>
        <p class="card-text">Rating: <?= $pelicula['rating'] ?></p>
        <p class="card-text">Awards: <?= $pelicula['awards'] ?></p>
        <p class="card-text">
          <a class="btn btn-primary" href="">Ver Mas</a>
          <a class="btn btn-success" href="">Editar</a>
          </p>
      </div>
    </div>
<?php } ?>



              </div>


               </div>
           </article>
       </section>

<?php
require_once('plantilla/footer.php'); ?>
