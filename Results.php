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
    
    //? Formula de desplazamiento x = ((vi + vf)/2)*t
    if($Index == 2){
        $Timp = $_GET['T-imp'];
        $Vo = $_GET['Vel-o'];
        $Vf = $_GET['Vel-f'];

        if($selection == 0){
            $Result = (($Vo + $Vf) / 2) * $Timp;
        }
        if($selection == 1){
            $Result = (2 * $Vo / $Timp) - $Vf;
        }
        if($selection == 2){
            $Result = (2 * $Vo / $Timp) - $Vf;
        }
        if($selection == 3){
            $Result = (2 * $Timp) / ($Vo + $Vf);
        }

        include "vista/Posición-X-var1.php";
    }

    //? Formula de cambio de velocidad vf = vi + at
    if($Index == 3){
        $Vo = $_GET['Vel-o'];
        $Accel = $_GET['Accel'];
        $Timp = $_GET['T-imp'];
        
        if($selection == 0){
            //Calculo de vf
            $Result = ($Vo + ($Accel * $Timp));
        }
        if($selection == 1){
            //Calculo de Vo
            $Result = ($Vo + ($Accel * $Timp)); 
        }
        if($selection == 2){
            //Calculo de Accel
            $Result = ($Accel - $Vo) / $Timp;
        }
        if($selection == 3){
            //Calculo de Timp
            $Result = ($Timp - $Vo) / $Accel;
        }

        include "vista/Velocidad-f.php";
    }
    
    //? Formula de desplazamiento x = (Vo * t) + (1/2 * a * t)
    if($Index == 4){
        $Vo = $_GET['Vel-o'];
        $Timp = $_GET['T-imp'];
        $Accel = $_GET['Accel'];

        if($selection == 0){
            //Calculo para X
            $Result = (($Vo * $Timp) + (0.5 * $Accel * ($Timp * $Timp)));
        }
        if($selection == 1){
            //Calculo para Vo
            $Result = ($Vo - ((0.5 * $Accel) * ($Timp * $Timp))) / $Timp;
        }
        if($selection == 2){
            //Calculo para accel
            $Result = 2 * ($Accel - $Vo * $Timp) / ($Timp * $Timp);
            
        }
        if($selection == 3){
            //Calculo para Timp
            
        }

        include "vista/Posición-X-var2.php";
    }

    //? Formula para desplazamiento x = Vf * t - 1/2 a * t^2
    if($Index == 5){
        $Vo = $_GET['Vel-o'];
        $Timp = $_GET['T-imp'];
        $Accel = $_GET['Accel'];

        if($selection == 0){
            //Calcular x
            $Result = (($Vo * $Timp) - (0.5 * $Accel * ($Timp * $Timp)));
        }
        if($selection == 1){
            //Calcular Vf
            $Result = ($Vo + (0.5 * $Accel * ($Timp * $Timp))) / $Timp;
        }
        if($selection == 2){
            //Calcular Accel
            $Result = 2 * ($Vo * $Timp - $Accel) / ($Timp * $Timp);
        }
        if($selection == 3){
            //Calcular Timp
                        
        }

        include "vista/Posición-X-var3.php";
    }

    //? Formula para desplazamiento y aceleración
    if($Index == 6){
        $Vo = $_GET['Vel-o'];
        $Vf = $_GET['Vel-f'];

        if($selection == 0){
            // Calculo de 2ax
            $Result = (($Vo * $Vo) + ($Vf * $Vf));
        }
        if($selection == 1){
            //Calculo para Vf
            $Result = sqrt($Vo - $Vf);
            
        }
        if($selection == 2){
            // Calculo para Vo
            $Result = sqrt($Vf - $Vo);
            
        }
        include "vista/Temp-y-Accel.php";
    }
}

    //?Suma de vectores
    if($Index == 7){
        if($selection == 1){
            $Vector1 = $_GET['V-1'];
            $Angulo1 = $_GET['A-1'];
        }
        include "vista/Vectores.php";
    }
?>