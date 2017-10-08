<?php
class upload{

    public function __construct(){

    }

    public function func(){
        $uploaddir = '../public_html/img/saved1/';
        $fh = fopen("testfile30.txt", 'w') or die("Failed to create file");

        $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);




        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
            $text = 'Файл корректен и был успешно загружен'.$uploadfile;
            fwrite($fh, $text) or die("Could not write to file");
        } else {
            $text = 'Возможная атака с помощью файловой загрузки!!!!'.$uploadfile;
            fwrite($fh, $text) or die("Could not write to file");


        }

        fclose($fh);
       return $uploadfile;


    }
}
?>