<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
     <?php require("partials/header.php"); ?>
    </head>
    <body>

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

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script src="js/main.js"></script>
    </body>
</html>
