<?php
Error_Reporting(E_ALL & ~E_NOTICE);//не выводить предупреждения
 function __autoload ($class_name) //автоматическая загрузка кслассов
 {
    $path=str_replace("_", "/", $class_name);//разбивает имя класска получая из него путь
    include_once($path .".php");//подключает php файл по полученному пути	
 }
 //константы для подключения к базе данных
 define('HOST', '176.37.107.153'); 		//сервер
 define('USER', 'sas'); 			//пользователь
 define('PASSWORD', 'qaz123qwe'); 			//пароль
 define('NAME_BD', 'site');		//база
 $connect = mysqli_connect(HOST, USER, PASSWORD)or die("Невозможно установить соединение c базой данных".mysql_error( ));
// mysql_select_db(NAME_BD, $connect) or die ("Ошбка обращения к базе ".mysql_error());	
// mysql_query('SET names "utf8"');   //база устанавливаем кодировку данных в базе
?>