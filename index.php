<?php
use app\elements\element;

require_once __DIR__."/vendor/autoload.php";

echo element::FormStart(["action"=>"","method"=>"post","id"=>"test"]);

echo element::Input(["type"=>"text","name"=>"test","id"=>"test"]);

echo element::Select(["type"=>"text","name"=>"test","id"=>"test2"],["type"=>"text","name"=>"test","id"=>"test"]);

echo element::Button("Al",["type"=>"submit","name"=>"test","id"=>"test"]);

echo element::FormEnd();

