<?php
session_start();
?>
<p>7. Создать гостевую книгу, где любой человек может оставить комментарий
    в текстовом поле и добавить его. Все добавленные комментарии
    выводятся над текстовым полем.</p>

<?php
if(!empty($_POST)) {
    $_SESSION['comment'][] = $_POST['comments'];
    foreach($_SESSION['comment'] as $dat => $com){
        echo $dat.'03.2016'.'<br> '.$com.'<br>';
    }

}
?>

<form action="" method="post">
    <textarea name="comments" value=""></textarea>
    <input type="submit"/>
</form>




