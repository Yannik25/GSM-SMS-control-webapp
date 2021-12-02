<!DOCTYPE html>
<html manifest="offline.appcache" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <head>

        <meta charset="utf-8">
        <title>SMS GSM Control Webapp</title>

        <!-- iPhone 6 Plus portrait startup image -->
        <link href="images/apple-touch-startup-image-1242x2148.png" media="(device-width: 414px) and (device-height: 736px)
             and (-webkit-device-pixel-ratio: 3)
             and (orientation: portrait)" rel="apple-touch-startup-image">
        <!-- iPhone 6 Plus landscape startup image -->
        <link href="images/apple-touch-startup-image-1182x2208.png" media="(device-width: 414px) and (device-height: 736px)
             and (-webkit-device-pixel-ratio: 3)
             and (orientation: landscape)" rel="apple-touch-startup-image">
        <!-- iPhone 6 startup image -->
        <link href="images/apple-touch-startup-image-750x1294.png" media="(device-width: 375px) and (device-height: 667px)
             and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
        <!-- iPhone 5 startup image -->
        <link href="images/apple-touch-startup-image-640x1096.png" media="(device-width: 320px) and (device-height: 568px)
             and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
        <!-- iPhone < 5 retina startup image -->
        <link href="images/apple-touch-startup-image-640x920.png" media="(device-width: 320px) and (device-height: 480px)
             and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
        <!-- iPhone < 5 non-retina startup image -->
        <link href="images/apple-touch-startup-image-320x460.png" media="(device-width: 320px) and (device-height: 480px)
             and (-webkit-device-pixel-ratio: 1)" rel="apple-touch-startup-image">


        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />

        <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="images/manifest.json">
        <link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="images/favicon.ico">
        <meta name="msapplication-config" content="images/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">

        <meta name="apple-mobile-web-app-title" content="SMS GSM Control">
        <meta name="application-name" content="SMS GSM Control">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="viewport" content="width=device-width, user-scalable=no" />
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <script src="js/moment.js"></script>



        <script type="text/javascript">
        var val = localStorage.getItem('value');

        if (val == null)
            val = "Nummer eingeben";

        document.getElementById("receivernumber").value = val;
        }
        </script>

    </head>

<body>

    <add-to-home-screen></add-to-home-screen>
    <script type="module" src="AddToHomeScreen.js"></script>

        <script type="text/javascript">
        function turnon() {
            var number = receivernumber.value;
            window.location.href = "sms:" + number + "&body="'ON';
        }
        </script>

        <div class="container">
            <div class="row top5">
                <div class="col-xs-6">
                    <button onclick="turnon()" type="button" class="btn btn-outline-primary">An</button>
                </div>  
            </div>
        </div>


        <div class="container">
            <div class="row top10">
                <div class="col-xs-12">

                    <hr>

                </div>

            </div>
        </div>


        <script type="text/javascript">
        function submitmyData() {
            localStorage.setItem('value', document.getElementById("receivernumber").value);
            window.alert("Nummer gespeichert!");
        }
        </script>

        <div class="container">

            <div class="row top10">
                <div class="col-xs-12">
                    <label>Einstellungen:</label>
                </div>
            </div>

            <div class="row top10">
            </div>

            <div class="row top10">

                <div class="col-xs-6">
                    <input class="form-control" type="text" id="receivernumber" value="" />
                </div>

                <div class="col-xs-6">
                    <button onclick="submitmyData()" type="button" class="btn btn-outline-primary">Nummer
                        speichern</button>
                </div>

            </div>

        </div>

    </center>

    <div class="row top30">
    </div>

</body>
</html>