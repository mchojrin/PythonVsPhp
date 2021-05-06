#!/usr/bin/php

<?php

if ($argc < 3) {
    die("Please indicate the input file name and column to be extracted");
}

$csvData = file($argv[1]);
$col = $argv[2];
array_walk(
        array_map(
        function ($row) use ($col) {
            return str_getcsv($row)[$col];
        }, $csvData),
    function( $data ) {
            echo $data.PHP_EOL;
    }
);