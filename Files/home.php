<!DOCTYPE html>
<html>
<title>Homespun - a place to sell your handmade products</title>
<link rel="icon" href="https://drive.google.com/uc?id=1WrJRY7I5DxYStGsqo-viOrHij2eD9uT4">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}

 
.parallax {
  /* The image used */
  background-image: url("https://previews.123rf.com/images/bugtiger/bugtiger1209/bugtiger120900008/15082606-textured-bamboo-handicraft-background.jpg");

  /* Set a specific height */
  min-height: 500px; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.parall{
  /* The image used */
  background-image: url("https://images.unsplash.com/photo-1546450658-04cd1b7dfddf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80");

  /* Set a specific height */
  min-height: 500px; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  color:white;
  
  
}
.parall2{
  /* The image used */
 background-color:white;
  /* Set a specific height */
  min-height: 1160px; 

  /* Create the parallax scrolling effect */
/*  
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover; */
}
.parall3{
  /* The image used */
  background-image: url("https://www.adavegastravel.com/wp-content/uploads/2016/06/Souvenirs-to-buy-in-Turkey.jpg");

  /* Set a specific height */
  min-height: 500px; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  color:white;
  
  
}
.parall4{
  /* The image used */
  background-image: url("https://c8.alamy.com/comp/CYD384/rows-of-jarred-food-goods-for-sale-istanbul-turkey-CYD384.jpg");

  /* Set a specific height */
  min-height: 500px; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  color:white;
  
  
}
.parall5{
  /* The image used */
  background-image: url("https://www.elsetge.cat/myimg/f/55-557335_download-original-image-online-crop-handicraft.jpg");
  
  /* Set a specific height */
  min-height: 500px; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  color:white;
  
  
}
.parall6{
  /* The image used */
  /* background-image: url("https://www.adavegastravel.com/wp-content/uploads/2016/06/Souvenirs-to-buy-in-Turkey.jpg"); */
background-color:black;
  /* Set a specific height */
  min-height: 500px; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  color:white;
  
  
}
</style>
<body>
<div class="parallax">
  <form action="login.html">
    <img src="https://drive.google.com/uc?id=1WrJRY7I5DxYStGsqo-viOrHij2eD9uT4" alt="H" width="150" style="border:5px dotted black" height="140" hspace="20"  vspace="10"><br>
   <b><input type="submit" value="Login" style="background-color:maroon; color:white; width: 120px; height: 40px;  position: absolute;
    left: 900px;
    top: 50px; "></b>                     
</form>
<form action="signup.html">
  <b> <input type="submit" value="Sign up" style="background-color:maroon; color:white; width: 120px; height: 40px;  position: absolute;
    left: 1050px;
    top: 50px; "></b> 
</form>
<br><br>
<table class="w3-content w3-display-container" style="background-image: url(https://s3.envato.com/files/271939098/mbeadsetmix11.jpg); background-size:cover" cellspacing=70><tr><td>
    
    <img class="mySlides" src="https://www.williamhenry.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/b/b/bb4-1_3.jpg" style="width:100%">  
    <img class="mySlides" src="https://d1kzfuu47ls6ne.cloudfront.net/wp-content/uploads/2013/11/Jewelry-Display.jpg" style="width:100%;">
    <img class="mySlides" src="https://www.oneikathetraveller.com/wp-content/uploads/image-import/-L_8M5M4rChQ/Tne8OSanT4I/AAAAAAAAEQs/qthj0TbvdY4/s1600/P1090365.JPG" style="width:100%">
  <img class="mySlides" src="https://c.pxhere.com/photos/e4/24/lanterns_istanbul_turkey_market_lamp_decoration_turkish-1080969.jpg!d" style="width:100%;">
  <img class="mySlides" src="https://i.pinimg.com/originals/25/df/64/25df6415eb31e0c2f79abdcb1b7fc610.jpg" style="width:100% ;" >
  <img class="mySlides" src="https://i.ytimg.com/vi/h-vi-BP3w2s/maxresdefault.jpg" style="width:100%">
  <img class="mySlides" src="https://i1.ytimg.com/vi/4uNzfnNGA8U/maxresdefault.jpg" style="width:100%">
  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</td></tr></table>


<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
<br><br><br>
</div>
<div class="parall2">
  <?php

  $conn = mysqli_connect('localhost','root','','craft');
  if(!$conn)
  { 
      die(" Error in connection".mysqli_connect_erro());
  }else{
    $c1="Bag";
    $c2="Jewellery";
    $c3="Clothing";
    $c4="Decorative_items";
    $c5="Antique_pieces";
    $c6="Paintings";
    $c7="Tassels_or_Embroidery";
    $c8="Kitchen_accessories";
    $c9="Handmade_cloth_items";
    $c10="Food";
    $c12="Leather_items";
    $c11="Others";
  $res = mysqli_query($conn,"SELECT * FROM images where category='$c1' or category='$c2' or category='$c3' ORDER BY RAND() LIMIT 15");
  while($row = mysqli_fetch_array($res)){
  $displ = $row['image'];
  ?>
  <center>
  <div style=" float: left;      
  width: 220px;
  margin: 10px;
  align:center;
  " >
    <table style="background-color:white; background-size:cover">
   <tr><td>  
    <form>
  <a href="#">
  <img style="border : 3px solid black;" id="<?php $row['id'] ?>" src="<?php echo $displ;?>" width="170" height="230" vspace="10" hspace="49"  value="<?php echo $row['name']?>" name="<?php echo $row['id']?>" onclick="imagedisp()" ></a>
  <center><p hpace="49" style="color:blue; font-family: Times New Roman, Times, serif; font-size:18px"><?php echo $row['name']?></p></center>
  <center><p hpace="49" style="color:grey; font-family: Times New Roman, Times, serif; font-size:13px"><?php echo $row['sdis']?></p></center>
  <center><b><p hpace="49" style=" font-family: Times New Roman, Times, serif; font-size:18px"><span>&#8377;</span><?php echo $row['price']?></p></b></center>
  
  </form></td></tr> 
  </table></div></center>
  <?php
  
  }}
  ?>
  
  <script>
  function imagedisp(){
    
    window.location.href = "http://localhost/web/login.html"
  
  }
  </script>
  
  </div>
<br><br><br><br><br>
<div class="parall">
<br><br><br><br><br><br><br><br>

<b><p style="margin:20px 0 0 500px;">

</p></b>
</div >
<div class="parall2"><?php
$conn2 = mysqli_connect('localhost','root','','craft');
if(!$conn2)
{ 
    die(" Error in connection".mysqli_connect_erro());
}else{
  $c1="Bag";
  $c2="Jewellery";
  $c3="Clothing";
  $c4="Decorative_items";
  $c5="Antique_pieces";
  $c6="Paintings";
  $c7="Tassels_or_Embroidery";
  $c8="Kitchen_accessories";
  $c9="Handmade_cloth_items";
  $c10="Food";
  $c12="Leather_items";
  $c11="Others";
$res2 = mysqli_query($conn2,"SELECT * FROM images where category='$c4' or category='$c5' or category='$c6' ORDER BY RAND() LIMIT 15");
while($row2 = mysqli_fetch_array($res2)){
  $displ2 = $row2['image'];
  ?>
<center>
<div style=" float: left;      
width: 220px;
margin: 10px;
align:center;
" >
  <table style="background-color:white; background-size:cover">
 <tr><td>  
  <form>
<a href="#">
<img style="border : 3px solid black;" id="<?php $row2['id'] ?>" src="<?php echo $displ2;?>" width="170" height="230" vspace="10" hspace="49"  value="<?php echo $row2['name']?>" name="<?php echo $row2['id']?>" onclick="imagedisp2()" ></a>
<center><p hpace="49" style="color:blue; font-family: Times New Roman, Times, serif; font-size:18px"><?php echo $row2['name']?></p></center>
<center><p hpace="49" style="color:grey; font-family: Times New Roman, Times, serif; font-size:13px"><?php echo $row2['sdis']?></p></center>
<center><b><p hpace="49" style=" font-family: Times New Roman, Times, serif; font-size:18px"><span>&#8377;</span><?php echo $row2['price']?></p></b></center>

</form></td></tr> 
</table></div></center>
<?php
  
  }}
  ?>

<script>
function imagedisp2(){
  
  window.location.href = "http://localhost/web/login.html"

}
</script>
</div>
<br><br>
<div class="parall3">
<br><br><br><br><br><br><br><br>

<b><p >

</p></b>
</div >
<div class="parall2">
  <?php

  $conn = mysqli_connect('localhost','root','','craft');
  if(!$conn)
  { 
      die(" Error in connection".mysqli_connect_erro());
  }else{
    $c1="Bag";
    $c2="Jewellery";
    $c3="Clothing";
    $c4="Decorative_items";
    $c5="Antique_pieces";
    $c6="Paintings";
    $c7="Tassels_or_Embroidery";
    $c8="Kitchen_accessories";
    $c9="Handmade_cloth_items";
    $c10="Food";
    $c11="Others";
  $res = mysqli_query($conn,"SELECT * FROM images where category='$c7' or category='$c8' or category='$c9' ORDER BY RAND() LIMIT 15");
  while($row = mysqli_fetch_array($res)){
  $displ = $row['image'];
  ?>
  <center>
  <div style=" float: left;      
  width: 220px;
  margin: 10px;
  align:center;
  " >
    <table style="background-color:white; background-size:cover">
   <tr><td>  
    <form>
  <a href="#">
  <img style="border : 3px solid black;" id="<?php $row['id'] ?>" src="<?php echo $displ;?>" width="170" height="230" vspace="10" hspace="49"  value="<?php echo $row['name']?>" name="<?php echo $row['id']?>" onclick="imagedisp()" ></a>
  <center><p hpace="49" style="color:blue; font-family: Times New Roman, Times, serif; font-size:18px"><?php echo $row['name']?></p></center>
  <center><p hpace="49" style="color:grey; font-family: Times New Roman, Times, serif; font-size:13px"><?php echo $row['sdis']?></p></center>
  <center><b><p hpace="49" style=" font-family: Times New Roman, Times, serif; font-size:18px"><span>&#8377;</span><?php echo $row['price']?></p></b></center>
  
  </form></td></tr> 
  </table></div></center>
  <?php
  
  }}
  ?>
  
  <script>
  function imagedisp(){
    
    window.location.href = "http://localhost/web/login.html"
  
  }
  </script>
  
  </div>
  <br><br>
<div class="parall4">
<br><br><br><br><br><br><br><br>

<b><p >

</p></b>
</div >
<div class="parall2">
  <?php

  $conn = mysqli_connect('localhost','root','','craft');
  if(!$conn)
  { 
      die(" Error in connection".mysqli_connect_erro());
  }else{
    $c1="Bag";
    $c2="Jewellery";
    $c3="Clothing";
    $c4="Decorative_items";
    $c5="Antique_pieces";
    $c6="Paintings";
    $c7="Tassels_or_Embroidery";
    $c8="Kitchen_accessories";
    $c9="Handmade_cloth_items";
    $c10="Food";
    $c11="Others";
  $res = mysqli_query($conn,"SELECT * FROM images where category='$c10' or category='$c11' or category='$c12' ORDER BY RAND() LIMIT 15");
  while($row = mysqli_fetch_array($res)){
  $displ = $row['image'];
  ?>
  <center>
  <div style=" float: left;      
  width: 220px;
  margin: 10px;
  align:center;
  " >
    <table style="background-color:white; background-size:cover">
   <tr><td>  
    <form>
  <a href="#">
  <img style="border : 3px solid black;" id="<?php $row['id'] ?>" src="<?php echo $displ;?>" width="170" height="230" vspace="10" hspace="49"  value="<?php echo $row['name']?>" name="<?php echo $row['id']?>" onclick="imagedisp()" ></a>
  <center><p hpace="49" style="color:blue; font-family: Times New Roman, Times, serif; font-size:18px"><?php echo $row['name']?></p></center>
  <center><p hpace="49" style="color:grey; font-family: Times New Roman, Times, serif; font-size:13px"><?php echo $row['sdis']?></p></center>
  <center><b><p hpace="49" style=" font-family: Times New Roman, Times, serif; font-size:18px"><span>&#8377;</span><?php echo $row['price']?></p></b></center>
  
  </form></td></tr> 
  </table></div></center>
  <?php
  
  }}
  ?>
  
  <script>
  function imagedisp(){
    
    window.location.href = "http://localhost/web/login.html"
  
  }
  </script>
  
  </div>
  <br><br>
  <div class="parall5">
<br><br><br><br><br><br><br><br>

<b><p >

</p></b>
</div >
<div class="parall6">
<br><br>

<p style="margin:0px 0 0 10px;">
<pre><b><p style="font-size:20px ; color:cyan"> Categories available :</p></pre>
<pre>
 Bag | Jewellery | Clothing | <br>
 | Decorative_items | Antique_pieces | Paintings | <br>
 | Tassels_or_Embroidery | Kitchen_accessories | <br>
 | Handmade_cloth_items | Leather_items | Food |</b></pre>
</p><br>
<p style="margin:0px 0 0 10px;">
<pre><b><p style="font-size:20px ; color:cyan"> About :</p></pre><pre>
 Homespun website is a place to buy and sell handmade products. It is place where buyer's can get good quality products without any extra charge directly 
 from the manufactures.

 Some things that you should know about this website.<br>
 * A place to buy/sell handmade products. <br>
 * No GST on products.<br>
 * No home delivery, buyer should reach to the seller within 10 days of the day, when order is placed.<br>
 * No payment has to be made to upload your products.<br>
 * If any of the products uploaded are found out of the rules, owner of this website has full authority to remove it.<br>
 * There are several categories for products, if any major category is found missing, please can give a suggestion through email.<br></b></pre>
</p><br>
<p style="margin:0px 0 0 10px;">
<pre><b><p style="font-size:20px ; color:cyan"> Contact us :</p></pre>
<pre>
 +91 7406285133
 homespun2020@gmail.com 
 </pre>
</p><br>
</div >
</body>
</html>
