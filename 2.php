<?php
include "template/header.php";

?>

<div></div>
<div style="margin-left: 15%;">


<?php
error_reporting(E_ALL);
require_once "./config.php"; //файл настроек
echo $_GET["id"];
$sql = 'SELECT tov_id, tov_name, tov_price, tov_img, tov_imgtype FROM site.tov_old WHERE tov_id = "'.$_GET["id"].'"';
$result = $connect->query($sql);
$i = 0;/*
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
echo '<div class="itemdiv">';
echo '<a href="2.php?id='.$row["tov_id"].'"><img src="'.$row["tov_img"].'.'.$row["tov_imgtype"].'" /></a><br>';
echo '<table><tr><td colspan="2"> '.$row["tov_name"].'</td></tr>';
echo '<tr><td>'.$row["tov_price"].'</td><td><input name="'.$row["tov_name"].'" class="tovbtt" type="submit" value="submit"/></td></tr></table></div>';
$i++;

	echo '<br>';
	
}
	}*/
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
echo '<table><tr><td><img class="tov_img_s" src="'.$row["tov_img"].'.'.$row["tov_imgtype"].'" onmouseover="bigImg(this);" /></td>';
echo '<td rowspan="4"><img id="tov_img_main"src="'.$row["tov_img"].'.'.$row["tov_imgtype"].'" /></td></tr>';
echo '<tr><td><img class="tov_img_s" src="'.$row["tov_img"].'_1.'.$row["tov_imgtype"].'"  onmouseover="bigImg(this);" /></td><td ></td>';
echo '</tr><tr><td><img class="tov_img_s" src="'.$row["tov_img"].'_2.'.$row["tov_imgtype"].'" onmouseover="bigImg(this);" /></td><td ></td></tr>';
echo '</tr><tr><td><img class="tov_img_s" src="'.$row["tov_img"].'_3.'.$row["tov_imgtype"].'" onmouseover="bigImg(this);" /></td><td ></td></tr>';
echo '</table>';
}}
echo '<button id="wicartbutton_'.$row["tov_id"].'" onclick="cart.addToCart(this, `'.$row["tov_id"].'`, priceList[`'.$row["tov_id"].'`])">Купить</button></td></tr></table></div>';
?>



</div>
<script>
function bigImg(x) {
    document.images.namedItem("tov_img_main").src =  x.src;
   
}


</script>
<?php

include "template/footer.php";?>