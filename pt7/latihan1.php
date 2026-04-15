    <?php
    $var = array(1,2,3,4,5,6,7);
    $scan = is_array($var);
    if ($scan == false) {
        $status = "Bukan";
    } else {
        $status = "";
    } 
    echo "\$var = array(1,2,3,4,5,6,7)";
    echo "<br>";
    echo "Variable \$var $status merupakan array";
    ?>