Event/GIT/SUSL
<html>	
	<head>	
		<title>PHP 1</title>
	</head>
<body>
	<h1>My first php page</h1>
<br>
<?php  echo "Hello World";
echo "<br>";

//concatenate one way
$txt ="The introduction of php";
echo "Welcom to the"." " .$txt;
echo "<br>";

//concatenate second way
echo "welcom to the {$txt}";
echo "<br>";

//concatenate issue of single quotation
echo 'welcom to the {$txt}';
echo "<br>";

//function return the data type and value
$x = "5856";
var_dump($x);
echo "<br>";

//print variable value
$decimal_var= 32;
echo $decimal_var;
echo "<br>";

//maximum value
$var = PHP_INT_MAX;
echo var_dump($var);
echo "<br>";
$var = PHP_FLOAT_MAX;
echo var_dump($var);
echo "<br>";

//variable float
$x=2.67;
$y=10.986;
echo var_dump($x);
echo "<br>";
echo var_dump($y);
echo "<br>";
echo var_dump($x+$y);
echo "<br>";
$s="foolish girl when I meet in my life";
$c="hello ahinsa you are the ";
$sentence = $c;
$sentence .=$s;
echo $sentence;
echo "<br>";

//simple letters
echo strtolower($sentence);
echo "<br>";
//capital letters

echo strtoupper($sentence);
echo "<br>";

//length of the sentence
echo strlen($sentence);
echo "<br>";
echo str_shuffle($sentence);
echo "<br>";

//bollean
$x=true;
$y=false;
var_dump($x);
echo "<br>";

//Array
$myArray=array("Ahinsa",45,"panadura");
var_dump($myArray);
echo "<br>";
echo($myArray[0]);
echo "<br>";
//nul
$x="hellow";
$x =null;
var_dump($x);
echo "<br>";

//constant

define ("name","Ahinsa");
echo name;
echo "<br>";

//predefined constants
echo TRUE;
echo "<br>";
echo PHP_VERSION;
echo "<br>";
echo PHP_OS;
echo "<br>";
echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo PHP_DATADIR;
echo "<br>";

//Operaters
$a =5;
$b=7;
$c = $a+$b;
echo "sum is = $c";
echo "<br>";

$a =9;
$b=7;
$c = $a+$b;

//Addition
$c = $a+$b;
echo "sum is = $c";
echo "<br>";

//Subtraction
$c = $a-$b;
echo "sum is = $c";
echo "<br>";

//Multiplication
$c = $a*$b;
echo "sum is = $c";
echo "<br>";

//Divition
$c = $a/$b;
echo "sum is = $c";
echo "<br>";

//Modulus
$c = $a%$b;
echo "sum is = $c";
echo "<br>";

//Increment
$d=++$b;
echo "sum is = $d";
echo "<br>";

//Decrement
$g=--$b;
echo "sum is = $g";
echo "<br>";

//comparison
$a=(true and true);
$b=(true and false);

var_dump($a);
echo "<br>";
var_dump($b);

//Assingment Operaters
$a=8;
$c=2;
$c += $a;
echo " $c";
echo "<br>";

$c -= $a;
echo " $c";
echo "<br>";

$c *= $a;
echo " $c";
echo "<br>";

$c /= $a;
echo " $c";
echo "<br>";
$c %= $a;
echo " $c";
echo "<br>";
//write program to computer/print mixed arithmatic operater 

$a=2;
$b=5;
$c=7;
$x=5.0;
$y=3.0;
$z=7.0;

$d =$a+$c%$a ;
echo " $d";
echo "<br>";

$d =$b*$c/$a ;
echo " $d";
echo "<br>";

$w =$y*$z/$x+$b ;
echo " $w";
echo "<br>";

$d =$z/$x/$y*$a ;
echo " $d";
echo "<br>";

$w =$c/($a+$c)/$b ;
echo " $w";
echo "<br>";

$a =$a+1+$b/3 ;
echo " $a";
echo "<br>";


//Write PHP program for a given MATH formula

$base=3;
$height1=5;
$height2=7;
$area =$base*($height1+$height2)/2;
echo " Area is = $area cm2";
echo "<br>";


//Write PHP program to compute the following
$x=2;
$f=((pow($x,3))-(2*$x^$x)+$x-6.3)/(($x^$x)+(0.05*$x)+3.14);
echo " Answer= $f";
echo "<br>";


//revers a number
//Suppose you are given a number in the rang(100 99)
//write a programe revers it
//forn example, num is 257 , revers is 852

$num = 456;  
$revnum = 0;  
while ($num >100 && $num <999)  
{  
$rem = $num % 10;  
$revnum = ($revnum * 1) + $rem;  
$num = ($num / 1);   
}  
echo "Reverse number of 456 is: $revnum"; 

//compute volume
$r=7 ; //radius
$h=10;//heigh
$PI=22/7; 
 $v = $PI*pow($r,2)*$h;
 echo " Answer= $v";
echo "<br>"; 
 
 //conditionals
 //if condition
 $a=8;
 $b=5;
 if($a>$b)
 {
	 echo "a is bigger than b";
 }
 echo "<br>"; 

 $a=5;
 $b=6;
  $c= 30;
 $d=40;
 if(($a<$c) && ($b<$d))
 {
	 echo "a and b are larger";
 }
echo "<br>"; 

//if-else condition
$a=10;
 $b=6;

if($a>$b)
 {
	 echo "a is geater than b ";
 }

else {
	echo "a is not geater than b ";

}
echo "<br>"; 

//cascaded satatment
$a=40;
 $b=20;

if($a>$b)
 {
	 echo "a is geater than b ";
 }

else if($a==$b) {
	echo "a equal to b ";

}
else {
	echo "a is smaller than b ";
}
echo "<br>"; 


$mark=6;

if($mark>90)
 {
	 echo "Grade A ";
 }

else if($mark>80) {
	echo "Grade B ";

}
else if($mark>70) {
	echo "Grade C ";

}
else if($mark>60) {
	echo "Grade D ";

}
else if($mark>40) {
	echo "Grade E ";

}
else {
	echo "Grade F ";

}

echo "<br>"; 


//switch statement
$i=1;
switch($i){
	case 0:
	echo "i equals 0";
	break;
	case 1:
	echo " i equals 1";
	case 2:
	break;
	echo "i equals 2";
	break;
}

echo "<br>"; 

$bp=357;
switch($bp){
	case 100:
	echo "water";
	break;
	case 357:
	echo "Mercury";
	case 1187:
	break;
	echo "Copper";
	break;
	case 2193:
	break;
	echo "Silver";
	break;
	case 2660:
	break;
	echo "Gold";
	break;
	default:
	echo "substance unknown";
}

echo "<br>";
//while loop
$num = 2;
while($num <=10)
{
	echo"number is $num";
	echo"<br/>";
	$num = $num+2;
}
echo"done";

echo "<br>"; 

$i = 0;
$num =50;
while($i <10)
{

	$num--;
	$i++;
}
echo"Loop stopped at i =$i and num =$num";
echo "<br>"; 


//do while loop
$num =1;
do {
	echo"number is $num";
	echo"<br/>";
	$num++;
}
while($num<=10);
echo "Done";
	
	echo "<br>"; 

for($num =10;$num >=1;$num--)
{
	echo "number is $num <br>";
}
echo "<br>"; 



// write a php program to display all the numbers  that are lower than 100
$num = 2 ;
while ($num < 100 )
{
$count=0;
for ( $i=1;$i<=$num;$i++)
{
if (($num%$i)==0)
{
$count++;
}
}
if ($count<3)
{
echo $num." , ";
}
$num=$num+1;
}

echo "<br>";

$num=2;
$x=1;
for($num=1;$num<=100;$num++)
{
	($num%$x)==1;
	
	$num=$num+1;
$x++;
	echo $num .",";}

































?>

</body>
</html>
