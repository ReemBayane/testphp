<?php 
 // Write a PHP program to get the absolute difference between n and 51. If n is greater than 51 return triple the absolute difference
 $n = 51 ;
 
 $difference=51-$n;


  if ($n>51){
    $difference=abs($difference * 3);

   echo $difference;
}

echo $difference ."\n" ;


//Write a PHP program to check two given integers, and return true if one of them is 30 or if their sum is 30.
$a= 14;
$b= 15;

$somme=$a+$b ;
if($a=30 or $somme=30){
    echo 'true' ."\n";
}

//Write a PHP program to check a given integer and return true if it is within 10 of 100 or 200
$a= 89;
if (90 <$a and $a <210){
    echo "true";
}
echo"false" ."\n";



//Write a PHP program to create a new string where 'if' is added to the front of a given string. If the string already begins with 'if', return the string unchanged.

$str="if else";


function addif($str)
{
  if (strlen($str) >= 2 && substr($str,0, 2) === "if")
            {
                return $str;
            }
      return "if ".$str;
}
echo addif("if else")."\n";
echo addif("else")."\n";
echo addif("if")."\n";

//Write a PHP program to remove the character in a given position of a given string. The given position will be in the range 0..string length -1 inclusive



function positionremove($str,$p){
    return substr($str,0,$p).substr($str,$p+1,strlen($str)-$p);
}
echo positionremove("Python", 1)."\n";
echo positionremove("Python", 0)."\n";
echo positionremove("Python", 4)."\n";

//Write a PHP program to exchange the first and last characters in a given string and return the new string

function exchangeposition($str){
    return strlen($str) > 1 ? substr($str, strlen($str) - 1).substr($str, 1, strlen($str) - 2). substr($str, 0, 1) : $str;
}
echo exchangeposition("abcd")."\n" ;
echo exchangeposition("xy")."\n ";
echo exchangeposition("blablabla")."\n" ;

//Write a PHP program to create a new string which is 4 copies of the 2 front characters of a given string. If the given string length is less than 2 return the original string

function charcopy($str){
    if (strlen($str)<2) {
        return $str  ;
        echo ($str) ;
    }else {

return substr($str, 0, 2).substr($str, 0, 2).substr($str, 0, 2).substr($str, 0, 2);
    }
}
echo charcopy("C Sharp")."\n" ;
echo charcopy("JS")."\n" ;
echo charcopy("A")."\n" ;


//Write a PHP program to create a new string with the last char added at the front and back of a given string of length 1 or more

function addlast($str){
 
    $s = substr($str, strlen($str) - 1);
    return $s.$str.$s;
     }

echo addlast("Red") ."\n" ;
echo addlast("green") ."\n" ;
echo addlast("01") ."\n" ;


//Write a PHP program to check if a given positive number is a multiple of 3 or a multiple of 7

function checknumber($a){
    if ($a>= 0  && ((($a % 3) === 0)or ($a % 7) ===  0)) {
        echo ('true') ;
    }
  echo('false');
}

echo checknumber(3)."\n" ;
echo checknumber (14) ."\n" ;
echo checknumber(21)."\n" ;
echo checknumber(-25)."\n" ;

//Write a PHP program to create a new string taking the first 3 characters of a given string and return the string with the 3 characters added at both the front and back. If the given string length is less than 3, use whatever characters are there

function rewritestr($str){
    if (strlen($str) < 3)
    {
        return $str.$str.$str;
    }
    else
    {
        $s = substr($str, 0, 3);
        return $s.$str.$s;
    }
}
echo rewritestr("python")."\n" ;
echo rewritestr("JS")."\n" ;
echo rewritestr("CODE")."\n" ;

//Write a PHP program to check if a given string starts with 'C#' or not

function checkC($str){
    $s=substr($str,0,2);
    echo($s);
    if ($s==="C#"){
        return "true";
    
    }else {
        return"false";
    }
}
echo checkC("C#D")."\n" ;
echo checkC("php")."\n" ;
echo checkC("C")."\n" ;

//Write a PHP program to check if one given temperatures is less than 0 and the other is greater than 100

function tempcheck($s,$r){

    return $s < 0 && $r > 100 || $r < 0 && $s > 100;
}
var_dump (tempcheck(120 , -1))."\n" ;
var_dump (tempcheck(-1, 120)) ."\n" ;
var_dump (tempcheck(2, 120)) ."\n" ;

//Write a PHP program to check two given integers whether either of them is in the range 100..200 inclusive
function integercheck($int1,$int2){
    return  $int1 < 200 && $int1 > 100 ||$int2 < 200 && $int2 > 100 ;
}


var_dump(integercheck(100,199))."\n" ;
var_dump(integercheck(250,300))."\n" ;
var_dump(integercheck(105,190))."\n" ;

//Write a PHP program to check whether three given integer values are in the range 20..50 inclusive. Return true if 1 or more of them are in the said range otherwise false

function intcheck($int1,$int2,$int3){
    return $int2 < 50 && $int1 > 20 ||$int2 < 20 && $int2 > 50 ||$int3 < 20 && $int3 > 50 ;
}

var_dump(intcheck(11,20,12))."\n" ;
var_dump(intcheck(30,30,17))."\n" ;
var_dump(intcheck(25,35,49))."\n" ;
var_dump(intcheck(15,12,8))."\n" ;

// Write a PHP program to check whether two given integer values are in the range 20..50 inclusive. Return true if 1 or other is in the said range otherwise false
function nbrcheck($int1,$int2){
    return  $int1 < 50 && $int1 > 20 ||$int2 < 20 && $int2 > 50 ;
}


var_dump(nbrcheck(21,84))."\n" ;
var_dump(nbrcheck(14,50))."\n" ;
var_dump(nbrcheck(11,45))."\n" ;
var_dump(nbrcheck(25,40))."\n" ;

//Write a PHP program to check if a string 'yt' appears at index 1 in a given string. If it appears return a string without 'yt' otherwise return the original string

function ytcheck($str){
    $s = substr($str,0,2);
    if ($s == "yt"){
        return substr($str,2,strlen($str)-2);
    }
    return $str ;
}
echo ytcheck("python")."\n" ;
echo ytcheck("ytade")."\n" ;
echo ytcheck("jsues")."\n" ;
echo ytcheck("yt")."\n" ;
echo ytcheck("bytag")."\n" ;

//Write a PHP program to check the largest number among three given integers

echo max(1 ,2 ,3)."\n" ;
echo max(1 ,1 ,1)."\n" ;
echo max(1 ,3 ,2)."\n" ;
echo max(1 ,2 ,2)."\n" ;

//Write a PHP program to check which number nearest to the value 100 among two given integers. Return 0 if the two numbers are equal

function nearest($int1 , $int2){
    if ( (100-$int1)<(100-$int2)){
        return $int1;
    }return $int2;




}
echo nearest(78 , 95)."\n" ;
echo nearest(25 , 35)."\n" ;
echo nearest(40 , 50)."\n" ;
echo nearest(90 , 90)."\n" ;



?>
