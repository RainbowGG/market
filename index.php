 <?php
include "header.php";

$servername = "176.37.107.153";
$username = "sas";
$password = "qaz123qwe";
$conn = mysqli_connect($servername, $username, $password);
?>
<div style="margin-left: 15%;">
<?php
 echo "123http://www.w3schools.com/"; 
?>
<form action="index.php" method="POST">
<input name="textOne" type="text"/>
<input name="bttOne" type="submit" value="submit"/>
</form>
</div>
<div></div>
<div style="margin-left: 15%;">

<?php
$sql = "SELECT tov_id, tov_name, tov_price, tov_img, tov_imgtype FROM site.tov_old;";
$result = $conn->query($sql);
$i = 0;
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) 
{
echo '<div class="itemdiv">';
echo '<a href="2.php?id='.$row["tov_id"].'"><img src="'.$row["tov_img"].'.'.$row["tov_imgtype"].'" /></a><br>';
echo '<table><tr><td colspan="2"> '.$row["tov_name"].'</td></tr>';
echo '<tr><td>'.$row["tov_price"].'</td><td><input name="'.$row["tov_name"].'" class="tovbtt" type="submit" value="submit"/></td></tr></table></div>';
$i++;
if(($i % 4 )== 0)
	{
	echo '<br>';
	}
}
}else{echo '00000';}

?>
</div>

<?php
include "footer.php";?>