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
            
            <?php require("partials/boxes.php"); ?>

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
