Projeto de Redes de Computadores - Davi Seiji Kawai Santos - 156373

<!DOCTYPE html>
<html>
<head>
    <title>Projeto WEB - Conteúdo Dinâmico</title>
    <style>
        body {
            background-color: lightblue;
            text-align: center
        }

        h1{
            font-size: 50px;
        }

        p{
            font-size: 35px;
        }

    </style>
    <script>
        function atualizarConteudo() {

            var ip = "<?php echo $_SERVER['REMOTE_ADDR']; ?>";

            var dataHora = new Date().toLocaleString();

            document.getElementById("ip").innerHTML = "O IP do cliente é: " + ip;
            document.getElementById("data-hora").innerHTML = "Data e Hora: " + dataHora;

            if ("geolocation" in navigator) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var latitude = position.coords.latitude;
                    var longitude = position.coords.longitude;
                    document.getElementById("latitude").innerHTML = "Latitude: " + latitude;
                    document.getElementById("longitude").innerHTML = "Longitude: " + longitude;
                });
            } else {

                document.getElementById("latitude").innerHTML = "Geolocalização não é suportada neste navegador.";
            }
        }

        setInterval(atualizarConteudo, 1000);
    </script>
</head>
<body>
    <h1>Projeto WEB - Conteúdo Dinâmico</h1>
    <p id="ip"></p>
    <p id="data-hora"></p>
    <p id="latitude"></p>
    <p id="longitude"></p>
</body>
</html>
