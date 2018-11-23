<?php

$arr = [
    [
        "AR1" => "test",
        "AR1" => "test",
        "AR1" => "test"
    ],
    [
        "AR1" => "test",
        "AR1" => "test",
        "AR1" => "test"
    ],
    [
        "AR1" => "test",
        "AR1" => "test",
        "AR1" => "test"
    ],
];

foreach($arr as $k => $v){
    echo ">>> ", $k, " --- ", $v;
}

echo "<pre>", var_dump($arr), "</pre>";