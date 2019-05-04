<?php
$brand = array("agsh", "hhdd", "ywhc", "tgdk");

asort($brand); //sort function
$clength = count($brand);
for($x = 0; $x < $clength; $x++) {
    echo $brand[$x];
    echo "<br>";
}
?>