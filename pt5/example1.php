<?php
$file = fopen("test1.txt", "r");

while ($line = fgets($file)) {
    echo $line . "<br>";
}

fclose($file);
?>