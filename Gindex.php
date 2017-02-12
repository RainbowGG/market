 <?php
include "template/header.php";
?>
<div style="text-align: center;">
<h1>Center1</h1>
<?php 
echo session_id();
echo $_COOKIE['Uid'];
$name2 = $_COOKIE['Uid'];
echo $_COOKIE[$name2];
echo false;
?>
</div>
<?php
include "template/footer.php";?>