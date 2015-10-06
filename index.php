<?php
require 'vendor/autoload.php';
use Wilson\UrbanWords;
use Wilson\Crud;

Crud::create(["slang"=>"cool", "description"=>"When something is awesome", "sample-sentence"=>"bbb"]);
$arr = Crud::read();

for($x=0; $x < count($arr); $x++) {
    echo $arr[$x]["slang"].":".$arr[$x]["description"]."<br />";
}