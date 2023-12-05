<?php
class Movie  

{
    private int $id;
    private string $title;
    private string $overview;
    private float $vote_average;
    private string $poster_path;
    private string $original_language;

    public function __construct($id, $title, $overview, $vote, $poster_path, $original_language,) 
    {
        $this->id = $id;
        $this->title = $title;  
        $this->overview = $overview;
        $this->vote_average = $vote;
        $this->poster_path = $poster_path;
        $this->original_language = $original_language;
    }

    public function getVote()
    {
        $vote = ceil($this->vote_average / 2);
        $template = "<p>";
        for ($n = 1; $n <= 5; $n++) {
            $template .= $n <= $vote ? '<i class="fa-solid fa-star"></i>' : '<i class="fa-regular fa-star"></i>';
        }
        $template .= "</p>";
        return $template;
    }


    public function printCard()
    {
        $image = $this->poster_path;
        $title = strlen($this->title) > 28 ? substr($this->title, 0, 28) . '...' : $this->title;
        $content =substr($this->overview, 0, 100) . "...";
        $custom = $this->getVote();
        include __DIR__ . '/../views/card.php';
    }

}



function fetchAll() {
    $movieString = file_get_contents(__DIR__ . '/movie_db.json');

    $movieList = json_decode($movieString, true);

    $movies = [];



    foreach ($movieList as $movie) {
        $movies[] = new Movie(
            $movie['id'],
            $movie['title'],
            $movie['overview'],
            $movie['vote_average'],
            $movie['poster_path'],
            $movie['original_language'],
          
        );
    }
    return $movies;
}

$movies = fetchAll();

?>
