<?php
header("Content-Type: text/css");
header("X-Content-Type-Options: nosniff");

function offsetTo($currentStory){
    return ($currentStory-1)*1000;
}


for($i=1; $i<21; $i++){

    $full = ($i *1000); 
?>
    #story-<?=$i;?>{
        -skrollr-animation-name:story-<?=$i;?>;
    }

    @-skrollr-keyframes story-<?=$i;?> {
    <?= ($full-701);            ?> { opacity:    0; display: none; transform: translateX(   100%);}
    <?= ($full-700);            ?> { opacity:    1; display: block; transform: translateX(   100%);}
    <?= ($full-500);            ?> { opacity:    1; display: block; transform: translateX(   0%);}
    <?= ($full+300);              ?> { opacity:    1; display: block; transform: translateX(   0%);}
    <?= ($full+400);              ?> { opacity:    1; display: block; transform: translateX(   -100%);}
    <?= ($full+401);              ?> { opacity:    0; display: none; transform: translateX(   -100%);}
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
    4000{ display: block; transform: translateX(   0%); }
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
           <?=($start-1);?> { display:  none; transform: translateX( 100%); }
           <?=$start;?> { display: block; transform: translateX( 100%); }
           <?=($start + 1000);?>        { display: block; transform: translateX(   0%); } 
           <?=$end;?>    { display: block; transform: translateX(   0%); }
           <?=($end + 1000);?>          { display: block; transform: translateX(-100%); } 
           <?=($end + 1001);?>      { display:  none; transform: translateX(-100%); } 
        }
    <?php
}?>



#scroll-instruction{ -skrollr-animation-name:scroll-instruction; }
@-skrollr-keyframes scroll-instruction {
    0{opacity: 1;}
    100{opacity: 1;}
    200{opacity: 0;}
}