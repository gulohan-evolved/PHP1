<?php
//7.1
/*
echo strtoupper('php');
*/
//=============================================//
//7.2
/*
echo strtolower('PHP');
*/
//=============================================//
//7.3
/*
echo ucfirst('london');
*/
//=============================================//
//7.4
/*
echo lcfirst('London');
*/
//=============================================//
//7.5
/*
echo ucwords('london is the capital of great britain');
*/
//=============================================//
//7.6
/*
echo ucfirst(strtolower('LONDON'));
*/
//=============================================//
//7.7
/*
echo strlen('html css php');
*/
//=============================================//
//7.8
/*
$password="D5dfgfW";
$as=strlen($password);
if ($as>5 && $as<10) {echo "Пароль подходит";}
else {echo "Придумайте другой пароль";}
*/
//=============================================//
//7.9
/*
$a='html css php';
echo substr ($a,0,4) ," ";
echo substr ($a,5,-4) ," ";
echo substr ($a,-3);
*/
//=============================================//
//7.10
/*
$zes="sea of thieves";
echo substr($zes, -3);
*/
//=============================================//
//7.11
/*
$hf="hrasfT:sdf";
if (substr($hf, 0,7)=='http://') {echo "да";}
else {echo "нет";}
*/
//=============================================//
//7.12
/*
$hf="hrasfT:sdf";
if (substr($hf, 0,7)=='http://' || substr($hf, 0,9)=='https://') {echo "да";}
else {echo "нет";}
*/
//=============================================//
//7.13
/*
$hf="hrasfT:sdf.png";
if (substr($hf, -4)=='.png') {echo "да";}
else {echo "нет";}
*/
//=============================================//
//7.14
/*
$hf="hrasfT:sdf.png";
if (substr($hf, -4)=='.png' || substr($hf, -4)=='.jpg') {echo "да";}
else {echo "нет";}
*/
//=============================================//
//7.15
/*
$xs="ifasfasweazxc";
$s=strlen($xs);
if($s>5) {$x=substr($xs,5)."...";echo "$x"; }
elseif ($s<=5) {echo "$xs";} 
*/
//=============================================//
//7.16
/*
$v="31.12.2013";
echo str_replace('.', '-', $v);
*/
//=============================================//
//7.17
/*
$str="arbuz sel na cifru";
echo str_replace(['a', 'b','c'], [1,2,3],$str); 
*/
//=============================================//
//7.18
/*
$str="1a2b3c4b5d6e7f8g9h0";
echo str_replace([1,2,3,4,5,6,7,8,9,0], '', $str);
*/
//=============================================//
//7.19


//7.20


//7.21


//7.22
/*
$s ='abc abc abc';
echo strpos($s, 'b');
*/
//=============================================//
//7.23
/*
$s ='abc abc abc';
echo strrpos($s, 'b');
*/
//=============================================//
//7.24
/*
$s ='abc abc abc';
echo strrpos($s, 'b',3);
*/
//=============================================//
//7.25
?>