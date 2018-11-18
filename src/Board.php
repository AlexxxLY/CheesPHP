<?php

class Board
{
    //define('L',['A','B','C','D','E','F','G']);

    private static $board = ['A' => [1, 2, 3, 4, 5, 6, 7, 8],
        'B' => [1, 2, 3, 4, 5, 6, 7, 8],
        'C' => [1, 2, 3, 4, 5, 6, 7, 8],
        'D' => [1, 2, 3, 4, 5, 6, 7, 8],
        'E' => [1, 2, 3, 4, 5, 6, 7, 8],
        'F' => [1, 2, 3, 4, 5, 6, 7, 8],
        'G' => [1, 2, 3, 4, 5, 6, 7, 8],
        'H' => [1, 2, 3, 4, 5, 6, 7, 8],
    ];

    private static $temp;

    public static function setPiece($a, $b)
    {
        if (self::$board[$a][$b - 1] != 0) {

            self::$temp = self::$board[$a][$b - 1];
            self::$board[$a][$b - 1] = 0;

        }
    }

    public static function setUpdate($a, $b, $temp)
    {
        self::$board[$a][$b - 1] = $temp;
    }

    public function getTemp()
    {
        return self::$temp;
    }

    public function getBoard()
    {
        return self::$board;
    }
}
