<!DOCTYPE html>
<html>
    <head>
        <title>Suma de vectores</title>
        <link rel="stylesheet" href="css/styles.css">
        <meta charset="UTF-8">
    </head>
    
    <body>
        <div>
            <form action="../Results.php" method="GET" id="form" class="form">
                <div class="Vector-select">
                    <label for="cant">¿Cuantos vectores usas?</label>
                    <select name="selection" id="selection" class="form-select">
                        <option value="0" selected style="display: none">Vectores</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
                <br>
                <div class="Vector-imp">
                    <label for="Vector" class="form-label" id="L-1" style="display: none">Magnitud 1:</label>
                    <input type="number" class="form-imput" step="1" id="V-1" name="V-1" style="display: none">
                    <label for="Angulo" class="form-label" id="L-2" style="display: none">Ángulo 1:</label>
                    <input type="number" class="form-imput" step="1" id="A-1" name="A-1" style="display: none">
                    <label for="Vector" class="form-label" id="L-3" style="display: none">Magnitud 2:</label>
                    <input type="number" class="form-imput" step="1" id="V-2" name="V-2" style="display: none">
                    <label for="Angulo" class="form-label" id="L-4" style="display: none">Ángulo 2:</label>
                    <input type="number" class="form-imput" step="1" id="A-2" name="A-2" style="display: none">
                    <label for="Vector" class="form-label" id="L-5" style="display: none">Magnitud 3:</label>
                    <input type="number" class="form-imput" step="1" id="V-3" name="V-3" style="display: none">
                    <label for="Angulo" class="form-label" id="L-6" style="display: none">Ángulo 3:</label>
                    <input type="number" class="form-imput" step="1" id="A-3" name="A-3" style="display: none">
                    <label for="Vector" class="form-label" id="L-7" style="display: none">Magnitud 4:</label>
                    <input type="number" class="form-imput" step="1" id="V-4" name="V-4" style="display: none">
                    <label for="Angulo" class="form-label" id="L-8" style="display: none">Ángulo 4:</label>
                    <input type="number" class="form-imput" step="1" id="A-4" name="A-4" style="display: none">
                    <label for="Vector" class="form-label" id="L-9" style="display: none">Magnitud 5:</label>
                    <input type="number" class="form-imput" step="1" id="V-5" name="V-5" style="display: none">
                    <label for="Angulo" class="form-label" id="L-10" style="display: none">Ángulo 5:</label>
                    <input type="number" class="form-imput" step="1" id="A-5" name="A-5" style="display: none">
                    <label for="Vector" class="form-label" id="L-11" style="display: none">Magnitud 6:</label>
                    <input type="number" class="form-imput" step="1" id="V-6" name="V-6" style="display: none">
                    <label for="Angulo" class="form-label" id="L-12" style="display: none">Ángulo 6:</label>
                    <input type="number" class="form-imput" step="1" id="A-6" name="A-6" style="display: none">
                    <input type="submit" id="B" style="display: none" class="button">
                    <label for="X">Resultante de X</label>
                    <input type="text" class="form-imput" id="AnswerX" style="color: blue" name="Cos" value="<?php echo $ResultantX; ?>" disabled>
                    <label for="Y">Resultante de Y</label>
                    <input type="text" class="form-imput" id="AnswerY" style="color: blue" name="Sen" value="<?php echo $ResultantY; ?>" disabled>
                    <label for="F">Resultante de fuerzas:</label>
                    <input type="text" class="form-imput" id="AnswerF" style="color: blue" name="Newton" value="<?php echo $ResultantF; ?>" disabled>
                    <label for="grade">Ángulo polar:</label>
                    <input type="text" class="form-imput" id="AnswerP" style="color: blue" name="Polar" value="<?php echo $Polar; ?>" disabled>
                    <input type="number" value="7" name="temp" hidden>
                </div>
            </form>
        </div>
        <script src="JS/Vectores.js"></script>
    </body>
</html>