<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <title>Calculadora Tippens</title>
    <head>

    </head>
    
    <body>
        <div>
        <form action="Results.php">

            <div>
                <select class="form-select" id="option">
                    <option selected value="0">Calculo de peso</option>
                    <option value="1">Calculo de masa</option>
                    <option value="2">Calculo de peso</option>
                </select>
            </div>
            <br>

            <!-- //TODO apartado para masa -->

            <label id="lbl1">Masa:</label>
            <div class="Input-group">
                <input type="Number" placeholder="Masa (kg)" id="MassImp" step="any"></input>
                <span>
                    kg
                </span>
            </div>

            <!-- //TODO apartado para aceleración -->

            <br>
            <label id="lbl2">Aceleración:</label>
            <div class="Input-group">
                <input type="Number" placeholder="Aceleración" id="AccelImp" step="any"></input>
                <span>
                    m/s
                    <sup>2</sup>
                </span>
            </div>

            <br>
            <div class="Send">
                <input type="submit" value="Calcular"></input>
            </div>
            
        </form>
        </div>
    </body>

    <script src="Main.js"></script>
</html>