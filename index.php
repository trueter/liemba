<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    <?php require("partials/header.php"); ?>     
    </head>
    <body>
        <div id="offsetHelper">0</div>

        

        <div id="minimap">minimap</div>

        <div id="map-1" class="map-holder">
            <div id="ship-1" class="ships"></div>
        </div>
        
        <div id="split-1" class="split-holder"><h1>Split #1</h1></div>

        <div id="map-2" class="map-holder">
            <div id="ship-2" class="ships"></div>
        </div>
        
        <div id="split-2" class="split-holder"><h1>Split #2</h1></div>
        <h1 style="text-align:center; margin-top: 400px">Ende</h1>
        
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
        <?php require("partials/footer.php"); ?>  

    </body>
</html>
