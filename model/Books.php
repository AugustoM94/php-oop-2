<?php

class Book 
{
    private string $title;
    private string $pageCount;
    private string $thumbnailUrl;
    private array $authors;
    private string $shortDescription;
    private array $categories;

    public function __construct($title, $pageCount, $thumbnailUrl, $authors, $shortDescription, $categories)
    {
        $this->title = $title;
        $this->pageCount = $pageCount;
        $this->thumbnailUrl = $thumbnailUrl;
        $this->authors = $authors;
        $this->shortDescription = isset($shortDescription) ? $shortDescription : '';
        $this->categories = $categories;
    }

    public function printCardBook()
    {
        $thumbnailUrl = $this->thumbnailUrl;
        $title = $this->title;
        $authors = $this->authors;
        $shortDescription = substr($this->shortDescription, 0, 100,) . '...';
        $categories = $this->categories;
        $pageCount = $this->pageCount;
        include __DIR__ . '/../views/cardBook.php';
    }
}

$bookString = file_get_contents(__DIR__ . '/books_db.json');
$bookList = json_decode($bookString, true);
$books = [];

foreach ($bookList as $info) {
    $shortDescription = isset($info['shortDescription']) ? $info['shortDescription'] : '';
    
    $books[] = new Book(
        $info['title'],
        $info['pageCount'],
        $info['thumbnailUrl'],
        $info['authors'],
        $shortDescription,
        $info['categories']
    );
}

return $books;
?>
