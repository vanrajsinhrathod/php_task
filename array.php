<?php
// add value to use array_push
echo "<h3> add value to use array_push</h3>";
$stack = array("orange", "banana");
array_push($stack, "apple", "lemon");
echo "<br>";
print_r($stack);
?>

<?php
 // array using 'for loop' increment
 echo "<h3> Array using 'for loop' increment</h3>";
$vew = array("bus","car","train","truck","bike");
$vewLength = count($vew);

for($x=0; $x < $vewLength; $x++){
  echo $vew[$x];
  echo "<br>";
}
?>

<?php
//simple array
echo "<h3>simple array</h3>";
/* print 0 to 10 */
$a = array(0,1,2,3,4,5,6,7,8,9);
print_r($a);
// empty array
// '$a' value store in empty array '$b'
$b = array();
for($i=0; $i<10; $i++){
  echo "<br>";
  echo $a[$i];
}
?>
<?php
//simple array
echo "<h4>simple array</h4>";
$ved = array("bus","car","train","truck","bike","bu","ca","trai","truc","bik");
print_r($ved);

// fetch array using for loop
echo "<h4>array multiple value using for loop <h4><br>";
$dev = array();

for($i=0; $i<10; $i++){
$dev[$i] = $ved[$i];
}
print_r($dev);
// using array foreach
echo "<h4>using foreach </h4><br>";

foreach ($ved as $x_key => $x_value) {
  echo "Key=" . $x_key . ", Value=" . $x_value.'<br>';
  echo "<br>";
}
?>

<?php
echo "<br>";
$var = array();

for($i=0;$i<10;$i++)
{
    $var[$i]=$i;
}
print_r($var);
?>
