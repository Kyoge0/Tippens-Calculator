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
                        <option value="0" selected>Resolver para X</option>
                        <option value="1">Resolver para V₀</option>
                        <option value="2">Resolver para aceleración</option>
                        <option value="3">Resolver para t</option>
                    </select>
                </div>
                <div class="Icontainer-flex">
                    <label for="V₀" id="lbl1" class="form-label">Velocidad final:</label>
                    <input type="number" step="any" placeholder="m/s²" name="Vel-o" id="o-imp" class="form-imput">
                    <label for="T" id="lbl2" class="form-label">Tiempo:</label>
                    <input type="number" step="any" placeholder="S" name="T-imp" id="T-imp" class="form-imput">
                    <label for="Accel" id="lbl3" class="form-label">Aceleración:</label>
                    <input type="number" step="any" placeholder="m/s²" name="Accel" id="Accel" class="form-imput">
                    <input type="submit" value="Calcular" class="button">
                    <label for="res" class="form-label" class="form-button">Resultado:</label>
                    <input type="text" placeholder="resultado" name="result" id="result-imp" value="<?php echo $Result; ?>" class="form-imput">
                    <input type="number" value="5" name="temp" hidden>
                </div>
            </form>
        </div>
        <script src="Main.js"></script>
    </body>
</html>