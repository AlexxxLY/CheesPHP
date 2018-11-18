<?php

spl_autoload_register(function ($class) {
    include 'src/' . $class . '.php';
});

//var_dump(Board::getBoard());

Board::setPiece('E',2);

var_dump(Board::getBoard());

//echo Board::getBoard();