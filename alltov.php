<?php
include "template/header.php";

/* echo '<div class="itemdiv">';
echo '<a href="2.php?id='.$row["tov_id"].'"><img class="tov_img" src="'.$row["tov_img"].'.'.$row["tov_imgtype"].'" /></a><br>';
echo '<table><tr><td colspan="2"> '.$row["tov_name"].'</td></tr>';
echo '<tr><td>'.$row["tov_price"].'</td><td><input name="'.$row["tov_name"].'" class="tovbtt" type="submit" value="submit"/></td></tr></table></div>';
$i++;
}
}else{echo '00000';} */

?>
<script>
var priceList = {

<?php	
error_reporting(E_ALL);
require_once "./config.php"; //файл настроек
$sql = "SELECT tov_id, tov_name, tov_price, tov_img, tov_imgtype FROM site.tov_old;";
$result = $connect->query($sql);
$i = 0;
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) 
		{
	echo '"'.$row["tov_id"].'" : {"id" : "'.$row["tov_id"].'", "subid" : {}, "name" : "'.$row["tov_name"].'", "price" : "'.$row["tov_price"].'"},';
		}
};
	?>
};
</script>	
<h1>Все товары</h1>


<!-- WI-BASKET -->

<?php 
$sql = "SELECT tov_id, tov_name, tov_price, tov_img, tov_imgtype FROM site.tov_old;";
$result = $connect->query($sql);
$i = 0;
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) 
{
	
	 echo '<div class="itemdiv">';
echo '<a href="2.php?id='.$row["tov_id"].'"><img class="tov_img" src="'.$row["tov_img"].'.'.$row["tov_imgtype"].'" /></a><br>';
echo '<table><tr><td colspan="2"> '.$row["tov_name"].'</td></tr>';
echo '<tr><td>'.$row["tov_price"].'</td><td><button id="wicartbutton_'.$row["tov_id"].'" onclick="cart.addToCart(this, `'.$row["tov_id"].'`, priceList[`'.$row["tov_id"].'`])">Купить</button></td></tr></table></div>';

}
};
	?>

	<div id="info">
<?php ?>
	</div>	
	
 <!---<div class="v">
<div><img class="im" src="img/ipad.png" /></div>
Цена: <span class="wicartprice" id="wicartprice_002">10500</span> Руб.</p> 

<!-- WI-VETRINE[002] 
<button id="wicartbutton_002" onclick="cart.addToCart(this, '002', priceList['002'])">Купить</button>
</div> -->


<?php
include "template/footer.php";
?>