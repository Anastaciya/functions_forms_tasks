<p>1. Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только
	те слова, которые
есть и в первом и во втором поле ввода.
Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b),
	которая будет возвращать массив с общими словами.
</p>

<form action="" method="post">
	<textarea name="str1" value=""></textarea>
	<textarea name="str2" value=""></textarea>
	<input type="submit"/>
</form>


<?php

if(!empty($_POST)){
  
	$a = explode(" ", $_POST['str1']);
	$b = explode(" ", $_POST['str2']);
  	$c = getCommonWords($a, $b);
	echo "<pre>";
	print_r($c);
}


function getCommonWords($a, $b){

	foreach($a as $val_a){
		foreach($b as $val_b){
			if($val_a == $val_b){
				$c[] = $val_b;
			}
		}
	}
	return $c;
}

