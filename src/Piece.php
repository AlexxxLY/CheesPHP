<?php

class Piece{

    private $name;
    private $color;
    private $position = [];
    private $tempValue;
    //private $pieces = [];

    public function __construct($name, $color, $x, $y)
    {
        $this->name = $name;
        $this->color = $color; 
        Board::setPiece($x,$y);
        $this->tempValue = Board::getTemp();
        $this->position['x'] = $x;
        $this->position['y'] = $y;    
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function move($x, $y)
    {
        Board::setPiece($x,$y);
        Board::setUpdate($this->position['x'],$this->position['y'],$this->tempValue);
        $this->position['x'] = $x;
        $this->position['y'] = $y;
        $this->tempValue = Board::getTemp();

    }
}