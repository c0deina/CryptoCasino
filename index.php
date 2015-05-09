<?php
include_once(__DIR__ . '\lib\config.php');
include_once(__DIR__ . '\lib\functions.php');
?>
<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>

        <title>Omnichain Casino - Win OMC now!</title>

        <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link href='/css/bootstrap.min.css' rel='stylesheet'>
        <link href='/css/style.css' rel='stylesheet'>
    </head>
    <body>
        <div class='header'>
            <div class='logo-text'>
                Omnichain Casino
            </div>
            <div class='header-account-info'>
                <button type='button' class='btn btn-primary'>Withdraw</button>
                <button type='button' class='btn btn-primary'>Deposit</button>
                <div class='balance balance-update'>
                    Balance: 0.00000000 OMC
                </div>
            </div>
            <br style='clear: both;'>
        </div>

        <div class='playfield'>
            <div class='dealer hand'></div>
            <br style='clear: both;'>
            <div class='player hand'></div>
        </div>

        <script src='/js/jquery.min.js'></script>
        <script src='/js/bootstrap.min.js'></script>
        <script src='/js/script.js'></script>
    </body>
</html>