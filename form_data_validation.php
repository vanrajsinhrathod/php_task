<?php
$username = $_GET['username']; // small , 2 digit, special character
$name = $_GET['name']; // capital , small, space
$email = $_GET['email']; // 
$mobile = $_GET['mobile']; // 10 digit

// simple output
// echo "Username : $username";
// echo "<br>";
// echo "Name : $name ";
// echo "<br>";
// echo "E-mail : $email";
// echo "<br>";
// echo "Mobile : $mobile";
// echo "<br>";

// username
/* Note : [a-z] => Charachter Alphabet as a small => a to z.
          [0-9] => for Digit => 0 to 9 numbers.
          [\d] => for Digit => 0 to 9 numbers.

     if sort the number, 
     using curly brackets {10} => only 10 digit number assumed it.
          [\#$%^&*()_+=<>?] => for special character
*/
if(preg_match("/^[a-z]+[\d]{2}+[\#$%^&*()_+=<>?]{1}$/",$username))
{
    echo "$username is correct";
    echo "<br>";
}
else
{
    echo "$username is Not correct";
    echo "<br>";
}

// name
if(preg_match("/^[a-zA-Z ]*$/",$name))
{
    echo "$name is correct";
    echo "<br>";
}
else
{
    echo "$name is Not correct";
    echo "<br>";
}
    
// email
if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $email)) 
{
    echo "$email valid email address";
    echo "<br>";
}
else
{
    echo "$email Invalid E-mail address";
    echo "<br>";
}

// Mobile
if(preg_match("/^[0-9]{10}$/",$mobile))
{
    echo "$mobile is correct";
    echo "<br>";
}
else
{
    echo "$mobile is Not correct";
    echo "<br>";
}

?>