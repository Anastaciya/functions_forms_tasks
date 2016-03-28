<p>3. Есть текстовый файл. Необходимо удалить из него все слова, 
длина которых превыщает N символов. Значение N задавать через форму. 
Проверить работу на кириллических строках - найти ошибку, найти решение.</p>

<form action="" method="post">
	<textarea name="n" value=""></textarea>
	<input type="submit"/>
</form>

<?php 

if(!empty($_POST)) {
	$n = $_POST['n'];

	$file = file_get_contents('new_file.txt');
	$arr_text = explode(' ', $file);
	//echo '<pre>';
	//print_r($arr_text);

	foreach ($arr_text as $word) {
		if (strlen($word) <= $n) {
			$new_arr[] = $word;
		}
	}

	$new_str = implode(" ", $new_arr);
	file_put_contents('new_file.txt', $new_str);
	$new_file = file_get_contents('new_file.txt');

	echo $new_file;
}