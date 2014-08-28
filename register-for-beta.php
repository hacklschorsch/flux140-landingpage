<?php
    $fp = fopen('../emails-for-closed-beta.txt', 'a');

    if ($fp == false) {
        header('HTTP/1.1 500 Internal Server Error');
        die("Could not open file for writing.");
    }

    fputcsv($fp, array_values($_POST));
    fclose($fp);

    $to  = 'beta@flux140.de';
    $subject = 'New subscription to Flux140 closed Beta';
    $message = 'Howdy!\r\n' . array_values($_POST) . '\r\n has just joined the Flux140 community!\r\n 
                So long, and thanks for all the fish.';
    $message = wordwrap($message, 70, "\r\n");

    mail($to, $subject, $message);
?>
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Flux140</title></head>
    <style type="text/css">
    <!--
        body {
            font-family: Helvetica, Arial, sans-serif;
            background-color: #EEE;
            background-image: url("img/IMG_20121001_114535_web.jpg");
            background-size: 100% auto;
            background-size: cover;
            background-position: center 30%;
        }
        div.container {
            margin: 8em auto 0 auto;
            padding: 3em;
            width: 50%;
            min-width: 330px;
            max-width: 750px;
            border: 1px solid gray;
            box-shadow: 0px 0px 25px #333;
            background-color: white;
            overflow: hidden;
            text-align: center;
            opacity: 0.9;
        }
        div.impressum {
            margin: 8em auto 0 auto;
            width: 50%;
            font-size: 11px;
            font-color: grey;
        }
        h1 {
            line-height: 1em;
            min-width: 10em;
        }
        a { color: #0072bc; }
        ul { list-style-type: none; }
        li { margin-bottom: 0.5em; }
        #logo {
            margin-bottom: 1em;
            max-width: 100%;
        }
        p { padding: 0 8%; }
        input { width: 60%; }
    -->
    </style>
<body>
    <div class="container">
        <img id="logo" alt="Logo Flux140" src="img/flux140-logo-big.png" />
        <p>
Thanks, you're awesome! You'll hear from us as soon as we have something to show. Yours,
        </p>
        <p>
Karo, Florian and the rest of the gang
        </p>

    </div>
</body>
</html>
