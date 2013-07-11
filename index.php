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
                <textarea required id="hotspot-form-description" name="hotspot-form-description" placeholder="Lorem Ipsum dolor sit amet"></textarea>
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

            <div id="navigation" class="green-box">
                <div id="navigation-anchor-up" class="navigation-anchor"></div>

                    <ul id="navigation-stops">
                        <li><a href= "#Bujumbura" data-menu-top="0"> Bujumbura </a></li>
                        <li><a href= "#Rumonge" data-menu-top="1590"> Rumonge </a></li>
                        <li><a href= "#Kigoma" data-menu-top="3608"> Kigoma </a></li>
                        <li><a href= "#Kirando" data-menu-top="5108"> Kirando </a></li>
                        <li><a href= "#Sigunda" data-menu-top="6576"> Sigunda </a></li>
                        <li><a href= "#Halembe" data-menu-top="6576"> Halembe </a></li>
                        <li><a href= "#Mugambo" data-menu-top="8076"> Mugambo </a></li>
                        <li><a href= "#Kibwesa" data-menu-top="9612"> Kibwesa </a></li>
                        <li><a href= "#Kalya" data-menu-top="9612"> Kalya </a></li>
                        <li><a href= "#Ikola" data-menu-top="11148"> Ikola </a></li>
                        <li><a href= "#Karema" data-menu-top="11148"> Karema </a></li>
                        <li><a href= "#Kabwe" data-menu-top="12830"> Kabwe </a></li>
                        <li><a href= "#Kirando2" data-menu-top="14398"> Kirando </a></li>
                        <li><a href= "#Kipili" data-menu-top="14398"> Kipili </a></li>
                        <li><a href= "#Ninde" data-menu-top="15934"> Ninde </a></li>
                        <li><a href= "#Msamba" data-menu-top="15934"> Msamba </a></li>
                        <li><a href= "#Wanpembe" data-menu-top="15934"> Wanpembe </a></li>
                        <li><a href= "#Kala" data-menu-top="17616"> Kala </a></li>
                        <li><a href= "#Kasanga" data-menu-top="19298"> Kasanga </a></li>
                        <li><a href= "#Mpulungu" data-menu-top="20834"> Mpulungu </a></li>
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
                <div id="ape-1_1" class="doodads">
                    <img src="img/ape1_right.png" class="apes">
                </div>
                <div id="ape-1_2" class="doodads">
                    <img src="img/ape1_right.png" class="apes">
                </div>
                <div id="ape-1_3" class="doodads">
                    <img src="img/ape2_right.png" class="apes other-direction">
                </div>                                            
            </div>

            <div id="split-1" class="split"></div>
            
            <div id="map-2" class="map">
                <div id="ship-2" class="ships">
                    <img src="img/ship.png" class="ship-small">
                </div>
                <div id="ape-2_1" class="doodads">
                    <img src="img/ape2_right.png" class="apes">
                </div>  
                <div id="ape-2_2" class="doodads">
                    <img src="img/ape1_right.png" class="apes other-direction">
                </div>
                <div id="lion-2_1" class="doodads">
                    <img src="img/lion_right.png" class="lions">
                </div>
                <div id="antilope-2_1" class="doodads">
                    <img src="img/antilope_right.png" class="antilope">
                </div>
                <div id="antilope-2_2" class="doodads">
                    <img src="img/antilope_right.png" class="antilope">
                </div>
                <div id="antilope-2_3" class="doodads">
                    <img src="img/antilope_right.png" class="antilope other-direction">
                </div>                                                               
                    <img id="cloud-2_1" class="clouds doodads" src="img/Wolke_1.png">
                    <img id="cloud-2_2" class="clouds doodads" src="img/Wolke_2.png">
                    <img id="cloud-2_3" class="clouds doodads" src="img/Wolke_3.png">
                    <img id="cloud-2_4" class="clouds doodads" src="img/Wolke_4.png">
            </div>
            
            <div id="split-2" class="split"></div>

            <div id="map-3" class="map">
                <div id="ship-3" class="ships">
                    <img src="img/ship.png" class="ship-big">               
                </div>                
            </div>
            
            <div id="split-3" class="split"></div>

            <div id="map-4" class="map">
                <div id="ship-4" class="ships">
                    <img src="img/ship.png" class="ship-small">
                </div>
                <div id="ape-4_1" class="doodads">
                    <img src="img/ape1_right.png" class="apes other-direction">
                </div>  
                <div id="ape-4_2" class="doodads">
                    <img src="img/ape2_right.png" class="apes">
                </div>
                <img id="cloud-4_1" class="clouds doodads" src="img/Wolke_4.png">
            </div>
            
            <div id="split-4" class="split"></div>

            <div id="map-5" class="map">
                <div id="ship-5" class="ships">
                    <img src="img/ship.png" class="ship-big">
                </div>                    
            </div>
             
            <div id="split-5" class="split"></div>

            <div id="map-6" class="map">
                <div id="ship-6" class="ships">
                    <img src="img/ship.png" class="ship-small">
                </div>
                <div id="ape-6_1" class="doodads">
                    <img src="img/ape1_right.png" class="apes">
                </div>  
                <div id="ape-6_2" class="doodads">
                    <img src="img/ape2_right.png" class="apes other-direction">
                </div> 
                <div id="ape-6_3" class="doodads">
                    <img src="img/ape1_right.png" class="apes">
                </div>  
                <div id="ape-6_4" class="doodads">
                    <img src="img/ape1_right.png" class="apes other-direction">
                </div> 
                <img id="cloud-6_1" class="clouds doodads" src="img/Wolke_4.png">
                <img id="cloud-6_2" class="clouds doodads" src="img/Wolke_2.png">
            </div>
            
            <div id="split-6" class="split"></div>

            <div id="map-7" class="map">
                <div id="ship-7" class="ships">
                    <img src="img/ship.png" class="ship-big">
                </div>
                <div id="elefant-7_1" class="doodads">
                    <img src="img/elefant_right.png" class="elefants other-direction">
                </div>  
                <div id="elefant-7_2" class="doodads">
                    <img src="img/elefant_right.png" class="elefants other-direction">
                </div>                                  
                <img id="boat-7_1" class="boats doodads" src="img/boat.png">
            </div>
            
            <div id="split-7" class="split"></div>

            <div id="map-8" class="map">
                <div id="ship-8" class="ships">
                    <img src="img/ship.png" class="ship-small">
                </div>
                <div id="ape-8_1" class="doodads">
                    <img src="img/ape1_right.png" class="apes">
                </div>  
                <div id="ape-8_2" class="doodads">
                    <img src="img/ape2_right.png" class="apes other-direction">
                </div> 
                <div id="ape-8_3" class="doodads">
                    <img src="img/ape1_right.png" class="apes">
                </div>  
                <div id="ape-8_4" class="doodads">
                    <img src="img/ape1_right.png" class="apes other-direction">
                </div>
                <img id="cloud-8_1" class="clouds doodads" src="img/Wolke_1.png">
                <img id="cloud-8_2" class="clouds doodads" src="img/Wolke_3.png">                                               
            </div>
            
            <div id="split-8" class="split"></div>

            <div id="map-9" class="map">
                <div id="ship-9" class="ships">
                    <img src="img/ship.png" class="ship-big">
                </div>
                <img id="boat-9_1" class="boats doodads" src="img/boat.png">
                <img id="boat-9_2" class="boats doodads" src="img/boat.png">               
            </div>            
            
            <div id="split-9" class="split"></div>

            <div id="map-10" class="map">
                <div id="ship-10" class="ships">
                    <img src="img/ship.png" class="ship-small">
                </div>
                <div id="ape-10_1" class="doodads">
                    <img src="img/ape1_right.png" class="apes">
                </div>  
                <div id="ape-10_2" class="doodads">
                    <img src="img/ape2_right.png" class="apes other-direction">
                </div> 
                <div id="ape-10_3" class="doodads">
                    <img src="img/ape1_right.png" class="apes">
                </div>  
                <div id="ape-10_4" class="doodads">
                    <img src="img/ape1_right.png" class="apes other-direction">
                </div>
                <div id="ape-10_5" class="doodads">
                    <img src="img/ape1_right.png" class="apes">
                </div>  
                <div id="ape-10_6" class="doodads">
                    <img src="img/ape1_right.png" class="apes other-direction">
                </div>
                <img id="cloud-10_1" class="clouds doodads" src="img/Wolke_2.png">
            </div>
            
            <div id="split-10" class="split"></div>

            <div id="map-11" class="map">
                <div id="ship-11" class="ships">
                    <img src="img/ship.png" class="ship-big">
                </div>
                <div id="lion-11_1" class="doodads">
                    <img src="img/lion_right.png" class="lions other-direction">
                </div>
                <div id="lion-11_2" class="doodads">
                    <img src="img/lion_right.png" class="lions other-direction">
                </div>                
                <div id="antilope-11_1" class="doodads">
                    <img src="img/antilope_right.png" class="antilope other-direction">
                </div>
                <div id="antilope-11_2" class="doodads">
                    <img src="img/antilope_right.png" class="antilope other-direction">
                </div>
                <div id="antilope-11_3" class="doodads">
                    <img src="img/antilope_right.png" class="antilope other-direction">
                </div>
                <div id="antilope-11_4" class="doodads">
                    <img src="img/antilope_right.png" class="antilope other-direction">
                </div>                                   
            </div>
            
            <div id="split-11" class="split"></div>

            <div id="map-12" class="map">
                <div id="ship-12" class="ships">
                    <img src="img/ship.png" class="ship-small">
                </div>
                <div id="ape-12_1" class="doodads">
                    <img src="img/ape1_right.png" class="apes">
                </div>  
                <div id="ape-12_2" class="doodads">
                    <img src="img/ape2_right.png" class="apes other-direction">
                </div>
                <img id="cloud-12_1" class="clouds doodads" src="img/Wolke_2.png">
                <img id="cloud-12_2" class="clouds doodads" src="img/Wolke_1.png">
                <img id="cloud-12_3" class="clouds doodads" src="img/Wolke_4.png">                 
            </div>
            
            <div id="split-12" class="split"></div>

            <div id="map-13" class="map">
                <div id="ship-13" class="ships">
                    <img src="img/ship.png" class="ship-big">
                </div>
                <div id="ape-13_1" class="doodads">
                    <img src="img/ape1_right.png" class="apes">
                </div>  
                <div id="ape-13_2" class="doodads">
                    <img src="img/ape2_right.png" class="apes other-direction">
                </div>
                <img id="boat-13_1" class="boats doodads" src="img/boat.png">                                
            </div>
            
            <div id="split-13" class="split"></div>

            <div id="map-14" class="map">
                <div id="ship-14" class="ships">
                    <img src="img/ship.png" class="ship-small">
                </div>
                <img id="cloud-14_1" class="clouds doodads" src="img/Wolke_1.png">
                <img id="cloud-14_2" class="clouds doodads" src="img/Wolke_4.png">                                      
            </div>
            
            <div id="split-14" class="split"></div>

            <div id="map-15" class="map">
                <div id="ship-15" class="ships">
                    <img src="img/ship.png" class="ship-big">
                </div>
                <div id="ape-15_1" class="doodads">
                    <img src="img/ape2_right.png" class="apes">
                </div>
                <div id="ape-15_2" class="doodads">
                    <img src="img/ape1_right.png" class="apes">
                </div>                    
                <div id="ape-15_3" class="doodads">
                    <img src="img/ape1_right.png" class="apes other-direction">
                </div>
                <img id="boat-15_1" class="boats doodads" src="img/boat.png"> 
                <img id="boat-15_2" class="boats doodads" src="img/boat.png">                           
            </div>
            
            <div id="split-15" class="split"></div>

            <div id="map-16" class="map">
                <div id="ship-16" class="ships">
                    <img src="img/ship.png" class="ship-small">
                </div>
                <div id="ape-16_1" class="doodads">
                    <img src="img/ape2_right.png" class="apes">
                </div>
                <div id="ape-16_2" class="doodads">
                    <img src="img/ape1_right.png" class="apes">
                </div>                    
                <div id="ape-16_3" class="doodads">
                    <img src="img/ape1_right.png" class="apes other-direction">                    
                </div>
                <img id="cloud-16_1" class="clouds doodads" src="img/Wolke_4.png">
                <img id="cloud-16_2" class="clouds doodads" src="img/Wolke_3.png">
            </div>  
            
            <div id="split-16" class="split"></div>

            <div id="map-17" class="map">
                <div id="ship-17" class="ships">
                    <img src="img/ship.png" class="ship-big">
                </div>                
            </div>  
            
            <div id="split-17" class="split"></div>

            <div id="map-18" class="map">
                <div id="ship-18" class="ships">
                    <img src="img/ship.png" class="ship-small">
                </div>
                <div id="ape-18_1" class="doodads">
                    <img src="img/ape2_right.png" class="apes">
                </div>
                <div id="ape-18_2" class="doodads">
                    <img src="img/ape1_right.png" class="apes">
                </div>                    
                <div id="ape-18_3" class="doodads">
                    <img src="img/ape1_right.png" class="apes other-direction">
                </div>
                <img id="cloud-18_1" class="clouds doodads" src="img/Wolke_3.png">
                <img id="cloud-18_2" class="clouds doodads" src="img/Wolke_1.png">                                             
                <img id="cloud-18_3" class="clouds doodads" src="img/Wolke_4.png"> 
            </div>  
            
            <div id="split-18" class="split"></div>

            <div id="map-19" class="map">
                <div id="ship-19" class="ships">
                    <img src="img/ship.png" class="ship-big">
                </div>
                <img id="boat-19_1" class="boats doodads" src="img/boat.png">  
            </div>  
            
            <div id="split-19" class="split"></div>

            <div id="map-20" class="map">
                <div id="ship-20" class="ships">
                    <img src="img/ship.png" class="ship-small">
                </div>
                <div id="ape-20_1" class="doodads">
                    <img src="img/ape2_right.png" class="apes">
                </div>
                <div id="ape-20_2" class="doodads">
                    <img src="img/ape1_right.png" class="apes">
                </div>                    
                <div id="ape-20_3" class="doodads">
                    <img src="img/ape1_right.png" class="apes other-direction">
                </div>
                <img id="cloud-20_1" class="clouds doodads" src="img/Wolke_3.png">
                <img id="cloud-20_2" class="clouds doodads" src="img/Wolke_1.png">                                             
                <img id="cloud-20_3" class="clouds doodads" src="img/Wolke_4.png">                                  
            </div>  
            
            <div id="split-20" class="split"></div>

            <div id="map-21" class="map">
                <div id="ship-21" class="ships">
                    <img src="img/ship.png" class="ship-big">
                </div>
                <img id="boat-21_1" class="boats doodads" src="img/boat.png">
                <img id="boat-21_2" class="boats doodads" src="img/boat.png">
                <img id="boat-21_3" class="boats doodads" src="img/boat.png">               
            </div>                          
            
            <div id="split-21" class="split"></div>

            <div id="map-22" class="map">
                <div id="ship-22" class="ships">
                    <img src="img/ship.png" class="ship-small">
                </div>
                <img id="cloud-22_1" class="clouds doodads" src="img/Wolke_1.png">
                <img id="cloud-22_2" class="clouds doodads" src="img/Wolke_4.png">
                <img id="cloud-22_3" class="clouds doodads" src="img/Wolke_2.png">                                   
            </div>   
            
            <div id="split-22" class="split"></div>

            <div id="map-23" class="map">
                <div id="ship-23" class="ships">
                    <img src="img/ship.png" class="ship-big">
                </div>
                <div id="ape-23_1" class="doodads">
                    <img src="img/ape2_right.png" class="apes">
                </div>
                <div id="ape-23_2" class="doodads">
                    <img src="img/ape1_right.png" class="apes other-direction">
                </div>
                <div id="elefant-23_1" class="doodads">
                    <img src="img/elefant_right.png" class="elefants other-direction">
                </div>  
                <div id="elefant-23_2" class="doodads">
                    <img src="img/elefant_right.png" class="elefants other-direction">
                </div>
                <div id="elefant-23_3" class="doodads">
                    <img src="img/elefant_right.png" class="elefants other-direction">
                </div>    
                <div id="elefant-23_4" class="doodads">
                    <img src="img/elefant_right.png" class="elefants other-direction">
                </div>
                <div id="elefant-23_5" class="doodads">
                    <img src="img/elefant_right.png" class="elefants other-direction">
                </div>                                                      
            </div>   
            
            <div id="split-23" class="split"></div>

            <div id="map-24" class="map">
                <div id="ship-24" class="ships">
                    <img src="img/ship.png" class="ship-small">
                </div>
                <img id="cloud-24_1" class="clouds doodads" src="img/Wolke_1.png">
                <img id="cloud-24_2" class="clouds doodads" src="img/Wolke_4.png">
                <img id="cloud-24_3" class="clouds doodads" src="img/Wolke_2.png">                                    
            </div>     
            
            <div id="split-24" class="split"></div>

            <div id="map-25" class="map">
                <div id="ship-25" class="ships">
                    <img src="img/ship.png" class="ship-big">
                </div>                    
            </div>   
            
            <div id="split-25" class="split"></div>

            <div id="map-26" class="map">
                <div id="ship-26" class="ships">
                    <img src="img/ship.png" class="ship-small">
                </div>
                <img id="cloud-26_1" class="clouds doodads" src="img/Wolke_4.png">
                <img id="cloud-26_2" class="clouds doodads" src="img/Wolke_2.png">                                     
            </div>   
            
            <div id="split-26" class="split"></div>

            <div id="map-27" class="map">
                <div id="ship-27" class="ships">
                    <img src="img/ship.png" class="ship-big">
                </div> 
                <div id="ape-27_1" class="doodads">
                    <img src="img/ape2_right.png" class="apes">
                </div>
                <div id="ape-27_2" class="doodads">
                    <img src="img/ape1_right.png" class="apes other-direction">
                </div>                                 
            </div>                                                                                                                           
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
