<p>2. Создать форму с элементом textarea. При отправке формы скрипт должен
	выдавать ТОП3 длинных слов в тексте.
Реализовать с помощью функции.</p>


<form action="" method="post">
	<textarea name="str" value=""></textarea>
	<input type="submit"/>
</form>


<?php

if(!empty($_POST)){
  
	$arr_str = explode(" ", $_POST['str']);
  	$new_arr = getThreeLongWords($arr_str);
	echo '<pre>';
	print_r($new_arr);
	$max_len = count($new_arr);
	$min_len = $max_len -3;

	foreach($new_arr as $key => $long_word){
		if($key > $min_len){
			echo $long_word.'<br>';
        }
	}
}


function getThreeLongWords($arr_str){
	foreach($arr_str as $words){
			$word_leng = strlen($words);
			$new_arr[$word_leng] = $words;
	}
	krsort($new_arr);
	return $new_arr;
}

