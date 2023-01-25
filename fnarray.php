<?php
//$m=[1,2,3,4];
//$m2=panaikink($m,2);

function panaikinti($array, $i) {
    unset($array[$i]);
    return $array;
}
$m=[1,2,3,4];
$m2=panaikinti($m,2);





?>

<?php include_once "header.php"?>

<span class="mt-5 ms-5 text-danger"><?="Po panaikinimo: " . implode(", ", $m2)?></span>

<?php include_once "footer.php"?>