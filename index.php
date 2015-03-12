<?php
$num = 1;

for ($i = 1; $i <= 100; $i++){

if (($num % 5 == 0) && ($num % 7 == 0)){
echo 'Fizz Buzz<br/>';

} else if (($num == 5) || ($num % 5 == 0)){
echo 'Fizz<br/>';

} else if (($num == 7) || ($num % 7 == 0)){
echo 'Buzz<br/>';

} else{
echo $num.'<br/>';

}
$num++;

}

?>