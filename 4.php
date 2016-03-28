<?php
echo '<p>4. Написать функцию, которая выводит список файлов в заданной
директории. Директория задается как параметр функции.</p>
';

listFile('Planet');

function listFile($dir){
    echo '<pre>';
    print_r(scandir($dir));
}