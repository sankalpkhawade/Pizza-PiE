<?php
  include('forms/register.php');
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles/style.css">
<style>
body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.bgimg-1, .bgimg-2 {
  position: relative;
  opacity: 0.9;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url("./img/pizzaparallax2.jpg");
  min-height: 100%;
}

.bgimg-2 {
  background-image: url("./img/pizzaparallax.jpg");
  min-height: 400px;
}

.caption, .caption1 {
  position: fixed;
  left: 0;
  top: 0%;
  width: 100%;
  text-align: center;
  color: #000;
}
.caption2{
  /*position:fixed;*/
  padding-top: 25%;
  /*top: 50%;*/
  left: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border, .caption1 span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 5px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2 {
        background-attachment: scroll;
    }
}
</style>
</head>
<body>


    <!-- <span class="border">PizzaPie</span> -->
<div class="bgimg-1">
  <div class="caption">
    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; float: right;">Resister Here!</button>

    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; float: right;">Login Here!</button>

    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; float: right;">Veg</button>
  </div>
  <div class="caption2">
      <span id="blinker" style="font-size:60px">Pizza PiE</span><br>
      <span id="blinker1" style="font-size:30px">...You Must Try...</span>
      <span id="blinker2" style="font-size: 60px;"><br>||<br>V</span>
  </div>
</div>

<div style="color: #777;background-image: url(./img/pizzaparallax.jpg);text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center; color: white;">Veg Pizzas</h3>
  <button style="width: 250px;float: right; background: #cc0052;">Veg Pizza</button>
  
  <?php
    include("functions/veg.php");
  ?>

</div>

<div style="color: #777;background-image: url(./img/pizzaparallax2.jpg);text-align:center;padding:50px 80px;text-align: justify; ">
  <h3 style="text-align:center; color: white">Non-Veg Pizzas</h3>
  <button style="width: 250px;float: right; background: #cc0052;"><a href="functions/nonveg.php">Non-Veg Pizza</a></button>
  
  <?php
    include("functions/nonveg.php");
  ?>

</div>


<div class="footer" style="background: grey; text-align: center;">
  <span style="color: white; font-size: 24px;">Copyright &copy; 2017 | PizzaPie</span>
</div>

<script>
  // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
             modal.style.display = "none";
        }
    }

    var blink_speed = 1500;

    var t = setInterval(function () {
      var ele = document.getElementById('blinker');
      ele.style.visibility = (ele.style.visibility == 'hidden' ? '' : 'hidden');
       }, blink_speed);

    var blink_speed1 = 700;

    var t1 = setInterval(function () {
      var ele1 = document.getElementById('blinker1');
      ele1.style.visibility = (ele1.style.visibility == 'hidden' ? '' : 'hidden');
       }, blink_speed1);

    var blink_speed2 = 1000;

    var t2 = setInterval(function () {
      var ele2 = document.getElementById('blinker2');
      ele2.style.visibility = (ele2.style.visibility == 'hidden' ? '' : 'hidden');
       }, blink_speed2);
  </script>



</body>
</html>