<?php

require 'vendor/autoload.php';

use Wilson\UrbanWords;
use Wilson\Crud;

?>

<html>
<head>
<title>Checkpoint 1a</title>
</head>
<body>

<?php
    try {
        Crud::create(["slang"=>"cool", "description"=>"When something is awesome", "sample-sentence"=>"That's really cool."]);
        //Crud::update("cool", "new meaning...");
        //Crud::delete(1);
        $arr = Crud::read();

        echo '<table width="60%" cellpadding="3" border="1" style="font-family:arial; font-size:12px;">';
        echo "<tr>";
        echo "<th><br /></th> <th>Word</th> <th>Meaning</th> <th>Example</th>";
        echo "</tr>";
        for($x=0; $x < count($arr); $x++) {
            echo "<tr valign='top'>";
            echo "<td>".($x+1).".</td>";
            echo "<td>".$arr[$x]["slang"]."</td>";
            echo "<td>".$arr[$x]["description"]."</td>";
            echo "<td>".$arr[$x]["sample-sentence"]."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    catch(Exception $e) {
        echo $e->getMessage()." ".$e->getFile().", line ".$e->getLine().".";
    }
?>

</body>
</html>