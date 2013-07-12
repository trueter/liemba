<?php $admin = true; ?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<?php require("partials/header.php"); ?>     

</head>
<body class="preload">

    <div id="offsetHelper">0</div>
    
    <div id="hotspot-confirm-dialog" class="green-box">
        <button id="hotspot-confirm-dialog-create">Hotspot erstellen</button>
        <button id="hotspot-confirm-dialog-cancel">Abbrechen</button>
    </div>

    <div id="hotspot-prepare-dialog" class="green-box">
        <div id="hotspot-prepare-dialog-close">x</div>
        <form id="hotspot-form" data-hotspot-id="new"  action="#">
            <label for="hotspot-form-name">Name</label>
            <input value="" placeholder="Name" id="hotspot-form-name" name="hotspot-form-name" type="text" required>
            <label for="description">Beschreibung</label>
            <textarea required id="hotspot-form-description" name="hotspot-form-description" placeholder="Beschreibung"></textarea>
            <select required id="hotspot-form-category" name="hotspot-form-category">
                <option value="" disabled selected>Kategorie wählen</option>
                <option value="stops">Liemba Anlegestelle</option>
                <option value="activities">Aktivität</option>
                <option value="airports">Flughafen</option>
                <option value="histories">Geschichte</option>
                <option value="transports">Verkehr</option>
                <option value="sightseeings">Sehenswürdigkeit</option>
                <option value="hotels">Hotel</option>
            </select>
            <input id="hotspot-form-special_icon_path" name="hotspot-form-special_icon_path" value="" type="hidden">
            <input id="hotspot-form-x" name="hotspot-form-x" type="hidden">
            <input id="hotspot-form-y" name="hotspot-form-y" type="hidden">
            <input id="hotspot-form-map" name="hotspot-form-map" type="hidden">
            <input id="hotspot-form-submit" type="submit" value="Hotspot erstellen">
        </form>
    </div>

    <div id="page-wrapper">
        <div id="map-wrapper">
            <div id="categories" class="green-box">
                <ul id="category-selection">
                    <li data-category="stops">Anlegestellen</li>
                    <li data-category="activities">Aktivitäten</li>
                    <li data-category="airports">Flughäfen</li>
                    <li data-category="histories">Geschichte</li>
                    <li data-category="transports">Verkehr</li>
                    <li data-category="sightseeings">Tourismus</li>
                    <li data-category="hotels">Hotels</li>
                </ul>
            </div>

            <div id="navigation" class="green-box">
                <ul id="navigation-stops">
                    <li><a href="#Bujumbura" data-menu-top="0">Bujumbura</a></li>
                    <li><a href="#Rumonge" data-menu-top="1590">Rumonge</a></li>
                    <li><a href="#Kigoma" data-menu-top="3608">Kigoma</a></li>
                    <li><a href="#Kirando" data-menu-top="5108">Kirando</a></li>
                    <li><a href="#Sigunda" data-menu-top="6576">Sigunda</a></li>
                    <li><a href="#Halembe" data-menu-top="6576">Halembe</a></li>
                    <li><a href="#Mugambo" data-menu-top="8076">Mugambo</a></li>
                    <li><a href="#Kibwesa" data-menu-top="9612">Kibwesa</a></li>
                    <li><a href="#Kalya" data-menu-top="9612">Kalya</a></li>
                    <li><a href="#Ikola" data-menu-top="11148">Ikola</a></li>
                    <li><a href="#Karema" data-menu-top="11148">Karema</a></li>
                    <li><a href="#Kabwe" data-menu-top="12830">Kabwe</a></li>
                    <li><a href="#Kirando" data-menu-top="14398">Kirando</a></li>
                    <li><a href="#Kipili" data-menu-top="14398">Kipili</a></li>
                    <li><a href="#Ninde" data-menu-top="15934">Ninde</a></li>
                    <li><a href="#Msamba" data-menu-top="15934">Msamba</a></li>
                    <li><a href="#Wanpembe" data-menu-top="15934">Wanpembe</a></li>
                    <li><a href="#Kala" data-menu-top="17616">Kala</a></li>
                    <li><a href="#Kasanga" data-menu-top="19298">Kasanga</a></li>
                    <li><a href="#Mpulungu" data-menu-top="20834">Mpulungu</a></li>
                </ul>
            </div>

            <div id="minimap">
                <div id="current-location"></div>
            </div>
            <?php require("partials/maps.php"); ?>                                                                                                                                          
        </div>
        <?php require("partials/footer.php"); ?>  
    </div>

    <script id="hotspot-template" type="text/x-handlebars-template">
        <div id="hotspot-{{id}}" data-id="{{id}}" data-name="{{name}}" data-description="{{description}}" data-category="{{category}}" data-x="{{x}}" data-y="{{y}}" data-map="{{map}}" data-special_icon_path="{{special_icon_path}}" class="hotspots {{category}}" style="bottom:{{bottom}}px;right:{{right}}px;">
            <h1>{{name}}</h1>
            <p>{{description}}</p>
            <div class="hotspot-arrows"></div>
            <div class="hotspot-edit" data-id="{{id}}">
            </div>
            <div class="hotspot-destroy" data-id="{{id}}"></div>
        </div>
    </script>
</body>
</html>
