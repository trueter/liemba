<?php
  header("Content-Type: text/css");
  header("X-Content-Type-Options: nosniff");

  $a_map_height = array(
    0,
    800, /* 1 */
    800, /* 2 */
    818, /* 3 */
    900, /* 4 */
    800, /* 5 */
    700, /* 6 */
    768, /* 7 */
    700, /* 8 */
    800, /* 9 */
    700, /* 10 */
    768, /* 11 */
    1374, /* 12 */
    768, /* 13 */
    1374, /* 14 */
    914, /* 15 */
    1374, /* 16 */
    914, /* 17 */
    1374, /* 18 */
    768, /* 19 */
    1374, /* 20 */
    914, /* 21 */
    1000, /* 22 */
    914, /* 23 */
    1000, /* 24 */
    768, /* 25 */
    1000, /* 26 */
    768 /* 27 */
  );

  function height_up_to($n){
    global $a_map_height;

    $index = $n;
    $sum = 0;
    for($i = 1; $i <= $n; $i++){
      $sum += $a_map_height[$i];
    }
    return $sum;
  }
?>
/*
  Splits & Ships
*/
<?php
  for ($i = 1; $i <= 27; $i++){
    $top = height_up_to($i);
    $z_index_split = 102 + $i*3;
    $split_name = "split".($i);
    $ship_name = "ship".($i);
    $z_index_ship = $z_index_split - 4;

    ?>
    #split-<?=$i;?> {
      top: <?= $top;?>px; z-index: <?= $z_index_split;?>; -skrollr-animation-name: <?= $split_name;?>;
    }
    #ship-<?=$i;?> {
        -skrollr-animation-name: ship<?=$i;?>;
    }    
    <?php
  }
?>

/*
  Current Location
*/
#current-location{
    -skrollr-animation-name: minimapLocation;  
}
@-skrollr-keyframes  minimapLocation {
       0 { transform: translateX(75px) translateY(25px) scale(1,1); }
     100 { transform: translateX(75px) translateY(30px) scale(1,1); }
     320 { transform: translateX(75px) translateY(40px) scale(1,1); }
     530 { transform: translateX(82px) translateY(80px) scale(2,2); }
     730 { transform: translateX(82px) translateY(100px) scale(2,2); }
    2000 { transform: translateX(92px) translateY(120px) scale(2,2); }
}

<?php 
  $map_number = 1;
  $end = height_up_to($map_number);
  $start = $end- $a_map_height[$map_number];
?>
@-skrollr-keyframes  ship<?= $map_number;?> {

    <?= $start;?> { transform: translateX(525px) translateY(420px) rotate(00deg);  }
    220           { transform: translateX(525px) translateY(420px) rotate(30deg); }
    <?= $end;?>   { transform: translateX(465px) translateY(670px) rotate(20deg); }
}

@-skrollr-keyframes  split1 {
   <?= $end-200;?> { transform: translateY(0px );}
   <?= $end;?> { transform: translateY(-100px );}
}

/*
   # 2
*/

@-skrollr-keyframes  ship2 {
    580 { transform: translateX( 420px ) translateY( 150px ) rotate(0deg);  }
    800 { transform: translateX( 400px ) translateY( 450px ) rotate(10deg);  }
    850 { transform: translateX( 400px ) translateY( 500px ) rotate(-19deg);  }
    950 { transform: translateX( 460px ) translateY( 650px ) rotate(-19deg);  }    
   1100 { transform: translateX( 500px ) translateY( 720px ) rotate(-19deg);  }
}

@-skrollr-keyframes  split2 {
  1000 { transform: translateY( 0px);}
  1200 { transform: translateY(-100px);}
}

/*
   # 3
*/

@-skrollr-keyframes  ship3 {
  1100 { transform: translateX(150px) translateY(70px) rotate(-25deg); }
  2100 { transform: translateX(500px) translateY(650px) rotate(-25deg); }
}

@-skrollr-keyframes  split3 {
  2000 { transform: translateY( 0px);}
  2200 { transform: translateY(-100px);}
}
/*
   # 4
*/

@-skrollr-keyframes  ship4 {
  2100 { transform: translateX(600px) translateY(70px) rotate(-5deg); }
  2600 { transform: translateX(680px) translateY(750px) rotate(-7deg); }
  2700 { transform: translateX(700px) translateY(800px) rotate(-50deg); }
  2900 { transform: translateX(770px) translateY(840px) rotate(-70deg); }
}

@-skrollr-keyframes  split4 {
  2800 { transform: translateY( 0px);}
  3000 { transform: translateY(-100px);}
}
/*
   # 5
*/

@-skrollr-keyframes  ship5 {
  3000 { transform: translateX(300px) translateY(70px) rotate(-5deg); }
  3100 { transform: translateX(310px) translateY(250px) rotate(-7deg); }
  3250 { transform: translateX(350px) translateY(400px) rotate(-50deg); }
  3350 { transform: translateX(400px) translateY(520px) rotate(-70deg); }
  3700 { transform: translateX(700px) translateY(450px) rotate(-100deg); }
}

@-skrollr-keyframes  split5 {
  3600 { transform: translateY( 0px);}
  3800 { transform: translateY(-100px);}
}
/*
   # 6
*/

@-skrollr-keyframes  ship6 {
  3600 { transform: translateX(650px) translateY(70px) rotate(-10deg); }
  4600 { transform: translateX(720px) translateY(350px) rotate(-10deg); }
}

@-skrollr-keyframes  split6 {
  4500 { transform: translateY( 0px);}
  4700 { transform: translateY(-100px);}
}
/*
   # 7
*/

@-skrollr-keyframes  ship7 {
  4700 { transform: translateX(400px) translateY(70px) rotate(  20deg); }
  5050 { transform: translateX(230px) translateY(270px) rotate( 20deg); }
  5400 { transform: translateX(230px) translateY(550px) rotate(  0deg); }
}

@-skrollr-keyframes  split7 {
  5300 { transform: translateY( 0px);}
  5500 { transform: translateY(-100px);}
}
/*
   # 8
*/

@-skrollr-keyframes  ship8 {
  5500 { transform: translateX(700px) translateY(100px) rotate(  20deg); }
  5700 { transform: translateX(640px) translateY(280px) rotate( 20deg); }
  5750 { transform: translateX(650px) translateY(300px) rotate(-30deg); }
  6000 { transform: translateX(760px) translateY(440px) rotate(-40deg); }
}

@-skrollr-keyframes  split8 {
  5900 { transform: translateY( 0px);}
  6100 { transform: translateY(-100px);}
}
/*
   # 9
*/

@-skrollr-keyframes  ship9 {
  6100 { transform: translateX(50px) translateY(30px) rotate(  -35deg); }
  6800 { transform: translateX(350px) translateY(550px) rotate(-35deg); }
}

@-skrollr-keyframes  split9 {
  6700 { transform: translateY( 0px);}
  6900 { transform: translateY(-100px);}
}
/*
   # 10
*/

@-skrollr-keyframes  ship10 {
  6900 { transform: translateX(750px) translateY(150px) rotate(-32deg); }
  7100 { transform: translateX(840px) translateY(360px) rotate(-32deg); }
  7230 { transform: translateX(820px) translateY(430px) rotate( 45deg); }
  7600 { transform: translateX(710px) translateY(520px) rotate( 45deg); }
}

@-skrollr-keyframes  split10 {
  7500 { transform: translateY( 0px);}
  7700 { transform: translateY(-100px);}
}
/*
   # 11
*/
@-skrollr-keyframes  ship11 {
  7700 { transform: translateX(600px) translateY(20px) rotate( 45deg); }
  8500 { transform: translateX(-30px) translateY(550px) rotate( 45deg); }
}

@-skrollr-keyframes  split11 {
  8400 { transform: translateY( 0px);}
  8600 { transform: translateY(-100px);}
}