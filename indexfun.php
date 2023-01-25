<?php
$a = 5;
$b = 5;
$c = 5;
function trikampis($a, $b, $c) {
    $s = ($a + $b + $c) / 2;
    return sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));
}
$plotis = trikampis($a, $b, $c);
?>

<?php include_once "header.php"?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card mb-5">
                <div class="card-header text-center bg-primary-subtle">
                    <span class="fw-lighter">Trikampio plotas <?=round($plotis)?></span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once "footer.php"?>


