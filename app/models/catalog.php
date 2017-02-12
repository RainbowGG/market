<?php
//Модель вывода каталога
 class Application_Models_Catalog
  {	  
	  function getList()
	  { 
		 $sql = "SELECT * FROM product";
		 $result = mysql_query($sql)  or die(mysql_error());
	
		 while ($row = mysql_fetch_assoc($result))
		 {		 
			$сatalogItems[]=array(
				"id"=>$row['id'],
				"name"=>$row['name'],
				"price"=>$row['price']
			);
		  }
		
		
		 return $сatalogItems; 
	  }
  } 
 /*
  Автор: Авдеев Марк.
  e-mail: mark-avdeev@mail.ru
  blog: lifeexample.ru
*/
?>  
  