<?php

use app\elements\element;

require_once __DIR__ . "/vendor/autoload.php";
$html = element::FormStart(["action" => "", "method" => "post", "id" => "test"]);
$html.=element::labelStart("İnput: ",["for" => "Input"]).element::labelEnd();
$html.=element::Input(["type" => "text", "name" => "test", "id" => "Input"]);
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
$html.=element::labelStart(["<span>Veri seç</span>","<b> ikon </b>"],["for" => "Select"]).element::labelEnd();

$html.= element::Select($options, ["type" => "text", "name" => "test", "id" => "Select"]);

$html.=element::labelStart("Button: ",["for" => "Button"]);

$html.= element::Button("Al", ["type" => "submit", "name" => "test", "id" => "Button"]);

$html.=element::labelEnd();

$html.=element::FormEnd();

echo $html;

