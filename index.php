<?php 
include __DIR__ . '/views/header.php';
include __DIR__ . '/model/Movie.php';
include __DIR__ . '/model/Game.php';
include __DIR__ . '/model/Books.php';


?>

<section class="container">
   <header>
        <div class="navbar ">
            <div class="logo">
            <h1>
                 <a href="index.php">          
                    <img src="image/logo.jpg" alt="logo">
                </a>
             </h1>
            </div>
            <nav>
                <ul class="d-flex  justify-content-between p-3">
                    <li  class="px-3"><a href="BookApp.php">Books</a></li>
                    <li class="px-3"><a href="MovieApp.php">Movies</a></li>
                    <li class="px-3"><a href="GameApp.php">Games</a></li>
                </ul>
            </nav>
        </div>
    </header>



</section>



<?php



?>