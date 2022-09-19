<!DOCTYPE html>
<html>
    <head>
        <title> QR Verifier | UMak ComSoc </title>

    <script src='Source/html5-qrcode.min2.js'></script>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        body {
            background-image: url('Images/OfficialBG.png');
        }

        .eventtextlogo {
            height: 45%;
            width: 45%;
            margin-right: auto;
            margin-left: 51.5%;
            margin-top: -2%;
        }

        .orgpartlogo {
            height: 25%;
            width: 25%;
            margin-right: auto;
            margin-left: 61.30%;
            margin-top: 3%;
            z-index: 1;
        }

        .rectangle {
            background-color: white;
            border-radius: 8%;
            height: 50%;
            width: 30%;
            position: absolute;
            right: 11%;
        }

        .p1 {
            color: blue;
            font-family: 'Poppins', sans-serif;
            position: absolute;
            left: 61%;
            font-size: 30px;
        }

        .p2 {
            color: blue;
            font-family: 'Poppins', sans-serif;
            position: absolute;
            left: 61%;
            font-size: 30px;
            margin-top: 10%;
        }


        .camera {
            margin-left: 3.75%;
            margin-top: -7%;
        }


        .results {
            margin-left: 63%;
            margin-top: 5%;
            font-size: 30px;
            font-family: Poppins;
            z-index: 1;
            position: absolute;
        }

    </style>
    </head>
    
    <body>
        <div>
            <img src='Images/USC.png' alt="USC Logo" class="orgpartlogo">
            <img src='Images/HeronsWelcomes.png' alt="Herons Welcome Text" class="eventtextlogo">
        </div>
        
        

        <div class="rectangle"></div>    

        <div>
            <p class="p1"> <b> CREDENTIALS: </b></p>
            <p class="p2"> <b> STATUS: </b></p>
        </div>


        <form action="database_scan.php" method="POST">
            <div class="results">
                        <div id="result" name="scanned">___________________ </div>
            </div>
        </form>


        <div class="row, camera">
            <div class="col">
                <div style="width:45%;" id="reader"></div>
            </div>

            

        <script type="text/javascript">
            function onScanSuccess(qrCodeMessage) {
                document.getElementById('result').innerHTML = '<span class="result">'+qrCodeMessage+'</span>';
                document.getElementById('QRScanned').innerHTML = qrCodeMessage;
                document.forms[0].submit();
            }
            function onScanError(errorMessage) {
            //handle scan error
            }

            var html5QrcodeScanner = new Html5QrcodeScanner(
                "reader", { fps: 10, qrbox: 300 });
            html5QrcodeScanner.render(onScanSuccess, onScanError);
        </script>

    
    </body>
</html>