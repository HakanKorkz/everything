<?php

use app\elements\element;

require_once __DIR__ . "/vendor/autoload.php";
$html = element::FormStart(["action" => "", "method" => "post", "id" => "test"]);

$html.=element::Input(["type" => "text", "name" => "test", "id" => "test"]);
$options = [
    [
       "tittle"=>"text",
        "attributes" => [
            "value" => "1"
        ]
    ],
    [
        "tittle"=>"Test",
        "attributes" => [
            "value" => "kl",
            "selected" => "selected"
        ]
    ]
];
$html.= element::Select($options, ["type" => "text", "name" => "test", "id" => "test"]);

$html.= element::Button("Al", ["type" => "submit", "name" => "test", "id" => "test"]);

$html.=element::FormEnd();

echo $html;

