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
        $ResultantX = 0;
        $ResultantY = 0;
        $ResultantF = 0;
        $Polar = 0;

        if($selection == 1){
            $Vector1 = $_GET['V-1'];
            $Angulo1 = $_GET['A-1'];

            $ResultantX = $ResultantX + cos(deg2rad($Angulo1)) * $Vector1;
            $ResultantY = $ResultantY + sin(deg2rad($Angulo1)) * $Vector1;
        }

        if($selection == 2){
            $Vector1 = $_GET['V-1'];
            $Angulo1 = $_GET['A-1'];

            $ResultantX = $ResultantX + cos(deg2rad($Angulo1)) * $Vector1;
            $ResultantY = $ResultantY + sin(deg2rad($Angulo1)) * $Vector1;

            $Vector2 = $_GET['V-2'];
            $Angulo2 = $_GET['A-2'];

            $ResultantX = $ResultantX + cos(deg2rad($Angulo2)) * $Vector2;
            $ResultantY = $ResultantY + sin(deg2rad($Angulo2)) * $Vector2;
        }

        if($selection == 3){
            $Vector1 = $_GET['V-1'];
            $Angulo1 = $_GET['A-1'];

            $ResultantX = $ResultantX + cos(deg2rad($Angulo1)) * $Vector1;
            $ResultantY = $ResultantY + sin(deg2rad($Angulo1)) * $Vector1;

            $Vector2 = $_GET['V-2'];
            $Angulo2 = $_GET['A-2'];

            $ResultantX = $ResultantX + cos(deg2rad($Angulo2)) * $Vector2;
            $ResultantY = $ResultantY + sin(deg2rad($Angulo2)) * $Vector2;

            $Vector3 = $_GET['V-3'];
            $Angulo3 = $_GET['A-3'];

            $ResultantX = $ResultantX + cos(deg2rad($Angulo3)) * $Vector3;
            $ResultantY = $ResultantY + sin(deg2rad($Angulo3)) * $Vector3;
        }

        if($selection == 4){
            $Vector1 = $_GET['V-1'];
            $Angulo1 = $_GET['A-1'];

            $ResultantX = $ResultantX + cos(deg2rad($Angulo1)) * $Vector1;
            $ResultantY = $ResultantY + sin(deg2rad($Angulo1)) * $Vector1;

            $Vector2 = $_GET['V-2'];
            $Angulo2 = $_GET['A-2'];

            $ResultantX = $ResultantX + cos(deg2rad($Angulo2)) * $Vector2;
            $ResultantY = $ResultantY + sin(deg2rad($Angulo2)) * $Vector2;

            $Vector3 = $_GET['V-3'];
            $Angulo3 = $_GET['A-3'];

            $ResultantX = $ResultantX + cos(deg2rad($Angulo3)) * $Vector3;
            $ResultantY = $ResultantY + sin(deg2rad($Angulo3)) * $Vector3;

            $Vector4 = $_GET['V-4'];
            $Angulo4 = $_GET['A-4'];

            $ResultantX = $ResultantX + cos(deg2rad($Angulo4)) * $Vector4;
            $ResultantY = $ResultantY + sin(deg2rad($Angulo4)) * $Vector4;
        }

        if($selection == 5){
            $Vector1 = $_GET['V-1'];
            $Angulo1 = $_GET['A-1'];

            $ResultantX = $ResultantX + cos(deg2rad($Angulo1)) * $Vector1;
            $ResultantY = $ResultantY + sin(deg2rad($Angulo1)) * $Vector1;

            $Vector2 = $_GET['V-2'];
            $Angulo2 = $_GET['A-2'];

            $ResultantX = $ResultantX + cos(deg2rad($Angulo2)) * $Vector2;
            $ResultantY = $ResultantY + sin(deg2rad($Angulo2)) * $Vector2;

            $Vector3 = $_GET['V-3'];
            $Angulo3 = $_GET['A-3'];

            $ResultantX = $ResultantX + cos(deg2rad($Angulo3)) * $Vector3;
            $ResultantY = $ResultantY + sin(deg2rad($Angulo3)) * $Vector3;

            $Vector4 = $_GET['V-4'];
            $Angulo4 = $_GET['A-4'];

            $ResultantX = $ResultantX + cos(deg2rad($Angulo4)) * $Vector4;
            $ResultantY = $ResultantY + sin(deg2rad($Angulo4)) * $Vector4;
            
            $Vector5 = $_GET['V-5'];
            $Angulo5 = $_GET['A-5'];

            $ResultantX = $ResultantX + cos(deg2rad($Angulo5)) * $Vector5;
            $ResultantY = $ResultantY + sin(deg2rad($Angulo5)) * $Vector5;
        }

        if($selection == 6){
            $Vector1 = $_GET['V-1'];
            $Angulo1 = $_GET['A-1'];

            $ResultantX = $ResultantX + cos(deg2rad($Angulo1)) * $Vector1;
            $ResultantY = $ResultantY + sin(deg2rad($Angulo1)) * $Vector1;

            $Vector2 = $_GET['V-2'];
            $Angulo2 = $_GET['A-2'];

            $ResultantX = $ResultantX + cos(deg2rad($Angulo2)) * $Vector2;
            $ResultantY = $ResultantY + sin(deg2rad($Angulo2)) * $Vector2;

            $Vector3 = $_GET['V-3'];
            $Angulo3 = $_GET['A-3'];

            $ResultantX = $ResultantX + cos(deg2rad($Angulo3)) * $Vector3;
            $ResultantY = $ResultantY + sin(deg2rad($Angulo3)) * $Vector3;

            $Vector4 = $_GET['V-4'];
            $Angulo4 = $_GET['A-4'];

            $ResultantX = $ResultantX + cos(deg2rad($Angulo4)) * $Vector4;
            $ResultantY = $ResultantY + sin(deg2rad($Angulo4)) * $Vector4;
            
            $Vector5 = $_GET['V-5'];
            $Angulo5 = $_GET['A-5'];

            $ResultantX = $ResultantX + cos(deg2rad($Angulo5)) * $Vector5;
            $ResultantY = $ResultantY + sin(deg2rad($Angulo5)) * $Vector5;

            $Vector6 = $_GET['V-6'];
            $Angulo6 = $_GET['A-6'];

            $ResultantX = $ResultantX + cos(deg2rad($Angulo6)) * $Vector6;
            $ResultantY = $ResultantY + sin(deg2rad($Angulo6)) * $Vector6;
        }

        if($Angulo1 == 90 || $Angulo1 == 270 || $Angulo1 == -90 || $Angulo1 == -270){
            $ResultantX = $ResultantX - cos(deg2rad($Angulo1)) * $Vector1;
        }
        if($Angulo1 == 180 || $Angulo1 == 360 || $Angulo1 == 0 || $Angulo1 == -180 || $Angulo1 == -360){
            $ResultantY = $ResultantY - sin(deg2rad($Angulo1)) * $Vector1;
        }

        if($Angulo2 == 90 || $Angulo2 == 270 || $Angulo2 == -90 || $Angulo2 == -270){
            $ResultantX = $ResultantX - cos(deg2rad($Angulo2)) * $Vector2;
        }
        if($Angulo2 == 180 || $Angulo2 == 360 || $Angulo2 == 0 || $Angulo2 == -180 || $Angulo2 == -360){
            $ResultantY = $ResultantY - sin(deg2rad($Angulo2)) * $Vector2;
        }

        if($Angulo3 == 90 || $Angulo3 == 270 || $Angulo3 == -90 || $Angulo3 == -270){
            $ResultantX = $ResultantX - cos(deg2rad($Angulo3)) * $Vector3;
        }
        if($Angulo3 == 180 || $Angulo3 == 360 || $Angulo3 == 0 || $Angulo3 == -180 || $Angulo3 == -360){
            $ResultantY = $ResultantY - sin(deg2rad($Angulo3)) * $Vector3;
        }

        if($Angulo4 == 90 || $Angulo4 == 270 || $Angulo4 == -90 || $Angulo4 == -270){
            $ResultantX = $ResultantX - cos(deg2rad($Angulo4)) * $Vector4;
        }
        if($Angulo4 == 180 || $Angulo4 == 360 || $Angulo4 == 0 || $Angulo4 == -180 || $Angulo4 == -360){
            $ResultantY = $ResultantY - sin(deg2rad($Angulo4)) * $Vector4;
        }

        if($Angulo5 == 90 || $Angulo5 == 270 || $Angulo5 == -90 || $Angulo5 == -270){
            $ResultantX = $ResultantX - cos(deg2rad($Angulo5)) * $Vector5;
        }
        if($Angulo5 == 180 || $Angulo5 == 360 || $Angulo5 == 0 || $Angulo5 == -180 || $Angulo5 == -360){
            $ResultantY = $ResultantY - sin(deg2rad($Angulo5)) * $Vector5;
        }

        if($Angulo6 == 90 || $Angulo6 == 270 || $Angulo6 == -90 || $Angulo6 == -270){
            $ResultantX = $ResultantX - cos(deg2rad($Angulo6)) * $Vector6;
        }
        if($Angulo6 == 180 || $Angulo6 == 360 || $Angulo6 == 0 || $Angulo6 == -180 || $Angulo6 == -360){
            $ResultantY = $ResultantY - sin(deg2rad($Angulo6)) * $Vector6;
        }

        $Value = pow($ResultantX, 2) + pow($ResultantY, 2);
        $ResultantF = sqrt($Value);
        $Polar = rad2deg(atan2($ResultantX,$ResultantY));
        include "vista/Vectores.php";
    }
?>