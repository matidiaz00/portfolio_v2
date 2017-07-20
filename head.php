<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <title>Matidiaz</title>

        <link rel="icon" type="image/png" href="assets/img/favicon.png">

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,800,800italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="assets/css/normalize.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/loaders.min.css">

        <link rel="stylesheet/less" href="assets/css/main.less">

        <script> less = { async: true }; </script>
        <script src="assets/js/less.min.js"></script>
        
        <style>
            body {
                overflow-y: scroll;
            }
            #preloader {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: #6ac882;
                z-index: 99999;
                height: 100%;
            }
            #status {
                position: absolute;
                left: 50%;
                top: 50%;
                width: 64px;
                height: 64px;
                margin: -32px 0 0 -32px;
                padding: 0;
            }
        </style>
    </head>
    <body>
        
        <div id="preloader">
           <div id="status">
              <div class="loader-inner line-scale-pulse-out-rapid">
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
               </div>
           </div>
        </div>