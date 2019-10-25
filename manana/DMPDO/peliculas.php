<?php
    require('conexion.php');

    $offset = 0;
    if (isset($_GET['pagina'])) {
        if ($_GET['pagina']==1) {
            $offset = 0;
        }
        if ($_GET['pagina']==2) {
            $offset = 6;
        }
    }


    $sql = 'SELECT m.id, title, awards, rating, name AS nombreGenero
FROM movies AS m, genres
WHERE genre_id = genres.id
ORDER BY title ASC
LIMIT 6 OFFSET ' . $offset . ';';

    $query = $conex->query($sql);
    $resultados = $query->fetchAll(PDO::FETCH_ASSOC);

    //var_dump($resultados); exit;

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
                    <li class="breadcrumb-item"><a href="">Title</a></li>
                    <li class="breadcrumb-item"><a href="">Genre</a></li>
                    <li class="breadcrumb-item "><a href="">Rating</a></li>
                    <li class="breadcrumb-item active"><a href="">Awards</a></li>
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
                     <?php for($i = 1; $i <= 4; $i++ ){
                       echo '<li class="page-item"><a class="page-link" href="">'.$i.'</a></li>';
                     }
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
        <p class="card-text"><?= $pelicula['nombreGenero'] ?></p>
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
