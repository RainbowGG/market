 <?php
include "template/header.php";
?>


<div style="w3-content">

<div class="w3-content w3-section" style="max-width:1020px">
  <p>Ку ку, анимированный слайдер тут!!!</p>

  <img class="mySlides w3-animate-fading img_slider" src="/images/slider/1s.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading img_slider" src="/images/slider/2s.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading img_slider" src="/images/slider/3s.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading img_slider" src="/images/slider/4s.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 15000);    
}
</script>

</div>
<?php
include "template/footer.php";?>