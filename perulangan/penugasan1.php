<?php 
echo "No 1, <br>";
for ($a = 2; $a <= 64; $a *= 2) {
    echo "$a  ";
}
echo "<hr>";

echo "No 2, <br>";
for ($b = 625; $b >= 5; $b /= 5) {
    echo "$b  ";
}
echo "<hr>";

echo "No 3, <br> ";
$bil = [18, 45, 29, 61, 47, 34];

for ($i = 0; $i < count ($bil); $i++) {
   $result[$i] = $bil[$i] % 3;
   echo  "$bil[$i] % 3 = $result[$i]";
   echo "<hr>";
}
echo "<hr>";


echo "No 4, <br>";
for ($i =0; $i <5; $i++) {
    for ($a = 0; $a <= $i; $a++) {
        echo "*";
    }
    echo "<br>";
}

for ($i = 0; $i < 5; $i++) {
    for ($a = 5; $a > $i; $a--) {
        echo "_";
    }
    for ($b= 0; $b <= $i; $b++){
        echo " * ";
    }
    echo "<br>";
}
?>


