<?php
session_start();
?>
<p>8. Создать гостевую книгу, где любой человек может оставить комментарий в
    текстовом поле и добавить его. Все добавленные комментарии выводятся над
    текстовым полем.
    Реализовать проверку на наличие в тексте запрещенных слов, матов.
    При наличии таких слов - выводить сообщение "Некорректный комментарий".
    Реализовать удаление из комментария всех тегов, кроме тега &lt;b&gt;.</p>


<?php
if(!empty($_POST)) {

    $mats= array('bed','frog','hours','monkey');
    $arr_comments = explode(' ',$_POST['comments']);


        if(array_intersect($arr_comments,$mats) == true){
            echo('Некорректный комментарий!');
        }else{
            $_SESSION['comment'][] = strip_tags($_POST['comments']);
            foreach($_SESSION['comment'] as $dat => $com) {
                echo $dat . '03.2016' . '<br> ' . $com . '<br>';
            }
        }
}
?>

<form action="" method="post">
    <textarea name="comments" value=""></textarea>
    <input type="submit"/>
</form>




