<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
     <!--<?php require("partials/header.php"); ?> -->
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Interaktive Karte</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/skrollr-fixed-setup.css" rel="stylesheet" type="text/css">
    <link href="css/skrollr-keyframes.css" rel="stylesheet" type="text/css" data-skrollr-stylesheet>
    <link href="css/main_skrollr.less" rel="stylesheet/less" type="text/css" data-skrollr-stylesheet>    

    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <div id="offsetHelper" class="always-on-top">0</div>
        <div id="map_bg_wrapper">
            <img id="map_bg_img" src="img/background_1400.jpg">
        </div>
        <div id="ship_bg_img"></div>
        <!--
        <div id="restdummy">
            <div id="map-wrapper">
                <img id="#map-image" src="img/map1.jpg">
            </div>
            <div id="add-hotspot-dummy">
                <form id="add-hotspot-form" action="#">
                    <fieldset>
                        <label>Name</label>
                        <input value="A" name="name" type="text" required>
                        <label>xOff</label>
                        <input value="1" name="xOff" type="number" required>
                        <label>yOff</label>
                        <input value="2" name="yOff" type="number" required>
                    </fieldset>
                    <input type="submit" value="create hotspot">
                </form>
            </div>
        </div>
        -->

        <script type="text/javascript" src="js/vendor/less-1.3.3.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script type="text/javascript" src="js/vendor/skrollr.stylesheets.js"></script>
        <script type="text/javascript" src="js/vendor/skrollr.min.js"></script>
        <script type="text/javascript" src="js/vendor/skrollr.menu.js"></script>
        <script type="text/javascript" src="js/vendor/prefixfree.min.js"></script>
        <script type="text/javascript" src="js/main_skrollr.js"></script>
        <script type="text/javascript" src="js/main_manageHotspots.js"></script>

    </body>
</html>
