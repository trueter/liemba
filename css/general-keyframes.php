<?php
header("Content-Type: text/css");
header("X-Content-Type-Options: nosniff");

function offsetTo($currentStory){
    return ($currentStory-1)*1000;
}


for($i=1; $i<21; $i++){

    $start = ($i-1)*1000;
    $end   = $i*1000;
    $range = 200;
?>
    #story-<?=$i;?>{
        -skrollr-animation-name:story-<?=$i;?>;
    }

    @-skrollr-keyframes story-<?=$i;?> {
    <?= ($start-2*$range-1); ?> { opacity:    0; display:  none; }
    <?= ($start-2*$range);   ?> { opacity:    0; display: block; }
    <?= ($start-$range);     ?> { opacity: 0.25; display: block; }
    <?= ($start);            ?> { opacity:    1; display: block; }
    <?= ($end);              ?> { opacity:    1; display: block; }
    <?= ($end+$range);       ?> { opacity: 0.75; display: block; }
    <?= ($end+2*$range);     ?> { opacity:    0; display: block; }
    <?= ($end+2*$range);     ?> { opacity:    0; display:  none; }
    }
    
<?php
}

?>

#section-1{
    -skrollr-animation-name:section-1;
}
@-skrollr-keyframes section-1 {
       0{ display: block; transform: translateX(   0%); }
    4000{ display: block; transform: translateX(   0%); }
    5000{ display:  none; transform: translateX(-100%); }   
}

/* */

<?php

for($i = 2; $i<6; $i++){
    $start = ($i-1)*5000;
    $end  =  $i*5000;
    ?>
        #section-<?=$i;?>{
            -skrollr-animation-name:section-<?=$i;?>;
        }
        @-skrollr-keyframes section-<?=$i;?> {
           <?=($start-1001);?> { display:  none; transform: translateX( 100%); }
           <?=($start-1000);?> { display: block; transform: translateX( 100%); }
           <?=$start;?>        { display: block; transform: translateX(   0%); } 
           <?=($end-1000);?>    { display: block; transform: translateX(   0%); }
           <?=$end;?>          { display: block; transform: translateX(-100%); } 
           <?=($end+1);?>      { display:  none; transform: translateX(-100%); } 
        }
    <?php
}?>


