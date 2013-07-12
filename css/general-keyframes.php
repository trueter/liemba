<?php
header("Content-Type: text/css");
header("X-Content-Type-Options: nosniff");

function offsetTo($currentStory){
    return ($currentStory-1)*1000;
}


for($i=1; $i<21; $i++){

    $full = ($i *1000); 
?>
    #circle<?=$i;?>{
        -skrollr-animation-name:circle<?=$i;?>;
    }
     @-skrollr-keyframes circle<?=$i;?> {

    <?= ($full-500);            ?> { background: rgb(255, 255, 255); overflow: hidden;}
    <?= ($full-499);            ?> { background: rgb(0, 128, 158); overflow: visible;}
    <?= ($full+499);            ?> { background: rgb(0, 128, 158); overflow: visible;}
    <?= ($full+500);              ?> { background: rgb(255, 255, 255); overflow: hidden;}
    
    }



    #story-<?=$i;?>{
        -skrollr-animation-name:story-<?=$i;?>;
    }

    @-skrollr-keyframes story-<?=$i;?> {
    <?= ($full-701);            ?> { opacity:    0; display: none; transform: translateX(   100%);}
    <?= ($full-700);            ?> { opacity:    0; display: block; transform: translateX(   100%);}
    <?= ($full-600);            ?> { opacity:    1; display: block; transform: translateX(   100%);}
    <?= ($full-300);            ?> { opacity:    1; display: block; transform: translateX(   0%);}
    <?= ($full+300);              ?> { opacity:    1; display: block; transform: translateX(   0%);}
    <?= ($full+600);              ?> { opacity:    1; display: block; transform: translateX(   -100%);}
    <?= ($full-700);            ?> { opacity:    0; display: block; transform: translateX(   100%);}
    <?= ($full+701);              ?> { opacity:    0; display: none; transform: translateX(   -100%);}
    }
    
<?php
}

?>

#section-1{
    -skrollr-animation-name:section-1;
}
@-skrollr-keyframes section-1 {
    
    0{ display: none; transform: translateX(   100%); }
    1{ display: block; transform: translateX(   100%); }
    1000{ display: block; transform: translateX(   0%); }
    4300{ display: block; transform: translateX(   0%); }
    5000{ display:  none; transform: translateX(-100%); }   
}

/* */

<?php

for($i = 2; $i<6; $i++){
    $start = ($i-1)*4000;
    $end  =  $i*4000;
    ?>
        #section-<?=$i;?>{
            -skrollr-animation-name:section-<?=$i;?>;
        }
        @-skrollr-keyframes section-<?=$i;?> {
           <?=($start+299);?> { display:  none; transform: translateX( 100%); }
           <?=($start+300);?> { display: block; transform: translateX( 100%); }
           <?=($start + 1000);?>        { display: block; transform: translateX(   0%); } 
           <?=($end + 300);?>    { display: block; transform: translateX(   0%); }
           <?=($end + 1000);?>          { display: block; transform: translateX(-100%); } 
           <?=($end + 1001);?>      { display:  none; transform: translateX(-100%); } 
        }
    <?php
}?>

#infobox_icon{ -skrollr-animation-name:infobox_icon; }
@-skrollr-keyframes infobox_icon {
    999 { display: none; }
    1000{ display: block; }
}

#scroll{ -skrollr-animation-name:scroll; }
@-skrollr-keyframes scroll {
    0{opacity: 1;display: block;}
    100{opacity: 1;display: block;}
    1000{opacity: 0;display: block;}
    1001{opacity: 0; display: none;}
}

#ende{ -skrollr-animation-name:ende; }
@-skrollr-keyframes ende {
    0{opacity: 0;display: none;}
    20000{opacity: 0;display: block;}
    21000{opacity: 1;display: block;}

}