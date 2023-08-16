<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="build/css/app.css">
    <title>Sistema de Surtidores - AMYM</title>
</head>

<body>
    <main id="main-content">
        <?php include 'includes/templates/header.php'; ?>
        <?php include 'includes/templates/navBar.php'; ?>

        <div class="surtidores">
            <div class="grid-top">
                <div class="surtidor-card">
                    <div class="surtidor">
                        <h3>Surtidor Hidraulico</h3>
                        <img id="ledHidraulico" class="led" data-ip="235" src="src/img/led-off.png">
                        <label for="input1">Unidad</label>
                        <input type="text" id="input1" name="input1" required />
                        <button class="" onclick="encenderLED('input1','235')"><img
                                src="src/img/on-button.png"></button>
                        <button class="" onclick="apagarLED('235')"><img src="src/img/off-button.png"></button>
                    </div>
                </div>

                <div class="surtidor-card">
                    <div class="surtidor">
                        <h3>Surtidor ATF</h3>
                        <img id="ledAtf" class="led" data-ip="237" src="src/img/led-off.png">
                        <label for="input2">Unidad</label>
                        <input type="text" id="input2" name="input2" required />
                        <button class="" onclick="encenderLED('input2','237')"><img
                                src="src/img/on-button.png"></button>
                        <button class="" onclick="apagarLED('237')"><img src="src/img/off-button.png"></button>

                    </div>
                </div>

                <div class="surtidor-card">
                    <div class="surtidor">
                        <h3>Surtidor Caja</h3>
                        <img id="ledCaja" class="led" data-ip="224" src="src/img/led-off.png">
                        <label for="input3">Unidad</label>
                        <input type="text" id="input3" name="input3" required />
                        <button class="" onclick="encenderLED('input3','224')"><img
                                src="src/img/on-button.png"></button>
                        <button class="" onclick="apagarLED('224')"><img src="src/img/off-button.png"></button>

                    </div>
                </div>
            </div>

            <div class="grid-bottom">

                <div class="surtidor-card">
                    <div class="surtidor">
                        <h3>Surtidor Diferencial</h3>
                        <img id="ledDiferencial" class="led" data-ip="225" src="src/img/led-off.png">
                        <label for="input4">Unidad</label>
                        <input type="text" id="input4" name="input4" required />
                        <button class="" onclick="encenderLED('input4','225')"><img
                                src="src/img/on-button.png"></button>
                        <button class="" onclick="apagarLED('225')"><img src="src/img/off-button.png"></button>

                    </div>
                </div>

                <div class="surtidor-card">
                    <div class="surtidor">
                        <h3>Surtidor Motor</h3>
                        <img id="ledMotor" class="led" data-ip="226" src="src/img/led-off.png">
                        <label for="input5">Unidad</label>
                        <input type="text" id="input5" name="input5" required />
                        <button class="" onclick="encenderLED('input5','226')"><img
                                src="src/img/on-button.png"></button>
                        <button class="" onclick="apagarLED('226')"><img src="src/img/off-button.png"></button>

                    </div>
                </div>
            </div>

        </div>



    </main>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="src/js/dashboard.js"></script>

</body>

</html>