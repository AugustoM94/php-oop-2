<?php

class Product
{
    protected float $id;
    public int $image;
    protected int $content;

public function __construct( $id,  $image,  $content )
{
        $this->id = $id;   
        $this->image = $image;
        $this->content = $content;
}

}





?>