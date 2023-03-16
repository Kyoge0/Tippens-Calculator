<!DOCTYPE html>
<html>
    <head>
        <title>Calculadora de Tippens</title>
        <meta charset="UTF-8">
    </head>

    <body>
        <div id="form-cont" name="form-cont">
            <form action="Results.php" method="get" id="form" class="form">
                <div class="SystemOU">
                    <input type="radio" class="radio" value="IS" name="Units" id="IS" checked>
                    <label for="IS">SI</label>
                    <input type="radio" class="radio" value="US" name="Units" id="US"></input>
                    <label for="US">US</label>
                </div>
                <div class="selection-cont">
                    <select name="selection" id="selection">
                        <option value="0" selected>Calculo de peso</option>
                        <option value="1">Calculo de masa</option>
                        <option value="2">Calculo de Aceleración</option>
                    </select>
                </div>
                <div class="Input-cont">
                    <label for="Mass" id="lbl1">Masa:</label>
                    <input type="number" step="any" placeholder="Kg" name="Mass" id="Mass-imp">
                    <label for="Accel" id="lbl2">Aceleración:</label>
                    <input type="number" step="any" placeholder="m/s²" name="Accel" id="Accel-imp">
                    <input type="submit" value="Calcular">
                    <label for="res">Resultado:</label>
                    <input type="text" placeholder="resultado" name="result" id="result-imp" value ="<?php echo $Result ?>">
                </div>
            </form>
        </div>
        <script src="Main.js"></script>
    </body>
</html>