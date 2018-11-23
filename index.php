<?php

$arr = [
    [
        "AR1" => "test1",
        "AR1" => "test2",
        "AR1" => "test3"
    ],
    [
        "AR1" => "test1",
        "AR1" => "test2",
        "AR1" => "test3"
    ],
    [
        "AR1" => "test1",
        "AR1" => "test3",
        "AR1" => "test2"
    ],
];

foreach($arr as $k => $v){
    echo ">>> ", $k, " --- ", $v;
}

echo "<pre>", var_dump($arr), "</pre>";
