<?php 
include __DIR__ . '/views/header.php';
include __DIR__ . '/model/Movie.php';
include __DIR__ . '/model/GameApp.php';
include __DIR__ . '/model/Books.php';


?>

<section class="container">
   <header>
        <div class="navbar">
            <div class="logo">
            </div>
            <nav>
                <ul>
                    <li><a href="Books.php">Books</a></li>
                    <li><a href="Movie.php">Movies</a></li>
                    <li><a href="GameApp.php">Games</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="books">
    <h2>Books</h2>
         <div class="row gy-4">
    <?php
         foreach ($books as $book) {
            $book->printCardBook();
         }
     ?> 
    </section>

    <section id="movies" class="py-3">
      <h2>Movies</h2>
         <div class="row">
    <?php
         foreach ($movies as $movie) {
            $movie->printCard();
         }
     ?>   
   </section>

    <section id="games">
         <h2>Games</h2>
         <div class="row gy-4">
    <?php
         foreach ($games as $game) {
            $game->printCardGame();
         }
     ?> 
    </section>


</div>
</section>



<?php

include __DIR__ . '/views/footer.php';

?>