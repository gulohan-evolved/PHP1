<?php
//7.26
/*
$a='http://asfsaf';
if (substr($a,0,7)) {echo "да";}
else {echo "нет";}	
*/
//=============================================//
//7.27
/*
$a='html css php';
$z=explode(' ', $a);
echo $z[0],' ',$z[1],' ',$z[2];*/
//=============================================//
//7.28
/*
$z=['html','css','php'];
echo implode(',',$z);
*/
//=============================================//
//7.29
/*
$date='2016-12-31';
$z=explode('-', $date);
echo implode('.', array($z[2], $z[1], $z[0]));
*/
//=============================================//
//7.30
/*
$a='1234567890';
$b=str_split($a, 2);
echo $b[0],' ',$b[1],' ',$b[2],' ',$b[3],' ',$b[4];
*/
//=============================================//
//7.31
/* 
$a='1234567890';
$b=str_split($a, 1);
echo $b[0],' ',$b[1],' ',$b[2],' ',$b[3],' ',$b[4],' ',$b[5],' ',$b[6],' ',$b[7],' ',$b[8],' ',$b[9];
*/
//=============================================//
//7.32
/* 
$a='1234567890';
$b=str_split($a, 2);
echo implode('-', $b);
*/
//=============================================//
//7.33
/* 
$a='a sdas adsw ';
echo trim($a);
*/
//=============================================//
//7.34
/* 
$a='/php/';
echo trim($a,'/');
*/
//=============================================//
//7.35
/* 
 нинаю
*/
//=============================================//
//7.36
/* 
$a='12345';
echo strrev($a);
*/
//=============================================//
//7.37
/* 
$a='otto';
if ($a==strrev($a)) echo("Является");
else {"Не является";}
*/
//=============================================//
//7.38
/* 
$a='Otto Apocalypse';
echo str_shuffle($a);
*/
//=============================================//
//7.39
/* 
нинаю
*/
//=============================================//
//7.40
/* 
for($i=0;$i<10;$i++){
echo str_repeat('X', $i),'<br/>';
}
*/
//=============================================//
//7.41
/* 
$a=2;
for($i=0;$i<8;$i++){
echo str_repeat($a, $a++), '<br/>';
}
*/
//=============================================//
//7.43
/* 
$a='html, <b>php</b>, js';
echo strip_tags($a);
*/
//=============================================//
//7.44
/* 
$str='fdsdfsd, <b> dfss<b> <div> fsdfsd <div> <i>';
echo strip_tags($str, '<b><i>');
*/
//=============================================//
//7.45
/* 
$a='html, <b>php</b>, js';
echo htmlspecialchars($a);
*/
//=============================================//
//7.46
/* 
$a='ab-cd-ef';
echo strstr($a, '-');
*/
//=============================================//
//8.1
/* 
$a='Владикавказ Питер Москва Новгород Магнитогорск';
$z=explode(' ', $a);
sort($z);
echo implode(', ',$z);
*/
//=============================================//
//8.2
/* нинаю */
//=============================================//
//8.3
/* 
$a='12345 67890';
$z=explode(' ', $a);
$zr=strrev($z[0]);
$zl=strrev($z[1]);
implode(' ', array($z[0],$z[1]));
*/
//=============================================//
//8.4
/* 
$a=['21','33','22','54','63','23','13','15'];
$v=0;
for ($i=0;$i<8;$i++) {
$z=$a[$i];
$zr=$z%10;
$zl=($z-$zr)/10;
if($zr=="3" || $zl=="3") {$v++;}
elseif ($zr==$zl) {$v++;}
}
echo $v;
}
*/
//========================================//
//8.5
/* нинаю */
//========================================//
//8.6
/* 
$a="12345678";
$b=str_split($a,2);
$z=explode(' ', $b);
$zwin=0;
for ($i=4; $i <4 ; $i++4) { 
$zwin+=$z[$i];
}
echo $zwin;
//Не работает
*/































?>