<?php
header("Content-Type: text/css");
header("X-Content-Type-Options: nosniff");

function offsetTo($currentStory){
    return ($currentStory) * 1000 ;
}


## Story 1

$currentStory = 1; 
$middle = offsetTo($currentStory);
?>

#ship-wrapper{ -skrollr-animation-name : ship-wrapper; }
@-skrollr-keyframes ship-wrapper {
    <?=($middle-500); ?> { left: 60%; }
    <?=($middle);   ?> { left: 15%; }
    <?=($middle+100);   ?> { left: 20%; }
    <?=($middle+200);   ?> { left: 15%; }
    <?=($middle+300);   ?> { left: 20%; }
}

#name1{ -skrollr-animation-name : name1; }
@-skrollr-keyframes name1 {
    <?=($start); ?> { top:10%; }
    <?=($middle);   ?> { top: 80%; }
}

#name2{ -skrollr-animation-name : name2; }
@-skrollr-keyframes name2 {
    <?=($start); ?> { right:10%; }
    <?=($middle);   ?> { right: 80%; }
}

#name3{ -skrollr-animation-name : name3; }
@-skrollr-keyframes name3 {
    <?=($start); ?> { bottom:10%; }
    <?=($middle);   ?> { bottom: 80%; }
}

#erstePlaene{ -skrollr-animation-name : erstePlaene; }
@-skrollr-keyframes erstePlaene {
    <?=($start); ?> { bottom:10%; }
    <?=($middle);   ?> { bottom: 80%; }
}

<?php
## Story 2

$currentStory = 2; 
$middle = offsetTo($currentStory);
?>

#loesung1{ -skrollr-animation-name : loesung1; }
@-skrollr-keyframes loesung1 {
    <?=($middle-500); ?> { transform: translateX( -50%);}
    <?=($middle-200);   ?> { transform: translateX(  0%);}

}
#loesung2{ -skrollr-animation-name : loesung2; }
@-skrollr-keyframes loesung2 {
    <?=($middle); ?> { opacity: 0;transform: translateX( +50%);}
    <?=($middle+200);   ?> { opacity: 1;transform: translateX(  0%);}

}

<?php
## Story 3

$currentStory = 3; 
$middle = offsetTo($currentStory);

?>

#banner-wrapper_3{ -skrollr-animation-name : banner-wrapper_3; }
@-skrollr-keyframes banner-wrapper_3 {
    <?=($midde-500); ?> { transform: translateY( 50%);}
    <?=($middle+500);   ?> { transform: translateY(  0%);}

}

#construction-wrapper_3{ -skrollr-animation-name : construction-wrapper_3; }
@-skrollr-keyframes construction-wrapper_3 {
    <?=($middle-400); ?> { width: 1300px; height: 900px; margin-top: -450px; margin-left: -650px;}
    <?=($middle);   ?> { width: 650px; height: 450px; margin-top: -225px; margin-left: -325px;}
}

<?php
## Story 4

$currentStory = 4; 
$middle = offsetTo($currentStory);
?>

#bahn_4{ -skrollr-animation-name : bahn_4; }
@-skrollr-keyframes bahn_4 {
    <?=($middle-400); ?> { transform: translateX( -100%);}
    <?=($middle-200);   ?> { transform: translateX( 0%);}
}

#menschen_4{ -skrollr-animation-name : menschen_4; }
@-skrollr-keyframes menschen_4 {
    <?=($middle-200); ?> { transform: translateX( -10%)  translateY( -100%);}
    <?=($middle+100);   ?> { transform: translateX( 0%) translateY( 0%);}
}
#transport_4{ -skrollr-animation-name : transport_4; }
@-skrollr-keyframes transport_4 {
    <?=($middle-500); ?> { transform: translateX( -10%)  translateY( -10%);}
    <?=($middle+500);   ?> { transform: translateX( +10%) translateY( +10%);}
}

#text_4{ -skrollr-animation-name : text_4; }
@-skrollr-keyframes text_4 {
    <?=($middle-500); ?> { transform: translateX( +50%);}
    <?=($middle+500);   ?> { transform: translateX( 0%);}
}

#text1_4{ -skrollr-animation-name : text1_4; }
@-skrollr-keyframes text1_4 {
    <?=($middle-500); ?> { transform: translateX( -50%);}
    <?=($middle+500);   ?> { transform: translateX( 0%);}
}


<?php
## Story 5

$currentStory = 5; 
$middle = offsetTo($currentStory);
?>

#telegramm_5{ -skrollr-animation-name : telegramm_5; }
@-skrollr-keyframes telegramm_5 {
    <?=($middle); ?> { transform: translateX( +10%);}
    <?=($middle+200);   ?> { transform: translateX( -10%);}
}
#text_5{ -skrollr-animation-name : text_5; }
@-skrollr-keyframes text_5 {
    <?=($middle); ?> { transform: translateY( 0%);}
    <?=($middle+200);   ?> { transform: translateY( -20%);}
}

#text1_5{ -skrollr-animation-name : text1_5; }
@-skrollr-keyframes text1_5 {
    <?=($middle-200); ?> { transform: translateX( 0%);}
    <?=($middle+200);   ?> { transform: translateX( +20%);}
}

#kiste_5{ -skrollr-animation-name : kiste_5; }
@-skrollr-keyframes kiste_5 {
    <?=($middle-100); ?> { transform: translateY( +50%);}
    <?=($middle+300);   ?> { transform: translateY( -50%);}
}
#fragezeichen_5{ -skrollr-animation-name : fragezeichen_5; }
@-skrollr-keyframes fragezeichen_5 {
    <?=($middle-100); ?> { transform: translateY( +50%);}
    <?=($middle+300);   ?> { transform: translateY( -50%);}
}

<?php
## Story 6

$currentStory = 6; 
$middle = offsetTo($currentStory);
?>

#ship-wrapper_6{ -skrollr-animation-name : ship-wrapper_6; }
@-skrollr-keyframes ship-wrapper_6 {
    <?=($middle-400); ?> { transform: translateX( +50%);}
    <?=($middle+400);   ?> { transform: translateX( -200%);}
}

<?php
## Story 7

$currentStory = 7; 
$middle = offsetTo($currentStory);
?>

#kanone_7{ -skrollr-animation-name : kanone_7; }
@-skrollr-keyframes kanone_7 {
    <?=($middle-400); ?> { transform: translateX( -40%);}
    <?=($middle);   ?> { transform: translateX( 0%);}
}
#kugel_7{ -skrollr-animation-name : kugel_7; }
@-skrollr-keyframes kugel_7 {
    <?=($middle -1); ?> { transform: translateX( 0%); display: none;}
    <?=($middle); ?> { transform: translateX( 0%); display: block;}
    <?=($middle+400);   ?> { transform: translateX( 5000%); display: block;}
    <?=($middle+401);   ?> { transform: translateX( 5000%); display: none;}
}


<?php
## Story 8

$currentStory = 8; 
$middle = offsetTo($currentStory);
?>

#schiff-wrapper_8{ -skrollr-animation-name : schiff-wrapper_8; }
@-skrollr-keyframes schiff-wrapper_8 {
    <?=($middle-500); ?> { transform: translateX( 0%);}
    <?=($middle+400);   ?> { transform: translateX( +200%);}
}
#bismarckburg_8{ -skrollr-animation-name : bismarckburg_8; }
@-skrollr-keyframes bismarckburg_8 {
    <?=($middle-100); ?> { left: 185px; top: 36px}
    <?=($middle+100);   ?> { left: 250px; top: -20px}
}
#welle_8{ -skrollr-animation-name : welle_8; }
@-skrollr-keyframes welle_8 {
    <?=($middle-300); ?> { right: 0%;}
    <?=($middle);   ?> { right: +50%;}
}

<?php
## Story 9

$currentStory = 9; 
$middle = offsetTo($currentStory);
?>

#schiff-wrapper_9{ -skrollr-animation-name : schiff-wrapper_9; }
@-skrollr-keyframes schiff-wrapper_9 {
    <?=($middle-200); ?> { transform: translateX( 0%);}
    <?=($middle+400);   ?> { transform: translateX( +50%);}
}
#schiff_9{ -skrollr-animation-name : schiff_9; }
@-skrollr-keyframes schiff_9 {
    <?=($middle-200); ?> { transform: translateX( -20%) translateY (0%) rotate(-65deg);}
    <?=($middle+400);   ?> { transform: translateX( +50%) translateY (+30%) rotate(0deg);}
}

#text_9{ -skrollr-animation-name : text_9; }
@-skrollr-keyframes text_9 {
    <?=($middle-200); ?> { transform: translateX( 0%) translateY (0%);}
    <?=($middle);   ?> { transform: translateX( -70%) translateY (+50%);}
}




<?php
## Story 10

$currentStory = 10; 
$middle = offsetTo($currentStory);
?>

#schiff-wrapper_10{ -skrollr-animation-name : schiff-wrapper_10; }
@-skrollr-keyframes schiff-wrapper_10 {
    <?=($middle-400); ?> { transform: translateX( -50%);}
    <?=($middle);   ?> { transform: translateX( 0%);}
    <?=($middle+400);   ?> { transform: translateX( +50%);}
}

#flieger_10{ -skrollr-animation-name : flieger_10; }
@-skrollr-keyframes flieger_10 {
    <?=($middle-400); ?> { right: 0%;}
    <?=($middle);   ?> { right: 50%;}
    <?=($middle+400);   ?> { right:100%;}
}

#explosion_10{ -skrollr-animation-name : explosion_10; }
@-skrollr-keyframes explosion_10 {
    <?=($middle-400); ?> {  opacity: 0;}
    <?=($middle-5); ?> {  opacity: 0;}
    <?=($middle);   ?> {  opacity: 1;}
    <?=($middle+400);   ?> {  opacity: 1;}
}

#kanonen_10{ -skrollr-animation-name : kanonen_10; }
@-skrollr-keyframes kanonen_10 {
    <?=($middle-400); ?> { right: 0%; opacity: 1; transform: translateY( 0%);}
    <?=($middle-1);   ?> { right:50%; opacity: 1; transform: translateY( +80%);}
    <?=($middle);   ?> { right:50%; opacity: 0; transform: translateY( +80%);}
    <?=($middle+400);   ?> { right:100%; opacity: 0; transform: translateY( -80%);}
}

<?php
## Story 13

$currentStory = 13; 
$middle = offsetTo($currentStory);
?>

#flags{ -skrollr-animation-name : flags; }
@-skrollr-keyframes flags {
    <?=($middle-200); ?> { transform: translateY( 0%);}
    <?=($middle+200);   ?> { transform: translateY( +10%);}
}
#wire_13{ -skrollr-animation-name : wire_13; }
@-skrollr-keyframes wire_13 {
    <?=($middle-200); ?> { height: 390px;}
    <?=($middle+200);   ?> { height: 177px;}
}

#ship_pickup_schief{ -skrollr-animation-name : ship_pickup_schief; }
@-skrollr-keyframes ship_pickup_schief{
    <?=($middle-200); ?> { top: 100px;}
    <?=($middle+200);   ?> { top: -100px;}
}


<?php
## Story 18

$currentStory = 18; 
$middle = offsetTo($currentStory);
?>

#idampfmaschine_18{ -skrollr-animation-name : idampfmaschine_18; }
@-skrollr-keyframes idampfmaschine_18 {
    <?=($middle-400); ?> { transform: translateY( -20%); opacity: 0;}
    <?=($middle-300);   ?> { transform: translateY( 0%); opacity: 1;}
    
}

<?php
## Story 19

$currentStory = 19; 
$middle = offsetTo($currentStory);
?>

#iliemba_19{ -skrollr-animation-name : iliemba_19; }
@-skrollr-keyframes iliemba_19 {
    <?=($middle-400); ?> { transform: translateX( +100%);}
    <?=($middle);   ?> { transform: translateX( 0%);}
}


#imenschen_19{ -skrollr-animation-name : imenschen_19; }
@-skrollr-keyframes imenschen_19 {
    <?=($middle); ?> { opacity: 0;}
    <?=($middle+100);   ?> { opacity: 1;}
}
#i75tsd_19{ -skrollr-animation-name : i75tsd_19; }
@-skrollr-keyframes i75tsd_19 {
    <?=($middle); ?> { opacity: 0;}
    <?=($middle+100);   ?> { opacity: 1;}
}
#iheadline_19{ -skrollr-animation-name : iheadline_19; }
@-skrollr-keyframes iheadline_19 {
    <?=($middle); ?> { opacity: 0;}
    <?=($middle+100);   ?> { opacity: 1;}
}

#karte-wrapper_19{ -skrollr-animation-name : karte-wrapper_19; }
@-skrollr-keyframes karte-wrapper_19 {
    <?=($middle-400); ?> { transform: translateX( -50%);}
    <?=($middle);   ?> { transform: translateX( 0%);}
}

<?php
## Story 20

$currentStory = 20; 
$middle = offsetTo($currentStory);
?>

#i100jahre_20{ -skrollr-animation-name : i100jahre_20; }
@-skrollr-keyframes i100jahre_20 {
    <?=($middle-400); ?> { transform: translateY( -50%);}
    <?=($middle);   ?> { transform: translateY( 0%);}
   
}

#iliembaa_20{ -skrollr-animation-name : iliembaa_20; }
@-skrollr-keyframes iliembaa_20 {
    <?=($middle-400); ?> { transform: translateX( +50%);}
    <?=($middle);   ?> { transform: translateX( 0%);}
    
}

#iboot_20{ -skrollr-animation-name : iboot_20; }
@-skrollr-keyframes iboot_20 {
    <?=($middle-400); ?> { transform: translateX( +50%);}
    <?=($middle);   ?> { transform: translateX( 0%);}
    
}

