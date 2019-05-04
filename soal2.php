<?php 
$user="abcdefgh";
$pass="1A2B3c4d";
$lowercase = preg_match('@[a-z]@', $user);
$uppercase = preg_match('@[A-Z]@', $pass);
$lowercase = preg_match('@[a-z]@', $pass);
$number    = preg_match('@[0-9]@', $pass);


if(!$uppercase || !$lowercase || !$number || strlen($pass)<= 7){
    echo "password harus lebih dari 8 karakter, mengandung huruf BESAR, huruf kecil dan angka <br/>";
}else{
    echo "password memenuhi kriteria <br/>";
}
if (!$lowercase || strlen($user) == 9) {
	echo "<br> 	Username harus 8 karakter dengan kombinasi huruf kecil";
}else {
	echo "Username memenuhi kriteria";
}
	
 ?>