<html>
    <head>
        <title> Calculadora Simples</title>
    </head>
    <body>
        <h1>Calculadora</h1>
        <form action="index.php" method="POST">
        Operador 1: 
        <input type="text" name="op1">
        <br>
        <input type="radio" name="operacao" value="adicao"> +
        <input type="radio" name="operacao" value="subtracao"> - 
        <input type="radio" name="operacao" value="multiplicacao"> * 
        <input type="radio" name="operacao" value="divisao"> / 
        <br>
        Operador 2: 
        <input type="text" name="op2">
        </br>
        </br>
        <input type="submit" value="Calcular">
        </form>
        </br>
        </br>
        </form>
        <?php
            error_reporting(0);
            $v1 = $_POST["op1"];
            $v2 = $_POST["op2"];
            $operacao = $_POST["operacao"];

            switch ($operacao){
                case "adicao":
                    $result = $v1 + $v2;
                    echo "<h2> $result </h2>";
                    break;
                case "subtracao":
                    $result = $v1 - $v2;
                    echo "<h2> $result </h2>";
                    break;
                case "multiplicacao":
                    $result = $v1 * $v2;
                    echo "<h2> $result </h2>";
                    break;
                case "divisao":
                    $result = $v1 / $v2;
                    echo "<h2> $result </h2>";
                    break;
                default:
                    echo "<h3>Insira os n&uacutemeros!</h3>";
                    break;

            }
            
        ?>
    </body>
</html>