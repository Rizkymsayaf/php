<?php
if (isset($_POST["proses"])){
    $saran = nl2br($_POST["saran"]);
    echo "kritik dan saran anda adalah : <br>";
    echo "font color=blue><b>$saran</b> </font>";
}
?>