<?php

include 'functions.php';
require_once __DIR__ . '/vendor/autoload.php';
use PhpQuery\PhpQuery;

$page=file_get_contents('https://sinoptik.ua/%D0%BF%D0%BE%D0%B3%D0%BE%D0%B4%D0%B0-%D1%87%D0%B5%D1%80%D0%BD%D0%BE%D0%B2%D1%86%D1%8B');
$pq=new PhpQuery;
$pq->load_str($page);

?>

<?=template_header('Погода')?>
    <div class="content">
    <h2>Ласкаво просимо</h2>
    <p>Перегляд погоди на 7 днів:</p><hr><br>


<?php for ($i = 0; $i < 7; $i++) {
    $value1 = $pq->innerHTML($pq->query('.day-link')[$i]);
    $value2 = $pq->innerHTML($pq->query('.date')[$i]);
    $value3 = $pq->innerHTML($pq->query('.month')[$i]);
    $value4 = $pq->innerHTML($pq->query('.temperature')[$i]);
    $value5 = $pq->innerHTML($pq->query('.weatherIco')[$i]);

    echo "<p style='color: darkblue'>$value1</p><br>";
    echo "<p>$value2</p>  ";
    echo "<p>$value3</p>";
    echo "<p>$value5</p><br>";
    echo "<p style='color: chocolate'>Температура: $value4</p><hr><br>";
}
?>
    </div>

<?=template_footer()?>
