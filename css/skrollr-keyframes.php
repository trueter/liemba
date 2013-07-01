<?php
  header("Content-Type: text/css");
  header("X-Content-Type-Options: nosniff");

  $a_map_height = array(
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
    1400, /* 17 */
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
    $sum = 0;
    for($i = 1; $i <= n; $i++){
      $var_name =  ${"map_".$i."_height"};
      $sum += $var_name;
    }
    return $sum;
  }
?>
/*
  Splits 
*/
<?php
  for ($i = 1; $i <= 27; i++){
    ?>
    #split-<?=$i;?> {
      top: <?= ;?>; z-index: 105; -skrollr-animation-name: split1;
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

/*
   # 1
*/

#ship-1 {
    -skrollr-animation-name: ship1;
}
@-skrollr-keyframes  ship1 {
     0 { transform: translateX(525px) translateY(420px) rotate(00deg);  }
    220 { transform: translateX(525px) translateY(420px) rotate(30deg); }
    500 { transform: translateX(465px) translateY(670px) rotate(20deg); }
}

#split-1 {
  top: 800px; z-index: 105; -skrollr-animation-name: split1;
}
@-skrollr-keyframes  split1 {
   400 { transform: translateY(0px );}
   600 { transform: translateY(-100px );}
}

/*
   # 2
*/

#ship-2 {
  -skrollr-animation-name: ship2;
}
@-skrollr-keyframes  ship2 {
    580 { transform: translateX( 420px ) translateY( 150px ) rotate(0deg);  }
    800 { transform: translateX( 400px ) translateY( 450px ) rotate(10deg);  }
    850 { transform: translateX( 400px ) translateY( 500px ) rotate(-19deg);  }
    950 { transform: translateX( 460px ) translateY( 650px ) rotate(-19deg);  }    
   1100 { transform: translateX( 500px ) translateY( 720px ) rotate(-19deg);  }
}

#split-2 {
  top: 1600px; z-index: 106; -skrollr-animation-name: split2;
}
@-skrollr-keyframes  split2 {
  1000 { transform: translateY( 0px);}
  1200 { transform: translateY(-100px);}
}

/*
   # 3
*/

#ship-3 {
    -skrollr-animation-name: ship3;
}
@-skrollr-keyframes  ship3 {
  1100 { transform: translateX(150px) translateY(70px) rotate(-25deg); }
  2100 { transform: translateX(500px) translateY(650px) rotate(-25deg); }
}

#split-3 {
  top: 2418px; z-index: 109; -skrollr-animation-name: split3;
}
@-skrollr-keyframes  split3 {
  2000 { transform: translateY( 0px);}
  2200 { transform: translateY(-100px);}
}
/*
   # 4
*/

#ship-4 {
    -skrollr-animation-name: ship4;
}
@-skrollr-keyframes  ship4 {
  2100 { transform: translateX(600px) translateY(70px) rotate(-5deg); }
  2600 { transform: translateX(680px) translateY(750px) rotate(-7deg); }
  2700 { transform: translateX(700px) translateY(800px) rotate(-50deg); }
  2900 { transform: translateX(770px) translateY(840px) rotate(-70deg); }
}

#split-4 {
  top: 3318px; z-index: 112; -skrollr-animation-name: split4;
}
@-skrollr-keyframes  split4 {
  2800 { transform: translateY( 0px);}
  3000 { transform: translateY(-100px);}
}
/*
   # 5
*/

#ship-5 {
    -skrollr-animation-name: ship5;
}
@-skrollr-keyframes  ship5 {
  3000 { transform: translateX(300px) translateY(70px) rotate(-5deg); }
  3100 { transform: translateX(310px) translateY(250px) rotate(-7deg); }
  3250 { transform: translateX(350px) translateY(400px) rotate(-50deg); }
  3350 { transform: translateX(400px) translateY(520px) rotate(-70deg); }
  3700 { transform: translateX(700px) translateY(450px) rotate(-100deg); }
}

#split-5 {
  top: 4118px; z-index: 115; -skrollr-animation-name: split5;
}
@-skrollr-keyframes  split5 {
  3600 { transform: translateY( 0px);}
  3800 { transform: translateY(-100px);}
}
/*
   # 6
*/

#ship-6 {
    -skrollr-animation-name: ship6;
}
@-skrollr-keyframes  ship6 {
  3600 { transform: translateX(650px) translateY(70px) rotate(-10deg); }
  4600 { transform: translateX(720px) translateY(350px) rotate(-10deg); }
}

#split-6 {
  top: 4818px; z-index: 118; -skrollr-animation-name: split6;
}
@-skrollr-keyframes  split6 {
  4500 { transform: translateY( 0px);}
  4700 { transform: translateY(-100px);}
}
/*
   # 7
*/

#ship-7 {
    -skrollr-animation-name: ship7;
}
@-skrollr-keyframes  ship7 {
  4700 { transform: translateX(400px) translateY(70px) rotate(  20deg); }
  5050 { transform: translateX(230px) translateY(270px) rotate( 20deg); }
  5400 { transform: translateX(230px) translateY(550px) rotate(  0deg); }
}

#split-7 {
  top: 5586px; z-index: 121; -skrollr-animation-name: split7;
}
@-skrollr-keyframes  split7 {
  5300 { transform: translateY( 0px);}
  5500 { transform: translateY(-100px);}
}
/*
   # 8
*/

#ship-8 {
    -skrollr-animation-name: ship8;
}
@-skrollr-keyframes  ship8 {
  5500 { transform: translateX(700px) translateY(100px) rotate(  20deg); }
  5700 { transform: translateX(640px) translateY(280px) rotate( 20deg); }
  5750 { transform: translateX(650px) translateY(300px) rotate(-30deg); }
  6000 { transform: translateX(760px) translateY(440px) rotate(-40deg); }
}

#split-8 {
  top: 6286px; z-index: 124; -skrollr-animation-name: split8;
}
@-skrollr-keyframes  split8 {
  5900 { transform: translateY( 0px);}
  6100 { transform: translateY(-100px);}
}
/*
   # 9
*/

#ship-9 {
    -skrollr-animation-name: ship9;
}
@-skrollr-keyframes  ship9 {
  6100 { transform: translateX(50px) translateY(30px) rotate(  -35deg); }
  6800 { transform: translateX(350px) translateY(550px) rotate(-35deg); }
}

#split-9 {
  top: 7086px; z-index: 124; -skrollr-animation-name: split9;
}
@-skrollr-keyframes  split9 {
  6700 { transform: translateY( 0px);}
  6900 { transform: translateY(-100px);}
}
/*
   # 10
*/

#ship-10 {
    -skrollr-animation-name: ship10;
}
@-skrollr-keyframes  ship10 {
  6900 { transform: translateX(750px) translateY(150px) rotate(-32deg); }
  7100 { transform: translateX(840px) translateY(360px) rotate(-32deg); }
  7230 { transform: translateX(820px) translateY(430px) rotate( 45deg); }
  7600 { transform: translateX(710px) translateY(520px) rotate( 45deg); }
}

#split-10 {
  top: 7786px; z-index: 124; -skrollr-animation-name: split10;
}
@-skrollr-keyframes  split10 {
  7500 { transform: translateY( 0px);}
  7700 { transform: translateY(-100px);}
}
#ship-11 {
    -skrollr-animation-name: ship11;
}
@-skrollr-keyframes  ship11 {
  7700 { transform: translateX(600px) translateY(20px) rotate( 45deg); }
  8500 { transform: translateX(-30px) translateY(550px) rotate( 45deg); }
}

#split-11 {
  top: 8586px; z-index: 124; -skrollr-animation-name: split11;
}
@-skrollr-keyframes  split11 {
  8400 { transform: translateY( 0px);}
  8600 { transform: translateY(-100px);}
}