<p>5. Написать функцию, которая выводит список файлов в заданной директории,
    которые содержат искомое слово.  Директория и искомое слово задаются
    как параметры функции.</p>

<?php

listFile('Planet','moon');

function listFile($dir,$word){
    $arr_dir = scandir($dir);
    foreach($arr_dir as $file){
        if(file_exists($dir.'/'.$file) && $file != '.' && $file != '..') {
            $text = file_get_contents($dir.'/'.$file);
            if (strripos($text, $word) == true) {
                echo '<b>'.$file."</b><br>";
                echo file_get_contents($dir.'/'.$file).'<br>';
            }
        }
    }
}

