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
$start = offsetTo($currentStory);
$end = offsetTo($currentStory+1);
?>

<?php
## Story 6

$currentStory = 6; 
$start = offsetTo($currentStory);
$end = offsetTo($currentStory+1);
?>


#ship-wrapper_6{ -skrollr-animation-name : ship-wrapper_6; }
@-skrollr-keyframes ship-wrapper_6 {
    <?=($start+100); ?> { right: 0%;}
    <?=($end-100);   ?> { right: 30%;}
}
<?php
## Story 7

$currentStory = 7; 
$start = offsetTo($currentStory);
$end = offsetTo($currentStory+1);
?>
<?php
## Story 8

$currentStory = 8; 
$start = offsetTo($currentStory);
$end = offsetTo($currentStory+1);
?>

#schiff-wrapper_8{ -skrollr-animation-name : schiff-wrapper_8; }
@-skrollr-keyframes schiff-wrapper_8 {
    <?=($start+100); ?> { left: 0%;}
    <?=($end-100);   ?> { left: 40%;}
}
#bismarckburg_8{ -skrollr-animation-name : bismarckburg_8; }
@-skrollr-keyframes bismarckburg_8 {
    <?=($start+100); ?> { left: 185px; top: 36px}
    <?=($end-100);   ?> { left: 250px; top: -20px}
}
#welle_8{ -skrollr-animation-name : welle_8; }
@-skrollr-keyframes welle_8 {
    <?=($start+100); ?> { right: -50%;}
    <?=($end-100);   ?> { right: 0%;}
}

<?php
## Story 9

$currentStory = 9; 
$start = offsetTo($currentStory);
$end = offsetTo($currentStory+1);
?>

<?php
## Story 10

$currentStory = 10; 
$start = offsetTo($currentStory);
$end = offsetTo($currentStory+1);
?>
<?php
## Story 19

$currentStory = 19; 
$start = offsetTo($currentStory);
$end = offsetTo($currentStory+1);
?>



}



