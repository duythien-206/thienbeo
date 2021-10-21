<?php
$text = file('user.txt');

echo '<pre>';
echo print_r($text);
echo '</pre>';

$text2 = file_get_contents('users.txt');
echo $text2;

$string1 = '54, 1951061033, Tran Hong Son';

file_put_contents('users.text', $string1);

$text3 = file_get_contents('users.txt');
echo $text3;

$sring2 = '\n56, 1951061033, Cao Van Tan';

file_put_contents('users.txt',$string2, FILE_APPEND);

text5 = file_get_contents('users.txt');
echo $text5;
?>