<!DOCTYPE html>
<html>
<head>
   <title>php examples</title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

<?php
// value store in variable 
$txt = "i am here...";
echo "shivalik, $txt";
?>

<?php
echo "<br>";
$demo_1 = "how are you?";
echo "hello, world. ".$demo_1."";
?>

<?php
echo "<h3> * sum </h3>";
$x = 5;
$y = 6;
echo $x + $y;
echo "<h3> * substraction </h3>";
echo $x - $y;
echo "<h3> * multiplying </h3>";
echo $x * $y;
echo "<br>";
?>
<?php
$u = 9;
$v = 4;
$z = $u + $v;
$x = $u - $v;
$c = $u * $v;
$s = $u / $v;
$a = $u % $v;
$m = ($u + $v) * ($u - $v) / ($u * $v);

echo "sum is $z";
echo "<br>";
echo "substraction $x";
echo "<br>";
echo "multiplication $c";
echo "<br>";
echo "division $s";
echo "<br>";
echo "modulo division $a";
echo "<br>";
echo $m;
echo "<br>";
?>
<?php
echo "<h3> * global scope variable / outside function </h3>";
$k = 7; // global scope variable

function myTest(){
  // using 'x' inside this function  will generate an error
  echo "<p>variable k inside function is $k</p>";
}
myTest();
echo "<p>variable k inside function is: $k</p>";
?>
<?php
// function myDiv(){
//   $t = 8;
//   echo "<p>variable t inside fucntion is:$x</p>";
// }
// myDiv();

?>
<?php
echo "<h3> * addition using function </h3>";
$p = 5;
$a = 2;

function myDesh(){
  global $p , $a;
   $a = $p + $a;
}
myDesh();
echo $a;
?>

<?php
echo "<h3> * function using GLOBALS['INDEX'] </h3>";
$s = 3;
$r = 12;

function myAction(){
  $GLOBALS['r'] = $GLOBALS['s'] + $GLOBALS['r'];
}
myAction();
echo $r;
?>
<?php
echo "<h3> function using static </h3>";
function myCore(){
  static $f = 0;
  echo $f;
  $f++;
  echo "<br>";
}
myCore();
myCore();
myCore();
myCore();
myCore();
myCore();
?>

<?php
echo "<h3> * using print </h3>";
$txt1 = "using system";
$x = 2;
$y = 3;

print "$txt1";
print "<br>";
print "<h3> * Addition using print </h3>";
print $x + $y;
?>

<?php
echo "<h3> * String Length </h3>";
// using variable 
$x = "vanrajsinh";
echo strlen($x);
// without variable
// echo strlen("vanrajsinh");
?>
<?php
echo "<h3> * String word counting </h3>";
$x = "mansinh rathod fulabhai";
echo str_word_count($x);
?>

   <form method='POST'>
        <h2>Please input your name:</h2>
        <input type="text" name="name">
        <input type="submit" value="Submit Name">
    </form>
<?php
//Retrieve name from query string and store to a local variable
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        echo "<h3> Hello $name </h3>";
    }
?>

<?php
// for date
 $currMonth=date('F', time());
 if ($currMonth == 'August'){
   echo "<p>It's August, so it's really hot.</p>";
 }else{
   echo "<p>Not August, so at least not in the peak of the heat.</p>";
 }
  
 ?>
 <?php
 echo "<h3> (1) ip_address </h3>";
//whether ip is from share internet
if (!empty($_SERVER['HTTP_CLIENT_IP']))   
  {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
  }
//whether ip is from proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
  {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
//whether ip is from remote address
else
  {
    $ip_address = $_SERVER['REMOTE_ADDR'];
  }
echo $ip_address;
?>
<?php
echo "<h3> (2) First character color is 'red' </h3>";
$text = 'PHP Tutorial';
$text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
echo $text;
?>

<?php
echo "<h3> (3) Current script owner </h3>";
echo 'Current script owner: ' . get_current_user()."\n";
?>

<?php
echo "<h3> (4) User agent </h3>";
echo "User agent:".$_SERVER['HTTP_USER_AGENT'];
?>

<?php
echo "<h3> (5) Current File Name </h3>";
$current_file_name = basename($_SERVER['PHP_SELF']);
echo $current_file_name;
?>

<?php
// valid / Invalid => Email Address
echo "<h3> (6) valid / invalid email address </h3>";
$email = "example@example.com";
if(filter_var($email,FILTER_VALIDATE_EMAIL))
{
  echo '"' . $email . '" = Valid'."\n";
}
else
{
  echo '"' . $email . '" = invalid'."\n";
}
?>

<?php
// last modified
echo "<h3> (7) File last modified  </h3>";
$current_file_name = basename($_SERVER['PHP_SELF']);
$file_last_modified = filemtime($current_file_name);
echo "Last modified" .date("l, dS F, Y, h:ia", $file_last_modified)."\n";
?>

<?php
// var_dump - for check variable DATATYPE
echo "<h3> (8) Different DATATYPES  </h3>";
$i = 2;
var_dump($i); // OUPUT -> int(2)
?>
<?php
echo "<br>";
// var_dump - for check variable DATATYPE
$j = 10.05;
var_dump($j); // OUTPUT -> float(10.05)
?>
<?php
// var_dump - for check variable DATATYPE
echo "<br>";
$k = "abc";
var_dump($k); 
/*OUTPUT -> string(3) "abc" ,
here 'string(3)'-> is a lengh of string
      "abc" ->  is a value
*/
?>

<?php
// var_dump - for check variable DATATYPE
// here, create "array"
// different types colorname store in $colors
echo "<br>";
$colors = array("red","blue","gray","skyblue","orange","yellow");
var_dump($colors);
/* OUTPUT :
array(6) { [0]=> string(3) "red" 
          [1]=> string(4) "blue" 
          [2]=> string(4) "gray" 
          [3]=> string(7) "skyblue" 
          [4]=> string(6) "orange" 
          [5]=> string(6) "yellow" }
*/
?>
<?php
// $vehicle = array(
//   'a' => "bus",
//   'b' => "rikshaw",
//   'c' => "car",
//   'd' => "train",
//   'e' => "bike",
//   'f' => "cycle",
//   'g' => "truck"
// );
echo "<h3> (8) Array as a KEY => Value </h3><br>";
$vehicle = array(
  'a' => 1, // 'a' =Key, 1 = value
  'b' => 11,
  'c' => 21,
  'd' => 31,
  'e' => 41,
  'f' => 51,
  'g' => 61
);
echo $vehicle['a']; // single element define get output
echo "<br>";
echo $vehicle['b'];
echo "<br>";
echo $vehicle['c'];
echo "<br>";
 
// print_r($vehicle); 
?>
<?php
echo "<h3> (9) use of static </h3>";
function myPHP(){
  static $x = 0;
  echo $x;
  $x++;
}
myPHP(); // OUTPUT : 0
myPHP(); // OUTPUT : 1
myPHP(); // OUTPUT : 2
myPHP(); // OUTPUT : 3
myPHP(); // OUTPUT : 4
/* 
OUTPUT : 01234
*/
?>

<?php
 // array using 'for loop' increment
 echo "<h3> (10) Array using 'for loop' increment</h3>";
$vehicle_type = array("bus","car","train","truck","bike");
$vehicleLength = count($vehicle_type);

for($x=0; $x < $vehicleLength; $x++){
  echo $vehicle_type[$x];
  echo "<br>";
  /* 
  OUTPUT : bus
           car
           train
           truck
           bike
  */
}
?>

<?php
// array using foreach loop
echo "<h3> Array using foreach loop </h3> <br>";
$vehicle = array(
  'a' => "bus",
  'b' => "rikshaw",
  'c' => "car",
  'd' => "train",
  'e' => "bike",
  'f' => "cycle",
  'g' => "truck"
);

foreach ($vehicle as $x_key => $x_value) {
  echo "Key=" . $x_key . ", Value=" . $x_value;
  echo "<br>";
  /* 
  OUTPUT : Key=a, Value=bus
              Key=b, Value=rikshaw
              Key=c, Value=car
              Key=d, Value=train
              Key=e, Value=bike
              Key=f, Value=cycle
              Key=g, Value=truck
  */
}
?>

<?php
echo "<h3> create class and class inside create function </h3>";
class Car {
    function Car() {
        $i = "scorpio";
        echo $i;   
      }
}
// create an object
$xs = new Car();
// show object properties
echo $xs->Car();
?>

<?php
echo "<h3> * Function using 'Three' variable</h3>";
function myTest1($u,$v,$k){
 echo $u.''.$v.''.$k;
}
myTest1('vanraj','sinh','rathod');
// OUTPUT : vanrajsinhrathod
?>
</body>
</html>
