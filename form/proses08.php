<?php 
if (isset($_POST['pilih'])){
    $film =$_POST['kartun'];
    echo "Film kartun favorit Anda adalah :
         <font color= blue><b>$film</b></font>";
}
?>