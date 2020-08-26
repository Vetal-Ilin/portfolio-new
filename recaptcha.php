<?php

define('SITE_KEY', '6Lc1ssEZAAAAAP1E7BUvqDcLp1EyXaK9jgh5n9Ch');
define('SECRET_KEY', '6Lc1ssEZAAAAAI_gxZ_NaeCv6amgOTh2sOyPN1nK');

/*ОБРАБОТКА ЗАПРОСА*/
if($_POST){
    /*СОЗДАЕМ ФУНКЦИЮ КОТОРАЯ ДЕЛАЕТ ЗАПРОС НА GOOGLE СЕРВИС*/
    function getCaptcha($SecretKey) {
        $Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_KEY."&response={$SecretKey}");
        $Return = json_decode($Response);
        return $Return;
    }
    
    /*ПРОИЗВОДИМ ЗАПРОС НА GOOGLE СЕРВИС И ЗАПИСЫВАЕМ ОТВЕТ*/
    $Return = getCaptcha($_POST['g-recaptcha-response']);
    /*ВЫВОДИМ НА ЭКРАН ПОЛУЧЕННЫЙ ОТВЕТ*/
    var_dump($Return);
    
    /*ЕСЛИ ЗАПРОС УДАЧНО ОТПРАВЛЕН И ЗНАЧЕНИЕ score БОЛЬШЕ 0,5 ВЫПОЛНЯЕМ КОД*/
    if($Return->success == true && $Return->score > 0.5){
      echo("<script>console.log('recaptcha удачно пройдена !');</script>");
    }
    else {
      echo("<script>console.log('recaptcha НЕ ПРОЙДЕНА');</script>");
    }
}
?>