<?php 
include __DIR__ . '/views/header.php';
include __DIR__ . '/model/Movie.php';

?>

<section class="container">
   <h2>Movies</h2>
  <div class="row">
<?php
foreach ($movies as $movie) {
   $movie->printCard();
}
?>  
</div>
</section>



<?php

include __DIR__ . '/views/footer.php';

?>