<?php

spl_autoload_register(function ($class) {
    include 'src/' . $class . '.php';
});

//var_dump(Board::getBoard());

//Board::setPiece('E',2);
$peshka = new Piece('Peshka', 'White', 'E', 2);

var_dump(Board::getBoard());

$peshka->move('E', 4);

//echo Board::getBoard();
var_dump(Board::getBoard());

$peshka->move('E', 5);
var_dump(Board::getBoard());