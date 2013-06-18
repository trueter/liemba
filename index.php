<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    <?php require("partials/header.php"); ?>     
    
    </head>
    <body class="preload">
    
        <div id="offsetHelper">0</div>
        <div id="page-wrapper">
        <div id="map-wrapper">

            <div id="hotspot-prepare-dialog">
                <div id="hotspot-prepare-dialog-close">x</div>
                <form id="add-hotspot-form" action="#"><fieldset>
                    <label for="name">Name</label>
                    <input value="A" name="name" type="text" required>
                    <label for="description">Beschreibung</label>
                    <input value="Lorem Ipsum dolor sit amet" name="description" type="text" required>
                    <label for="xOff">xOff</label>
                    <input id="xOff" value="1" name="xOff" type="number" required>
                    <label for="yOff">yOff</label>
                    <input id="yOff" value="2" name="yOff" type="number" required>
                    <label for="category">yOff</label>
                    <select name="category">
                        <option value="airports">Flughäfen</option>
                    </select>
                    <input type="submit" value="create hotspot">
                </fieldset></form>
            </div>

            <div id="navigation">
                <div id="navigation-anchor-up" class="navigation-anchor"></div>

                    <ul id="navigation-stops">
                        <li>Stop 1</li>
                        <li>Stop 2</li>
                        <li>Stop 3</li>
                        <li>Stop 4</li>
                        <li>Stop 5</li>
                        <li>Stop 6</li>
                        <li>Stop 7</li>
                        <li>Stop 8</li>
                        <li>Stop 9</li>
                        <li>Stop 10</li>
                        <li>Stop 11</li>
                        <li>Stop 12</li>
                        <li>Stop 13</li>
                        <li>Stop 14</li>
                        <li>Stop 15</li>
                        <li>Stop 16</li>
                    </ul>

                <div id="navigation-anchor-down" class="navigation-anchor"></div>

                <ul id="category-selection">
                    <li data-category="airports">
                        <img src="img/category_icons/plane.png" style="left: -2px;top: 1px;">
                    </li>
                    <li data-category="" class="nyi">
                        <img src="img/category_icons/house.png" style="left: 1px;top: 0px;">
                    </li>
                    <li data-category="" class="nyi">
                        <img src="img/category_icons/flower.png" style="left: -3px;top: -2px;">
                    </li>
                    <li data-category="" class="nyi">
                        <img src="img/category_icons/train.png" style="left: -1px;top: 0px;">
                    </li>
                    <li data-category="" class="nyi">
                        <img src="img/category_icons/money.png" style="left: 3px;top: -1px;">
                    </li>
                    <li data-category="" class="nyi">
                        <!--<img src="img/category_icons/">-->
                    </li>
                </ul>
            </div>

            <div id="minimap">
                <div id="current-location"></div>
            </div>

            <div id="map-1" class="map">
                <div id="ship-1" class="ships">
                    <img src="img/ship.png" class="ship-big">
                </div>

                <div class="hotspots airports" style="bottom:450px;right: 300px;">
                    <h1>Kigoma Airport</h1>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                    <div class="hotspot-arrows"></div>
                </div>

            </div>
            
            <div id="map-2" class="map">
                <div id="ship-2" class="ships">
                    <img src="img/ship.png" class="ship-small">
                </div>
            </div>
            
            <div id="map-3" class="map">
                <div id="ship-3" class="ships"></div>
            </div>

            <div id="hotspot-confirm-dialog">
                <button id="hotspot-confirm-dialog-create">Hotspot erstellen</button>
                <button id="hotspot-confirm-dialog-cancel">Abbrechen</button>
            </div>

            <div id="hotspot-create-anchor" class="hotspots new-hotspot"></div>
            </div>
        </div>

        <div id="split-1" class="split"><h1>Split #1</h1></div>
        <div id="split-2" class="split"><h1>Split #2</h1></div>
        <div id="split-3" class="split"><h1>Split #3</h1></div>

        <h1 style="text-align:center; margin-top: 400px">Ende</h1>      

        <?php require("partials/footer.php"); ?>  

    </body>
</html>
