<?php

class Piece{

    private $name;
    private $color;
    private $position = [];
    private $tempPosition;
    //private $pieces = [];

    public function __construct($name, $color, $x, $y)
    {
        $this->name = $name;
        $this->color = $color; 
        Board::setPiece($x,$y);
       // $this->tempPosition = Board::;
    
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function move($x, $y)
    {
        Board::setPiece($x,$y);

    }
}