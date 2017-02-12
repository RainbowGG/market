<?php
include "header.php";


$id;
$servername = "176.37.107.153";
$username = "sas";
$password = "qaz123qwe";
$conn = mysqli_connect($servername, $username, $password);
?>

<div></div>
<div style="margin-left: 15%;">


<?php
echo $_GET["id"];
$sql = 'SELECT tov_id, tov_name, tov_price, tov_img, tov_imgtype FROM site.tov_old WHERE tov_id = "'.$_GET["id"].'"';
$result = $conn->query($sql);
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
echo '<table><tr><td><img src="'.$row["tov_img"].'_1.'.$row["tov_imgtype"].'" /></td>';
echo '<td rowspan="3"><img src="'.$row["tov_img"].'.'.$row["tov_imgtype"].'" /></td></tr>';
echo '<tr><td><img src="'.$row["tov_img"].'_2.'.$row["tov_imgtype"].'" /></td><td ></td>';
echo '</tr><tr><td><img src="'.$row["tov_img"].'_3.'.$row["tov_imgtype"].'" /></td><td ></td></tr>';
echo '</table>';
}}
?>



</div>

<?php

include "footer.php";?>