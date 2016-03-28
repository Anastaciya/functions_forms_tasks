<p>10. Написать функцию, которая считает количество уникальных слов в
    тексте. Слова разделяются пробелами. Текст должен вводиться с формы.</p>

<form action="" method="post">
    <textarea name="text" value=""></textarea>
    <input type="submit"/>
</form>

<?php

if(!empty($_POST)){

    //print_r(countsNumberWords($_POST['text']));
    //$kol_un_words =
    echo 'Answer: '.countsNumberWords($_POST['text']);
}

function countsNumberWords($text){
    $arr_text = explode(' ',$text);

    $new_text= " ";
    foreach($arr_text as $key => $word){
        if(strripos($new_text,$word) == true){
            $arr_key[] = $key;
        }else{
            $new_text .= ' '.$word;
            unset($arr_text[$key]);
        }

    }

    $arr_text = explode(' ',$text);
    foreach($arr_key as $key => $val){
        unset($arr_text[$val]);
    }

    $kol_un_words = count($arr_text);

    return($kol_un_words);
}