<?php
header("Content-Type: text/css");
header("X-Content-Type-Options: nosniff");

function offsetTo($currentStory){
    return ($currentStory-1)*1000;
}


## Story 1

$currentStory = 1; 
$start = offsetTo($currentStory);
$end = offsetTo($currentStory+1);
?>

#ship-wrapper{ -skrollr-animation-name : ship-wrapper; }
@-skrollr-keyframes ship-wrapper {
    <?=($start+100); ?> { left: 10%; }
    <?=($end-100);   ?> { left: 80%; }
}

#name1{ -skrollr-animation-name : name1; }
@-skrollr-keyframes name1 {
    <?=($start+100); ?> { top:10%; }
    <?=($end-100);   ?> { top: 80%; }
}

#name2{ -skrollr-animation-name : name2; }
@-skrollr-keyframes name2 {
    <?=($start+100); ?> { right:10%; }
    <?=($end-100);   ?> { right: 80%; }
}

#name3{ -skrollr-animation-name : name3; }
@-skrollr-keyframes name3 {
    <?=($start+100); ?> { bottom:10%; }
    <?=($end-100);   ?> { bottom: 80%; }
}

#erstePlaene{ -skrollr-animation-name : erstePlaene; }
@-skrollr-keyframes erstePlaene {
    <?=($start+100); ?> { bottom:10%; }
    <?=($end-100);   ?> { bottom: 80%; }
}

<?php
## Story 2

$currentStory = 2; 
$start = offsetTo($currentStory);
$end = offsetTo($currentStory+1);
?>


<?php
## Story 3

$currentStory = 3; 
$start = offsetTo($currentStory);
$end = offsetTo($currentStory+1);
?>


#construction-wrapper_3{ -skrollr-animation-name : construction-wrapper_3; }
@-skrollr-keyframes construction-wrapper_3 {
    <?=($start+100); ?> { width: 1300px; height: 900px; margin-top: -450px; margin-left: -650px;}
    <?=($end-100);   ?> { width: 650px; height: 450px; margin-top: -225px; margin-left: -325px;}
}

<?php
## Story 4

$currentStory = 4; 
$start = offsetTo($currentStory);
$end = offsetTo($currentStory+1);
?>

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




