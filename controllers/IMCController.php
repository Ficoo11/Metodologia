<?php
require_once "models/IMC.php";

class IMCController {
    public function calcular() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $peso = $_POST["peso"];
            $altura = $_POST["altura"];
            $imc = IMC::calcular($peso, $altura);
            require "views/imc.php";
        } else {
            require "views/imc.php";
        }
    }
}
?>
