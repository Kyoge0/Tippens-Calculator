<?php

error_reporting(0);
$Result = 0;
$Index = $_GET['temp'];
if($_SERVER['REQUEST_METHOD']=='GET'){
  
    $selection = $_GET['selection'];
    
    if($Index == 1){
        $Mass = $_GET['Mass'];
        $Accel = $_GET['Accel'];
        $Result = $_GET['result'];
        if($selection == 0){
            $Result = $Mass * $Accel;
        }
        
        if($selection == 1 | $selection == 2){
            $Result = $Mass / $Accel;
        } 
        include "vista/Tippens.php";
    }

    if($Index == 2){
        include "vista/Posición-X-var1.php";
    }
    
}

?>