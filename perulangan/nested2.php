<?php 

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 5;  $j++) {
        echo "Ini perulangan ke ($i, $j)<br>";
    }
    echo "<hr>";
}

//while

$i = 0;
while ($i < 10) {
    for ($j = 0; $j < 10; $j++) {
        echo "Ini perulangan ke ($i, $j)<br>";
    }
    $i++;
}
echo "<hr>";
?>