<html>
    <head>
        <title> Calculadora Simples</title>
        <style>
            body {
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: #f4f4f4;
                font-family: Arial, Helvetica, sans-serif;
            }
            form{
                background-color: #fff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
            }
        </style>
    </head>
    <body>
        <form action="index.php" method="POST">
        <h1>Calculadora</h1>
        Operador 1: 
        <input type="text" name="op1">
        <br>
        <input type="radio" name="operacao" value="adicao"> <strong>+</strong>
        <input type="radio" name="operacao" value="subtracao"> <strong>-</strong> 
        <input type="radio" name="operacao" value="multiplicacao"> <strong>*</strong> 
        <input type="radio" name="operacao" value="divisao"> <strong>/</strong> 
        <input type="radio" name="operacao" value="elevado"> <strong>x<sup>y</sup></strong>
        <br> 
        <input type="radio" name="operacao" value="raiz"> <strong>√</strong>
        <input type="radio" name="operacao" value="sin"> <strong>sen</strong>
        <input type="radio" name="operacao" value="cos"> <strong>cos</strong> 
        <input type="radio" name="operacao" value="tan"> <strong>tan</strong>   
        <br>
        Operador 2: 
        <input type="text" name="op2">
        </br>
        </br>
        <input type="submit" value="Calcular">
        <h3>Insira o(s) n&uacutemero(s)!</h3>
        <?php
            error_reporting(0);
            $v1 = $_POST["op1"];
            $v2 = $_POST["op2"];
            $operacao = $_POST["operacao"];

            function somar($v1, $v2){
                $result = $v1 + $v2;
                echo "<h2> $result </h2>";
            }
            function diminuir($v1, $v2){
                $result = $v1 - $v2;
                echo "<h2> $result </h2>";
            }
            function multiplicar($v1, $v2){
                $result = $v1 * $v2;
                echo "<h2> $result </h2>";
            }
            function dividir($v1, $v2){
                $result = $v1 / $v2;
                echo "<h2> $result </h2>";
            }
            function elevar($v1, $v2){
                $result = pow($v1, $v2);
                echo "<h2> $result </h2>";
                echo "<br><h3> OBS: Operador 1 &eacute a base e o Operador 2 o expoente! </h3>";
            }
            function raizes($v1){
                $result = sqrt($v1);
                echo "<h2> $result </h2>";
                echo "<br><h3> OBS: Utilize apenas o Operador 1! </h3>";
            }
            function seno($v1){
                $result = sin($v1);
                echo "<h2> O resultado &eacute $result </h2>";
                echo "<br><h3> OBS: Utilize apenas o Operador 1! </h3>";
            }
            function cosseno($v1){
                $result = cos($v1);
                echo "<h2> $result </h2>";
                echo "<br><h3> OBS: Utilize apenas o Operador 1! </h3>";
            }
            function tangente($v1){
                $result = tan($v1);
                echo "<h2> $result </h2>";
                echo "<br><h3> OBS: Utilize apenas o Operador 1! </h3>";
            }
            switch ($operacao){
                case "adicao":
                    somar($v1, $v2);
                    break;
                case "subtracao":
                    diminuir($v1, $v2);
                    break;
                case "multiplicacao":
                    multiplicar($v1, $v2);
                    break;
                case "divisao":
                    dividir($v1, $v2);
                    break;
                case "elevado":
                    elevar($v1, $v2);
                    break;
                case "raiz":
                    raizes($v1);
                    break;
                case "sin":
                    seno($v1);
                    break;
                case "cos":
                    cosseno($v1);
                    break;
                case "tan":
                    tangente($v1);
                    break;
            }
            
        ?>
        </form>
        </br>
    </body>
</html>