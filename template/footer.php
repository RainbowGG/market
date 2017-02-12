<?php
if(isset($_POST["bttOne"])){
if(empty($_POST["textOne"])){
echo "Empty";
}
echo " ".$_POST["textOne"]." ";
}
?>


<script>
/* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
</div>
</body>
</html>
