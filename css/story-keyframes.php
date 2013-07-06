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



<?
## Story 3

$currentStory = 3; 
$start = offsetTo($currentStory);
$end = offsetTo($currentStory+1);
?>


#construction-wrapper_3{ -skrollr-animation-name : construction-wrapper_3; }
@-skrollr-keyframes construction-wrapper_3 {
    <?=($start+100); ?> { width: 1300px; height: 900px; margin-top: -450px; margin-left: -650px;}
    <?=($end-100);   ?> { width: 650px; height: 450px;; margin-top: -225px; margin-left: -325px;}
}



