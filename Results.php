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
        $Timp = $_GET['T-imp'];
        $Vo = $_GET['Vel-o'];
        $Vf = $_GET['Vel-f'];

        if($selection == 0){
            $Result = (($Vo + $Vf) / 2) * $Timp;
        }
        if($selection == 1){
            
        }
        if($selection == 2){
            
        }
        if($selection == 3){
            
        }

        include "vista/Posición-X-var1.php";
    }

    if($Index == 3){
        $Vo = $_GET['Vel-o'];
        $Accel = $_GET['Accel'];
        $Timp = $_GET['T-imp'];
        
        if($selection == 0){
            $Result = ($Vo + ($Accel * $Timp));
        }
        if($selection == 1){
            
        }
        if($selection == 2){
            
        }
        if($selection == 3){
            
        }

        include "vista/Velocidad-f.php";
    }
    
    if($Index == 4){
        $Vo = $_GET['Vel-o'];
        $Timp = $_GET['T-imp'];
        $Accel = $_GET['Accel'];

        if($selection == 0){
            $Result = (($Vo * $Timp) + (0.5 * $Accel * ($Timp * $Timp)));
        }
        if($selection == 1){
            
        }
        if($selection == 2){
            
        }
        if($selection == 3){
            
        }

        include "vista/Posición-X-var2.php";
    }

    if($Index == 5){
        $Vo = $_GET['Vel-o'];
        $Timp = $_GET['T-imp'];
        $Accel = $_GET['Accel'];

        if($selection == 0){
            $Result = (($Vo * $Timp) - (0.5 * $Accel * ($Timp * $Timp)));
        }
        if($selection == 1){
            
        }
        if($selection == 2){
            
        }
        if($selection == 3){
            
        }

        include "vista/Posición-X-var3.php";
    }

    if($Index == 6){
        $Vo = $_GET['Vel-o'];
        $Vf = $_GET['Vel-f'];

        if($selection == 0){
            $Result = (($Vo * $Vo) + ($Vf * $Vf));
        }
        if($selection == 1){
            
        }
        if($selection == 2){
            
        }
        if($selection == 3){
            
        }

        include "vista/Temp-y-Accel.php";
    }
}

?>