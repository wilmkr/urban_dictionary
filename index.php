<?php
require 'vendor/autoload.php';
use Wilson\UrbanWords;
use Wilson\Crud;

Crud::create(["slang"=>"cool", "description"=>"When something is awesome", "sample-sentence"=>"That's really cool."]);
Crud::update(0, ["slang"=>"Hip", "description"=>"When something is trendy", "sample-sentence"=>"Hip style"]);
//Crud::delete(1);

echo '<table width="700" cellpadding="3" border="1" style="font-family:arial; font-size:12px;">';
echo "<tr>";
echo "<th><br /></th> <th>Word</th> <th>Meaning</th> <th>Example</th>";
echo "</tr>";

$arr = Crud::read();
for($x=0; $x < count($arr); $x++) {
    echo "<tr valign='top'>";
    echo "<td>".($x+1).".</td>";
    echo "<td>".$arr[$x]["slang"]."</td>";
    echo "<td>".$arr[$x]["description"]."</td>";
    echo "<td>".$arr[$x]["sample-sentence"]."</td>";
    echo "</tr>";
}

echo "</table>";
//unset($arr[1]);
//var_dump($arr);