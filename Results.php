<?php
$Mass = $_GET['Mass'];
$Accel = $_GET['Accel'];
$Result = $_GET['result'];
$selection = $_GET['selection'];

if($selection == 0){
    $Result = $Mass * $Accel;
}

if($selection == 1 | $selection == 2){
    $Result = $Mass / $Accel;
}


include "Tippens.php";
?>