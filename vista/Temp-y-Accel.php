<!DOCTYPE html>
<html>
    <head>
        <title>Calculadora de Tippens</title>
        <link rel="stylesheet "href="css/styles.css">
        <meta charset="UTF-8">
    </head>

    <body>
        <div id="form-cont" name="form-cont">
            <form action="../Results.php" method="get" id="form" class="form">
                <div class="container-flex">
                    <input type="radio" class="radio" value="IS" name="Units" id="IS" checked>
                    <label for="IS" class="form-label">SI</label>
                    <input type="radio" class="radio" value="US" name="Units" id="US"></input>
                    <label for="US" class="form-label">US</label>
                </div>
                <div class="container-flex">
                    <select name="selection" id="selection" class="form-select">
                        <option value="0" selected>Resolver para aceleración y Tiempo</option>
                        <option value="1">Resolver para Vf</option>
                        <option value="2">Resolver para Vo</option>
                    </select>
                </div>
                <div class="Icontainer-flex">
                    <label for="Mass" id="lbl1" class="form-label">Velocidad final:</label>
                    <input type="number" step="any" placeholder="m/s²" name="Vel-f" id="Vel-f" class="form-imput">
                    <label for="Accel" id="lbl2" class="form-label">Velocidad inicial</label>
                    <input type="number" step="any" placeholder="m/s²" name="Vel-o" id="Vel-o" class="form-imput">
                    <input type="submit" value="Calcular" class="button">
                    <label for="res" class="form-label" class="form-button">Resultado:</label>
                    <input type="text" placeholder="resultado" name="result" id="result-imp" value ="<?php echo $Result; ?>" class="form-imput">
                    <input type="number" value="6" name="temp" hidden>
                </div>
            </form>
        </div>
        <script src="Main.js"></script>
    </body>
</html>