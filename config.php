<?php
Error_Reporting(E_ALL & ~E_NOTICE);//не выводить предупреждени€
 function __autoload ($class_name) //автоматическа€ загрузка кслассов
 {
    $path=str_replace("_", "/", $class_name);//разбивает им€ класска получа€ из него путь
    include_once($path .".php");//подключает php файл по полученному пути	
 }
 //константы дл€ подключени€ к базе данных
 define('HOST', 'localhost'); 		//сервер
 define('USER', 'root'); 			//пользователь
 define('PASSWORD', ''); 			//пароль
 define('NAME_BD', 'LifeExampleShop');		//база
 $connect = mysql_connect(HOST, USER, PASSWORD)or die("Ќевозможно установить соединение c базой данных".mysql_error( ));
 mysql_select_db(NAME_BD, $connect) or die ("ќшбка обращени€ к базе ".mysql_error());	
 mysql_query('SET names "utf8"');   //база устанавливаем кодировку данных в базе