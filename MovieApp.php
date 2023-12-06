<?php 
include __DIR__ . '/views/header.php';
include __DIR__ . '/model/Movie.php';
include __DIR__ . '/model/Game.php';
include __DIR__ . '/model/Books.php';


?>

<section class="container">
   <header>
        <div class="navbar">
            <div class="logo">
                <a href="index.php">          
                    <img src="image/logo.jpg" alt="logo">
                </a>
            </div>
            <nav>
                <ul class="d-flex  justify-content-between p-3">
                    <li class="px-4"><a href="BookApp.php">Books</a></li>
                    <li class="px-3"><a href="MovieApp.php">Movies</a></li>
                    <li class="px-3"><a href="GameApp.php">Games</a></li>
                </ul>
            </nav>
        </div>
    </header>



    <section id="movies" class="py-3">
      <h2>Movies</h2>
         <div class="row">
    <?php
         foreach ($movies as $movie) {
            $movie->printCard($movie->formatCard());
         }
     ?>   
   </section>

</section>



<?php

include __DIR__ . '/views/footer.php';

?>