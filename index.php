<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Websender - Bağlantı Kontrolü - Keyubu.com</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

    <div class="websender-component">
        <div class="card">
            <div class="header">
                <span class="websender-logo"></span>
                <h5>MINEWEBTR.COM</h5>
                <p>WebSender Test Sayfası</p>
            </div>
            <div class="card-content">
                <form id="check-conntection">
                    <div class="input-control">
                        <label for="ip">IP Adresi</label>
                        <input type="text" id="ip" name="ip" placeholder="IP Adresi" autocomplete="ip">
                    </div>
                    <div class="input-control">
                        <label for="port">Port</label>
                        <input type="text" id="port" name="port" placeholder="Port" autocomplete="port">
                    </div>
                    <div class="input-control">
                        <label for="sifre">Şifre</label>
                        <input type="password" id="sifre" name="sifre" placeholder="Şifre" autocomplete="off">
                    </div>
                    <button type="submit" class="btn" id="submit-button">
                        TEST ET
                    </button>
                </form>
                <div class="centered m-0 mt-1">
                Bu sayfada girdiginiz hiçbir verinin kaydı tutulmamaktadır.
                </div>
                <div class="centered">
                    developed by <span>green</span>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="main.js"></script>
</html>