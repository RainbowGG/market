<?php
Error_Reporting(E_ALL & ~E_NOTICE);//�� �������� ��������������
 function __autoload ($class_name) //�������������� �������� ��������
 {
    $path=str_replace("_", "/", $class_name);//��������� ��� ������� ������� �� ���� ����
    include_once($path .".php");//���������� php ���� �� ����������� ����	
 }
 //��������� ��� ����������� � ���� ������
 define('HOST', 'localhost'); 		//������
 define('USER', 'root'); 			//������������
 define('PASSWORD', ''); 			//������
 define('NAME_BD', 'LifeExampleShop');		//����
 $connect = mysql_connect(HOST, USER, PASSWORD)or die("���������� ���������� ���������� c ����� ������".mysql_error( ));
 mysql_select_db(NAME_BD, $connect) or die ("����� ��������� � ���� ".mysql_error());	
 mysql_query('SET names "utf8"');   //���� ������������� ��������� ������ � ����