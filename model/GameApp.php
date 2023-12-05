<?php

class Game 
{
 
    private int $appid;

    private string $name;

    private string $img_icon_url;

    private string $playtime_forever;


public function __construct( $appid,  $name,  $img_icon_url,  $playtime_forever )

{
        $this->id = $appid;
        $this->name = $name;  
        $this->image= $img_icon_url;
        $this->playtime_forever = $playtime_forever;

}
    public function printCardGame()
    {
        $image = $this->img_icon_url;
        $id = $this->appid;
        $name = $this->name;
        $playtime_forever = $this->playtime_forever;
        include __DIR__ . '/../views/cardGame.php';
    }

}


$gameString =   file_get_contents(__DIR__ . '/steam_db.json');
$gameList = json_decode($gameString, true);
$games= [];

foreach( $gameList as $game ){
    $games[]= new Game($game['appid'], $game['name'], $game['img_icon_url'], $game['playtime_forever'],);
}
return $games;
?>