// Ip de los surtidores
const ipSurtidores = ['226', '221', '224', '225', '30', '96'];
let surtidor = '';
const sockets = [];
let valor;
let intentosReconexion = 0;
const maxIntentosReconexion = 5;

const connectWebSocket = () => {
    ipSurtidores.forEach(ip => {

        let socket = new WebSocket(`ws://192.168.0.${ip}/ws`);

        socket.onopen = function (event) {
            const respuesta = diccionarioIp(ip);
            console.log(`Conexion establecida : ${respuesta}`);
            sockets.push(socket);
            intentosReconexion = 0;
        };

        socket.onclose = function (event) {
            const respuesta = diccionarioIp(ip);
            console.log(`Conexion perdida : ${respuesta}`);
            console.log(`Intentos de reconexion: ${intentosReconexion}`);

            if (maxIntentosReconexion < intentosReconexion) {
                setTimeout(() => {
                    intentosReconexion++;
                    connectWebSocket();
                }, 2000);
            }
        }

        socket.onerror = function (event) {
            const respuesta = diccionarioIp(ip);
            console.log(`Conexion fallida : ${respuesta}`);
        }

        socket.onmessage = function (event) {
            const respuesta = event.data;
            if (respuesta === 'Encendido' || 'Apagado' || 'unidad no valida') {
                surtidorStatus(ip, respuesta);
            }
        };
    })
}

// Encender surtidor
function encenderLED(idInput, ip) {
    valor = document.querySelector(`#${idInput}`).value;
    let campoLimpiar = document.querySelector(`#${idInput}`);
    if (valor === '') {
        mostrarMensaje("Inserte numero de unidad", "error");
        return;
    }
    const socket = sockets.find(s => s.url.includes(ip));
    if (socket) {
        socket.send(`/encender/${valor}`);
        campoLimpiar.value = '';
    }
}

function apagarLED(ip) {
    const socket = sockets.find(s => s.url.includes(ip));
    if (socket) {
        socket.send(`/apagar`);
    }

}

// Definir un objeto para almacenar el estado actual de los surtidores
const estadoSurtidores = {};

function surtidorStatus(ip, status) {
    let led = document.querySelector(`.led[data-ip="${ip}"]`);
    if (status === "Encendido") {
        led.src = 'src/img/led.png';
    } else if (status === "Apagado") {
        led.src = 'src/img/led-off.png';
    } else if (status === "unidad no valida") {
        // Mostrar un aviso de error
        mostrarMensaje(status, "error");
    }

}

setInterval(() => {
    sockets.forEach(socket => {
        const ipSocket = sockets.find(s => s.url.includes(socket.url));
        const ip = socket.url.substring(15, ipSocket.url.lastIndexOf('/ws'));
        if (socket.readyState === 1) {
            socket.send('/status');
        }
        if (socket.readyState === 3) {
            surtidorStatus(ip, "Apagado");
        }
    });
}, 3000);


function mostrarMensaje(texto, status) {
    Swal.fire({
        position: "top-end",
        icon: status,
        title: texto,
        showConfirmButton: false,
        timer: 2500,
    });
}

function diccionarioIp(ip) {
    const direcciones = {
        "30": "Hidraulico",
        "221": "ATF",
        "224": "Caja",
        "225": "Diferencial",
        "226": "Motor",
        "96": "Urea"
    }

    if (ip in direcciones) {
        return `Surtidor ${direcciones[ip]}`;
    }


}

// Iniciar Conexión WebSocket
connectWebSocket();