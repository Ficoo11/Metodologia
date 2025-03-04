<!--
2. Cálculo de IMC (Índice de Masa Corporal)
 Objetivo: Ingresar peso y altura para calcular el IMC.
 models/IMC.php → Modelo
 views/imc.php → Vista
 controllers/IMCController.php → Controlador
 index.php → Punto de entrada

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4 border border-2 rounded p-3 shadow-lg bg-light mt-5 ">
                <h2>Calculadora de IMC</h2>
                <form method="POST" action="index.php">
                    <div class="form-floating mb-2">
                        <input class="form-control" type="number" name="peso" step="0.1" required placeholder="">
                        <label for="peso">Peso (kg)</label>
                    </div>

                    <div class="form-floating mb-2">                        
                        <input class="form-control" type="number" name="altura" step="0.01" required placeholder="">
                        <label for="altura">Altura (m):</label>
                    </div>
                                     
                    <button class="btn btn-primary w-100">Calcular IMC</button>
                </form>
                <p class="text-center text-success fw-bold"><?= isset($imc) ? "Tu IMC es: " . number_format($imc, 2) : '' ?></p>
            </div>
        </div>
    </div>
</body>

</html>