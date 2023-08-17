<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="build/css/app.css">
    <link rel="manifest" href="manifest.json">
    <title>Sistema de Medidores</title>
</head>

<body>
    <?php include 'includes/templates/header.php'; ?>
    <?php include 'includes/templates/navBar.php'; ?>

    <div class="surtidores">
        <div class="surtidor-card">
            <div class="surtidor">
                <h3>Surtidor Hidraulico</h3>
                <img id="ledHidraulico" class="led" data-ip="30" src="src/img/led-off.png">
                <label for="input1">Unidad</label>
                <input type="text" id="input1" name="input1" required />
                <button class="" onclick="encenderLED('input1','30')"><img src="src/img/on-button.png"></button>
                <button class="" onclick="apagarLED('30')"><img src="src/img/off-button.png"></button>
            </div>
        </div>

        <div class="surtidor-card">
            <div class="surtidor">
                <h3>Surtidor ATF</h3>
                <img id="ledAtf" class="led" data-ip="221" src="src/img/led-off.png">
                <label for="input2">Unidad</label>
                <input type="text" id="input2" name="input2" required />
                <button class="" onclick="encenderLED('input2','221')"><img src="src/img/on-button.png"></button>
                <button class="" onclick="apagarLED('221')"><img src="src/img/off-button.png"></button>

            </div>
        </div>

        <div class="surtidor-card">
            <div class="surtidor">
                <h3>Surtidor Caja</h3>
                <img id="ledCaja" class="led" data-ip="224" src="src/img/led-off.png">
                <label for="input3">Unidad</label>
                <input type="text" id="input3" name="input3" required />
                <button class="" onclick="encenderLED('input3','224')"><img src="src/img/on-button.png"></button>
                <button class="" onclick="apagarLED('224')"><img src="src/img/off-button.png"></button>

            </div>
        </div>



        <div class="surtidor-card">
            <div class="surtidor">
                <h3>Surtidor Diferencial</h3>
                <img id="ledDiferencial" class="led" data-ip="225" src="src/img/led-off.png">
                <label for="input4">Unidad</label>
                <input type="text" id="input4" name="input4" required />
                <button class="" onclick="encenderLED('input4','225')"><img src="src/img/on-button.png"></button>
                <button class="" onclick="apagarLED('225')"><img src="src/img/off-button.png"></button>

            </div>
        </div>

        <div class="surtidor-card">
            <div class="surtidor">
                <h3>Surtidor Motor</h3>
                <img id="ledMotor" class="led" data-ip="226" src="src/img/led-off.png">
                <label for="input5">Unidad</label>
                <input type="text" id="input5" name="input5" required />
                <button class="" onclick="encenderLED('input5','226')"><img src="src/img/on-button.png"></button>
                <button class="" onclick="apagarLED('226')"><img src="src/img/off-button.png"></button>

            </div>
        </div>

        <div class="surtidor-card">
            <div class="surtidor">
                <h3>Surtidor Urea</h3>
                <img id="ledUrea" class="led" data-ip="96" src="src/img/led-off.png">
                <label for="input6">Unidad</label>
                <input type="text" id="input6" name="input6" required />
                <button class="" onclick="encenderLED('input6','96')"><img src="src/img/on-button.png"></button>
                <button class="" onclick="apagarLED('96')"><img src="src/img/off-button.png"></button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="src/js/dashboard.js"></script>
    <script src="src/js/app.js"></script>

</body>

</html>