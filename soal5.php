<!-- <?php 

// Function dengan parameter "$panjang"
function acakangkahuruf ($panjang)
{
	$karakter= 'QWERTYUIOPASDFGHJKLZXCVBNM1234567890qwertyuiopasdfghjklzxcvbnm';
	$string= '';

	//looping
	for ($i=0; $i < $panjang ; $i++) { 
		$pos = rand(0, strlen($karakter)-1);
		$string .=$karakter {$pos};
	}
	return $string;
}
	

 ?>
<p><?php echo acakangkahuruf(32); ?></p> -->

<?php
 
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 
function generate_string($input, $strength = 32) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
 
    return $random_string;
}
 
// Output: iNCHNGzByPjhApvn7XBD
echo generate_string($permitted_chars, 32)."</br>";
 
// Output: 70Fmr9mOlGID7OhtTbyj
echo generate_string($permitted_chars, 32)."</br>";
 
// Output: Jp8iVNhZXhUdSlPi1sMNF7hOfmEWYl2UIMO9YqA4faJmS52iXdtlA3YyCfSlAbLYzjr0mzCWWQ7M8AgqDn2aumHoamsUtjZNhBfU
echo generate_string($permitted_chars, 32);
 
?>