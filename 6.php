<p>6. Создать страницу, на которой можно загрузить несколько
    фотографий в галерею. Все загруженные фото должны помещаться
    в папку gallery и выводиться на странице в виде таблицы.</p>

<form action="" method="post" enctype="multipart/form-data"">
    <div>
        <input type="file" name="file" id="file-field" multiple />
    </div>

    <input type="submit" value="Send"></p>
</form>


<?php
$dir = 'gallery';
$arr_dir = scandir($dir);
foreach($arr_dir as $key => $file){
    if(file_exists($dir.'/'.$file) && $file != '.' && $file != '..') {
        if($key % 4 == 0){?>
            <img src="<?=$dir.'/'.$file ?>" width="200px"/> <br>
            <?php
        }else{ ?>
            <img src="<?=$dir.'/'.$file ?>" width="200px"/>
            <?php
        }
    }
}

if($_FILES){
    $name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];

    $uploads_dir = 'gallery';

    if(move_uploaded_file($tmp_name,"$uploads_dir/$name")){
        echo "All good.\n";
    } else {
        echo "Возможная атака с помощью файловой загрузки!\n";

    }

}

