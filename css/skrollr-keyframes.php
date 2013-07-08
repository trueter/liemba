<?php
  header("Content-Type: text/css");
  header("X-Content-Type-Options: nosniff");

  $a_map_height = array(
    0,
    800, /* 1 */
    800, /* 2 */
    818, /* 3 */
    1200, /* 4 */
    800, /* 5 */
    700, /* 6 */
    768, /* 7 */
    700, /* 8 */
    800, /* 9 */
    700, /* 10 */
    768, /* 11 */
    768, /* 12 */
    768, /* 13 */
    768, /* 14 */
    914, /* 15 */
    768, /* 16 */
    800, /* 17 */
    768, /* 18 */
    768, /* 19 */
    768, /* 20 */
    914, /* 21 */
    768, /* 22 */
    914, /* 23 */
    768, /* 24 */
    768, /* 25 */
    768, /* 26 */
    768 /* 27 */
  );

  function height_up_to($n){
    global $a_map_height;

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
    $z_index_split = 1000 - $i;
    $z_index_ship = $z_index_split - 1;
    $z_index_map = $z_index_split - 2;
    ?>

    #split-<?=$i;?> {
      top: <?= $top;?>px; z-index: <?= $z_index_split;?>; -skrollr-animation-name: split<?= $i;?>;
    }

    #ship-<?=$i;?> {
        z-index: <?= $z_index_ship;?>; -skrollr-animation-name: ship<?=$i;?>;
    }  

    #map-<?=$i;?> {
        z-index: <?= $z_index_map;?>;
    }
    #ape-<?=$i;?> {
        z-index: <?= $z_index_ship;?>; -skrollr-animation-name: ape<?=$i;?>;
    } 
    @-skrollr-keyframes  ape<?=$i;?> {
        <?= $top-520;?>     { transform: translateY( 00px);}
        <?= $top-490;?>     { transform: translateY(-10px);}
        <?= $top-460;?>     { transform: translateY( 00px);}
        <?= $top-260;?>     { transform: translateY( 00px);}
        <?= $top-250;?>     { transform: translateY(-10px);}
        <?= $top-240;?>     { transform: translateY( 00px);}
    }
    @-skrollr-keyframes  split<?=$i;?> {
       <?= $top-5;?>  { transform: translateY(   0px );}
       <?= $top;?>    { transform: translateY(-100px );}
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
/*
@-skrollr-keyframes  minimapLocation {
    /* Bujumbura */
    <?= height_up_to( 0);?>     { transform: translateX( 80px) translateY( 25px) scale(1,1); }
    <?= height_up_to( 1);?>     { transform: translateX( 80px) translateY( 25px) scale(1,1); }
    /* big Map 1 */
    <?= height_up_to( 1)+10;?>  { transform: translateX( 80px) translateY( 25px) scale(2,2); }
    <?= height_up_to( 2);?>     { transform: translateX( 80px) translateY( 30px) scale(2,2); }
    /* Rumonge */
    <?= height_up_to( 2)+10;?>  { transform: translateX( 80px) translateY( 30px) scale(1,1); }
    <?= height_up_to( 3);?>     { transform: translateX( 80px) translateY( 35px) scale(1,1); }
    /* big Map 1 */
    <?= height_up_to( 3)+10;?>  { transform: translateX( 80px) translateY( 35px) scale(2,2); }
    <?= height_up_to( 4);?>     { transform: translateX( 80px) translateY( 62px) scale(2,2); }
    /* Kigoma */
    <?= height_up_to( 4)+10;?>  { transform: translateX( 90px) translateY( 62px) scale(1,1); }
    <?= height_up_to( 5);?>     { transform: translateX( 90px) translateY( 65px) scale(1,1); }
    /* big Map 2 */
    <?= height_up_to( 5)+10;?>  { transform: translateX( 90px) translateY( 65px) scale(2,2); }
    <?= height_up_to( 6);?>     { transform: translateX( 90px) translateY( 80px) scale(2,2); }
    /* Kirando */
    <?= height_up_to( 6)+10;?>  { transform: translateX( 95px) translateY( 80px) scale(1,1); }
    <?= height_up_to( 7);?>     { transform: translateX( 95px) translateY( 85px) scale(1,1); }
    /* big Map 2 */
    <?= height_up_to( 7)+10;?>  { transform: translateX( 90px) translateY( 85px) scale(2,2); }
    <?= height_up_to( 8);?>     { transform: translateX( 90px) translateY( 90px) scale(2,2); }
    /* Sigunda Helembe */
    <?= height_up_to( 8)+10;?>  { transform: translateX(100px) translateY( 90px) scale(1,1); }
    <?= height_up_to( 9);?>     { transform: translateX(100px) translateY( 95px) scale(1,1); }
    /* big Map 2 */
    <?= height_up_to( 9)+10;?>  { transform: translateX( 90px) translateY( 95px) scale(2,2); }
    <?= height_up_to(10);?>     { transform: translateX( 90px) translateY(100px) scale(2,2); }
    /* Mugambo */
    <?= height_up_to(10)+10;?>  { transform: translateX( 95px) translateY(100px) scale(1,1); }
    <?= height_up_to(11);?>     { transform: translateX( 90px) translateY(102px) scale(1,1); }
    /* big Map 3 */
    <?= height_up_to(11)+10;?>  { transform: translateX( 90px) translateY(105px) scale(2,2); }
    <?= height_up_to(12);?>     { transform: translateX( 95px) translateY(115px) scale(2,2); }
    /* Kibwesa Kalya */
    <?= height_up_to(12)+10;?>  { transform: translateX( 95px) translateY(115px) scale(1,1); }
    <?= height_up_to(13);?>     { transform: translateX(105px) translateY(115px) scale(1,1); }
    /* big Map 3 */
    <?= height_up_to(13)+10;?>  { transform: translateX(100px) translateY(115px) scale(2,2); }
    <?= height_up_to(14);?>     { transform: translateX(105px) translateY(120px) scale(2,2); }
    /* Ikola Karema */
    <?= height_up_to(14)+10;?>  { transform: translateX(110px) translateY(120px) scale(1,1); }
    <?= height_up_to(15);?>     { transform: translateX(112px) translateY(122px) scale(1,1); }
    /* big Map 3 */
    <?= height_up_to(15)+10;?>  { transform: translateX(105px) translateY(122px) scale(2,2); }  
    <?= height_up_to(16);?>     { transform: translateX(110px) translateY(125px) scale(2,2); }
    /* Kabwe */
    <?= height_up_to(16)+10;?>  { transform: translateX(115px) translateY(125px) scale(1,1); }
    <?= height_up_to(17);?>     { transform: translateX(117px) translateY(128px) scale(1,1); }
    /* big Map 3 */
    <?= height_up_to(17)+10;?>  { transform: translateX(110px) translateY(133px) scale(2,2); }  
    <?= height_up_to(18);?>     { transform: translateX(112px) translateY(140px) scale(2,2); }
    /* Kirando Kibili */
    <?= height_up_to(18)+10;?>  { transform: translateX(120px) translateY(140px) scale(1,1); }
    <?= height_up_to(19);?>     { transform: translateX(120px) translateY(145px) scale(1,1); }
    /* big Map 3 */
    <?= height_up_to(19)+10;?>  { transform: translateX(115px) translateY(145px) scale(2,2); }  
    <?= height_up_to(20);?>     { transform: translateX(117px) translateY(152px) scale(2,2); }
    /* Ninde Msamba */
    <?= height_up_to(20)+10;?>  { transform: translateX(123px) translateY(152px) scale(1,1); }
    <?= height_up_to(21);?>     { transform: translateX(128px) translateY(155px) scale(1,1); }
    /* big Map 4 */
    <?= height_up_to(21)+10;?>  { transform: translateX(119px) translateY(155px) scale(2,2); }  
    <?= height_up_to(22);?>     { transform: translateX(122px) translateY(160px) scale(2,2); }
    /* Kala */
    <?= height_up_to(22)+10;?>  { transform: translateX(125px) translateY(160px) scale(1,1); }
    <?= height_up_to(23);?>     { transform: translateX(130px) translateY(163px) scale(1,1); }
    /* big Map 4 */
    <?= height_up_to(23)+10;?>  { transform: translateX(123px) translateY(165px) scale(2,2); }
    <?= height_up_to(24);?>     { transform: translateX(125px) translateY(170px) scale(2,2); }
    /* Kasanga */
    <?= height_up_to(24)+10;?>  { transform: translateX(130px) translateY(167px) scale(1,1); }
    <?= height_up_to(25);?>     { transform: translateX(135px) translateY(170px) scale(1,1); }
    /* big Map 4 */
    <?= height_up_to(25)+10;?>  { transform: translateX(126px) translateY(170px) scale(2,2); }
    <?= height_up_to(26);?>     { transform: translateX(124px) translateY(177px) scale(2,2); }
    /* Mpulungu */
    <?= height_up_to(26)+10;?>  { transform: translateX(130px) translateY(177px) scale(1,1); }
    <?= height_up_to(27);?>     { transform: translateX(130px) translateY(180px) scale(1,1); }       
}

<?php  ###### 1
  $map_number = 1;
  $end = height_up_to($map_number);
  $start = $end - $a_map_height[$map_number];
?>
 
@-skrollr-keyframes  ship<?= $map_number;?> {

    <?= $start;?>     { transform: translateX(525px) translateY(420px) rotate(00deg);  }
    <?= $start+250;?> { transform: translateX(525px) translateY(420px) rotate(30deg); }
    <?= $end;?>       { transform: translateX(460px) translateY(650px) rotate(20deg); }
}

<?php  ###### 2
  $map_number = 2;
  $end = height_up_to($map_number);
  $start = $end - $a_map_height[$map_number];
?>
@-skrollr-keyframes  ship<?= $map_number;?> {

    <?= $start-200;?> { transform: translateX( 420px ) translateY( 100px ) rotate(  0deg);  }
    <?= $start+200;?> { transform: translateX( 400px ) translateY( 450px ) rotate( 10deg);  }
    <?= $start+250;?> { transform: translateX( 400px ) translateY( 500px ) rotate(-19deg);  }
    <?= $end;?>       { transform: translateX( 520px ) translateY( 740px ) rotate(-19deg);  }
}

<?php  ###### 3
  $map_number = 3;
  $end = height_up_to($map_number);
  $start = $end - $a_map_height[$map_number];
?>
@-skrollr-keyframes  ship<?= $map_number;?> {

    <?= $start-450;?> { transform: translateX( 50px) translateY(-150px) rotate(-25deg); }
    <?= $start-250;?> { transform: translateX(150px) translateY(   0px) rotate(-25deg); }
    <?= $end-150;?>   { transform: translateX(550px) translateY( 660px) rotate(-25deg); }
}

<?php 
  $map_number = 4;
  $end = height_up_to($map_number);
  $start = $end - $a_map_height[$map_number];
?>
@-skrollr-keyframes  ship<?= $map_number;?> {

    <?= $start-300;?> { transform: translateX(450px) translateY(-50px) rotate(-15deg); }
    <?= $start;?>     { transform: translateX(500px) translateY(350px) rotate(-15deg); }
    <?= $end-500;?>   { transform: translateX(680px) translateY(1050px) rotate(-17deg); }
    <?= $end-400;?>   { transform: translateX(700px) translateY(1100px) rotate(-50deg); }
    <?= $end-200;?>   { transform: translateX(770px) translateY(1140px) rotate(-70deg); }
}

<?php 
  $map_number = 5;
  $end = height_up_to($map_number);
  $start = $end - $a_map_height[$map_number];
?>
@-skrollr-keyframes  ship<?= $map_number;?> {

    <?= $start-250;?> { transform: translateX(130px) translateY(-150px) rotate(-7deg); }
    <?= $start-100;?>     { transform: translateX(150px) translateY(100px) rotate(-5deg); }
    <?= $start+100;?> { transform: translateX(160px) translateY(250px) rotate(-7deg); }
    <?= $start+250;?> { transform: translateX(200px) translateY(430px) rotate(-50deg); }
    <?= $end-400;?> { transform: translateX(310px) translateY(600px) rotate(-70deg); }
    <?= $end-100;?>   { transform: translateX(510px) translateY(670px) rotate(-50deg); }
}

<?php 
  $map_number = 6;
  $end = height_up_to($map_number);
  $start = $end - $a_map_height[$map_number];
?>
@-skrollr-keyframes  ship<?= $map_number;?> {

    <?= $start-200;?> { transform: translateX(600px) translateY(040px) rotate(-12deg); }
    <?= $end-200;?>   { transform: translateX(720px) translateY(420px) rotate(-12deg); }
}

<?php 
  $map_number = 7;
  $end = height_up_to($map_number);
  $start = $end - $a_map_height[$map_number];
?>
@-skrollr-keyframes  ship<?= $map_number;?> {

    <?= $start-300;?> { transform: translateX(200px) translateY(-150px) rotate(-20deg); }
    <?= $start+150;?> { transform: translateX(230px) translateY( 270px) rotate(-10deg); }
    <?= $end-200;?>   { transform: translateX(230px) translateY( 580px) rotate(  0deg); }
}

<?php 
  $map_number = 8;
  $end = height_up_to($map_number);
  $start = $end - $a_map_height[$map_number];
?>
@-skrollr-keyframes  ship<?= $map_number;?> {

    <?= $start-200;?> { transform: translateX(700px) translateY(100px) rotate(  20deg); }
    <?= $start;?> { transform: translateX(640px) translateY(280px) rotate( 20deg); }
    <?= $start+50;?> { transform: translateX(650px) translateY(300px) rotate(-30deg); }
    <?= $end-300;?>   { transform: translateX(760px) translateY(440px) rotate(-40deg); }
}

<?php 
  $map_number = 9;
  $end = height_up_to($map_number);
  $start = $end - $a_map_height[$map_number];
?>
@-skrollr-keyframes  ship<?= $map_number;?> {

    <?= $start-200;?> { transform: translateX( 20px) translateY(-150px) rotate( -10deg); }
    <?= $start-100;?> { transform: translateX( 80px) translateY(-50px) rotate(  -35deg); }
    <?= $end-250;?>   { transform: translateX(350px) translateY(650px) rotate(-35deg); }
}
<?php 
  $map_number = 10;
  $end = height_up_to($map_number);
  $start = $end - $a_map_height[$map_number];
?>
@-skrollr-keyframes  ship<?= $map_number;?> {

    <?= $start-100;?> { transform: translateX(750px) translateY(150px) rotate(-32deg); }
    <?= $start+100;?> { transform: translateX(840px) translateY(360px) rotate(-32deg); }
    <?= $start+230;?> { transform: translateX(820px) translateY(430px) rotate( 45deg); }
    <?= $end-200;?>   { transform: translateX(710px) translateY(520px) rotate( 45deg); }
}
<?php 
  $map_number = 11;
  $end = height_up_to($map_number);
  $start = $end - $a_map_height[$map_number];
?>
@-skrollr-keyframes  ship<?= $map_number;?> {

    <?= $start-350;?> { transform: translateX(600px) translateY(-150px) rotate( 45deg); }
    <?= $end-200;?>   { transform: translateX( 50px) translateY(475px) rotate( 45deg); }
}
<?php 
  $map_number = 12;
  $end = height_up_to($map_number);
  $start = $end - $a_map_height[$map_number];
?>
@-skrollr-keyframes  ship<?= $map_number;?> {

    <?= $start-250;?> { transform: translateX(400px) translateY( 40px) rotate( 45deg); }
    <?= $start-100;?> { transform: translateX(300px) translateY(100px) rotate( 45deg); }
    <?= $start- 50;?> { transform: translateX(270px) translateY(150px) rotate( -5deg); }
    <?= $start+ 50;?> { transform: translateX(290px) translateY(250px) rotate( -5deg); }
    <?= $start+150;?> { transform: translateX(330px) translateY(340px) rotate(-45deg); }
    <?= $start+200;?> { transform: translateX(380px) translateY(380px) rotate(-75deg); }
    <?= $end-300;?>   { transform: translateX(500px) translateY(455px) rotate(-80deg); }
}
<?php 
  $map_number = 13;
  $end = height_up_to($map_number);
  $start = $end - $a_map_height[$map_number];
?>
@-skrollr-keyframes  ship<?= $map_number;?> {

    <?= $start-350;?> { transform: translateX( 60px) translateY( 350px) rotate(-85deg); }
    <?= $start    ;?>   { transform: translateX(600px) translateY( 450px) rotate(-65deg); }
    <?= $end-200;?>   { transform: translateX(850px) translateY( 600px) rotate(-25deg); }
}
<?php 
  $map_number = 14;
  $end = height_up_to($map_number);
  $start = $end - $a_map_height[$map_number];
?>
@-skrollr-keyframes  ship<?= $map_number;?> {

    <?= $start-350;?> { transform: translateX( 500px) translateY( 230px) rotate(-65deg); }
    <?= $start    ;?>   { transform: translateX(600px) translateY( 300px) rotate(-35deg); }
    <?= $end-200;?>   { transform: translateX(720px) translateY( 400px) rotate(-35deg); }
}
<?php 
  $map_number = 15;
  $end = height_up_to($map_number);
  $start = $end - $a_map_height[$map_number];
?>
@-skrollr-keyframes  ship<?= $map_number;?> {

    <?= $start-350;?> { transform: translateX( 100px) translateY( -150px) rotate(-25deg); }
    <?= $end-250;?>   { transform: translateX(450px) translateY( 750px) rotate(-25deg); }
}
<?php 
  $map_number = 16;
  $end = height_up_to($map_number);
  $start = $end - $a_map_height[$map_number];
?>
@-skrollr-keyframes  ship<?= $map_number;?> {

    <?= $start-350;?> { transform: translateX( 700px) translateY(190px) rotate(-35deg); }
    <?= $start+100;?> { transform: translateX( 740px) translateY(270px) rotate(-25deg); }
    <?= $end-250;?>   { transform: translateX(780px) translateY( 350px) rotate(-10deg); }
}
<?php 
  $map_number = 17;
  $end = height_up_to($map_number);
  $start = $end - $a_map_height[$map_number];
?>
@-skrollr-keyframes  ship<?= $map_number;?> {

    <?= $start-350;?> { transform: translateX(150px) translateY(-150px) rotate(-10deg); }
    <?= $start    ;?> { transform: translateX(170px) translateY( 150px) rotate(  -5deg); }
    <?= $end-250;?>   { transform: translateX(180px) translateY( 640px) rotate( -2deg); }
}
<?php 
  $map_number = 18;
  $end = height_up_to($map_number);
  $start = $end - $a_map_height[$map_number];
?>
@-skrollr-keyframes  ship<?= $map_number;?> {

    <?= $start-350;?> { transform: translateX( 760px) translateY(220px) rotate( 35deg); }
    <?= $start+100;?> { transform: translateX( 740px) translateY(280px) rotate(  5deg); }
    <?= $end-350;?>   { transform: translateX( 780px) translateY(420px) rotate(-25deg); }
}
<?php 
  $map_number = 19;
  $end = height_up_to($map_number);
  $start = $end - $a_map_height[$map_number];
?>
@-skrollr-keyframes  ship<?= $map_number;?> {

    <?= $start-350;?> { transform: translateX(150px) translateY(-150px) rotate(-10deg); }
    <?= $start    ;?> { transform: translateX(170px) translateY( 150px) rotate(  -5deg); }
    <?= $end-250;?>   { transform: translateX(180px) translateY( 615px) rotate( -2deg); }
}
<?php 
  $map_number = 20;
  $end = height_up_to($map_number);
  $start = $end - $a_map_height[$map_number];
?>
@-skrollr-keyframes  ship<?= $map_number;?> {

    <?= $start-350;?> { transform: translateX( 780px) translateY(400px) rotate(  5deg); }
    <?= $start-200;?> { transform: translateX( 770px) translateY(440px) rotate(  5deg); }
    <?= $start+100;?> { transform: translateX( 820px) translateY(520px) rotate(-25deg); }
    <?= $end-350;?>   { transform: translateX( 930px) translateY(720px) rotate(-25deg); }
}
<?php 
  $map_number = 21;
  $end = height_up_to($map_number);
  $start = $end - $a_map_height[$map_number];
?>
@-skrollr-keyframes  ship<?= $map_number;?> {

    <?= $start-350;?> { transform: translateX( 20px) translateY(-150px) rotate(-25deg); }
    <?= $start+ 50;?>   { transform: translateX(440px) translateY( 450px) rotate(-20deg); }
    <?= $end-250;?>   { transform: translateX(520px) translateY( 750px) rotate(-10deg); }
}
<?php 
  $map_number = 22;
  $end = height_up_to($map_number);
  $start = $end - $a_map_height[$map_number];
?>
@-skrollr-keyframes  ship<?= $map_number;?> {

    <?= $start-350;?> { transform: translateX( 380px) translateY(-70px) rotate(-25deg); }
    <?= $end-350;?>   { transform: translateX( 620px) translateY(400px) rotate(-25deg); }
}
<?php 
  $map_number = 23;
  $end = height_up_to($map_number);
  $start = $end - $a_map_height[$map_number];
?>
@-skrollr-keyframes  ship<?= $map_number;?> {

    <?= $start-350;?> { transform: translateX( 20px) translateY(-150px) rotate(-25deg); }
    <?= $start- 50;?>   { transform: translateX(350px) translateY( 350px) rotate(-15deg); }
    <?= $end-250;?>   { transform: translateX(460px) translateY( 750px) rotate(-10deg); }
}

<?php 
  $map_number = 24;
  $end = height_up_to($map_number);
  $start = $end - $a_map_height[$map_number];
?>
@-skrollr-keyframes  ship<?= $map_number;?> {

    <?= $start-350;?> { transform: translateX( 580px) translateY(270px) rotate(-30deg); }
    <?= $end-350;?>   { transform: translateX( 750px) translateY(520px) rotate(-25deg); }
}
<?php 
  $map_number = 25;
  $end = height_up_to($map_number);
  $start = $end - $a_map_height[$map_number];
?>
@-skrollr-keyframes  ship<?= $map_number;?> {

    <?= $start-350;?> { transform: translateX(300px) translateY(-150px) rotate(-15deg); }
    <?= $start- 50;?>   { transform: translateX(350px) translateY( 350px) rotate(-15deg); }
    <?= $end-250;?>   { transform: translateX(460px) translateY( 620px) rotate(-10deg); }
}
<?php 
  $map_number = 26;
  $end = height_up_to($map_number);
  $start = $end - $a_map_height[$map_number];
?>
@-skrollr-keyframes  ship<?= $map_number;?> {

    <?= $start-250;?> { transform: translateX( 750px) translateY(420px) rotate( 7deg); }
    <?= $start   ;?>  { transform: translateX( 740px) translateY(580px) rotate( 7deg); }
    <?= $end-350;?>   { transform: translateX( 725px) translateY(610px) rotate(35deg); }
}
<?php 
  $map_number = 27;
  $end = height_up_to($map_number);
  $start = $end - $a_map_height[$map_number];
?>
@-skrollr-keyframes  ship<?= $map_number;?> {

    <?= $start-450;?> { transform: translateX(520px) translateY(-150px) rotate( 10deg); }
    <?= $start    ;?> { transform: translateX(470px) translateY( 150px) rotate( 35deg); }
}