
<p>9. Написать функцию, которая переворачивает строку. Было "abcde",
    должна выдать "edcba". Ввод текста реализовать с помощью формы.</p>

<?php
$str = 'abcde';

function Rev($str){
    $str = strrev($str);
    return $str;
}

echo Rev($str);