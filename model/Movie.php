<?php
include __DIR__ . "/../Traits/DrawCard.php";

class Movie
{
    use DrawCard;
    private int $id;
    private string $title;
    private string $overview;
    private float $vote_average;
    private string $poster_path;
    private string $original_language;

    public function __construct($id, $title, $overview, $vote, $poster_path, $original_language)
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
        try {
            $voteTemplate = $this->starTemplate();
            return $voteTemplate;
        } catch (Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }

    private function starTemplate()
    {
        $vote = ceil($this->vote_average / 2);
        $template = "<p>";
        
        for ($n = 1; $n <= 5; $n++) {
            $template .= $n <= $vote ? '<i class="fa-solid fa-star"></i>' : '<i class="fa-regular fa-star"></i>';
        }
        
        $template .= "</p>";

        if ($vote < 0 || $vote > 5) {
            throw new Exception("Error during vote calculation.");
        }

        return $template;
    }

    public function formatCard()
    {
        $cardItem = [
            'image' => $this->poster_path,
            'title' => strlen($this->title) > 28 ? substr($this->title, 0, 28) . '...' : $this->title,
            'content' => substr($this->overview, 0, 100) . "...",
            'custom' => $this->getVote()
        ];

        return $cardItem;
    }
}

function fetchAll()
{
    $movieString = file_get_contents(__DIR__ . '/movie_db.json');
    $movieList = json_decode($movieString, true);
    $movies = [];

    foreach ($movieList as $movieData) {
        $movies[] = new Movie(
            $movieData['id'],
            $movieData['title'],
            $movieData['overview'],
            $movieData['vote_average'],
            $movieData['poster_path'],
            $movieData['original_language']
        );
    }

    return $movies;
}

$movies = fetchAll();


?>
