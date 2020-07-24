<html>
  <head>
    <style>
      div {
  float: left;      
  width: 200px;
  margin: 10px;
  align:center;
  
}
hr{ 
  height: 3px;
  color: red;
  background-color: black;
  border: none;
}
.butt{
  color:white;
  background-color:black;
  width:260;
  height:30;
  align:center;
}
    </style>
    <script>
function choosecat(cat){
  window.location.href = "http://localhost/web/singlecat.php?cat=" + cat
}
</script>
<link rel="icon" href="https://drive.google.com/uc?id=1WrJRY7I5DxYStGsqo-viOrHij2eD9uT4">
  </head>
<body background="https://previews.123rf.com/images/bugtiger/bugtiger1209/bugtiger120900008/15082606-textured-bamboo-handicraft-background.jpg" style="background-size:container">

<?php
$conn=mysqli_connect("localhost","root","","craft");

session_start();
$uem=$_SESSION['var'];
?>
<p style="background-color:black">
<table  style="width:165em;">
            <tr>
                <td>
                    <img src="https://drive.google.com/uc?id=1WrJRY7I5DxYStGsqo-viOrHij2eD9uT4" alt="handicraftvilla" width="100">
                </td>
                <td><a href="upload.php"> <input type="button"  value="Sell my product" style="color:white; background-color:brown; width:150; height:30 ">  </a>
                  <a href="Profile.php"><input type="button" hspace="100" value="<?php echo $uem;?> \/" style="color:white; background-color:brown; width:300; height:30 "></a>
                  
                </td>
              </tr>
 </table>  </p>

    <?php
$conn=mysqli_connect("localhost","root","","craft");

// session_start();
// $a=$_SESSION['var'];
$c1="Bag";
$c2="Jewellery";
$c3="Clothing";
$c4="Decorative_items";
$c5="Antique_pieces";
$c6="Paintings";
$c7="Tassels_or_Embroidery";
$c8="Kitchen_accessories";
$c9="Handmade_cloth_items";
$c12="Leather_items";
$c10="Food";
$c11="Others";

$res = mysqli_query($conn,"SELECT * FROM images where category='$c1'  ORDER BY RAND() LIMIT 5 ");
while($row = mysqli_fetch_array($res)){
$displ = $row['image'];
?>
<center>
<div>
  <table style="background-color:white; background-size:cover">
 <tr><td>  
  <form>
<a href="#">
<img style="border : 3px solid black;" id="<?php $row['id'] ?>" src="<?php echo $displ;?>" width="170" height="230" vspace="10" hspace="49"  value="<?php echo $row['name']?>" name="<?php echo $row['id']?>" onclick="imagedisp(this.value,this.name)" ></a>
<center><p hpace="49" style="color:blue; font-family: Times New Roman, Times, serif; font-size:18px"><?php echo $row['name']?></p></center>
<center><p hpace="49" style="color:grey; font-family: Times New Roman, Times, serif; font-size:13px"><?php echo $row['sdis']?></p></center>
<center><b><p hpace="49" style=" font-family: Times New Roman, Times, serif; font-size:18px"><span>&#8377;</span><?php echo $row['price']?></p></b></center>

</form></td></tr> 
</table></div></center>
<?php

}?>
<center><input type="button" value="More >" name="1" style="height:100px ; width:60px; background-color:black ; color:white" vspace="150" onclick="choosecat(this.name)"></center>
<script>
function imagedisp(val,nm){
  
  window.location.href = "http://localhost/web/singleitem.php?item=" + nm;

}
</script>
<br>
<hr>
<!-- 2 -->
<?php
$conn2=mysqli_connect("localhost","root","","craft");

$res2 = mysqli_query($conn2,"SELECT * FROM images where category='$c2' ORDER BY RAND() LIMIT 5 ");

while($row2 = mysqli_fetch_array($res2)){
$displ2 = $row2['image'];

?>
<center>
<div>
  <table style="background-color:white; background-size:cover">
 <tr><td>  
  <form>
<a href="#">
<img style="border : 3px solid black;" id="<?php $row2['id'] ?>" src="<?php echo $displ2;?>" width="170" height="230" vspace="10" hspace="49"  value="<?php echo $row2['name']?>" name="<?php echo $row2['id']?>" onclick="imagedisp2(this.value,this.name)" ></a>
<center><p hpace="49" style="color:blue; font-family: Times New Roman, Times, serif; font-size:18px"><?php echo $row2['name']?></p></center>
<center><p hpace="49" style="color:grey; font-family: Times New Roman, Times, serif; font-size:13px"><?php echo $row2['sdis']?></p></center>
<center><b><p hpace="49" style=" font-family: Times New Roman, Times, serif; font-size:18px"><span>&#8377;</span><?php echo $row2['price']?></p></b></center>
</form></td></tr> 
</table></div></center>
<?php

}?>
<center><input type="button" value="More >" name="2" style="height:100px ; width:60px; background-color:black ; color:white" vspace="155" onclick="choosecat(this.name)"></center>
<script>
function imagedisp2(val,nm){
  
  window.location.href = "http://localhost/web/singleitem.php?item=" + nm;

}
</script>
<br>
<hr>
<!-- 3 -->

<?php
$conn3=mysqli_connect("localhost","root","","craft");

$res3 = mysqli_query($conn3,"SELECT * FROM images where category='$c3' ORDER BY RAND() LIMIT 5 ");

while($row3 = mysqli_fetch_array($res3)){
$displ3 = $row3['image'];
?>
<center>
<div>
  <table style="background-color:white; background-size:cover">
 <tr><td>  
  <form>
<a href="#">
<img style="border : 3px solid black;" id="<?php $row3['id'] ?>" src="<?php echo $displ3;?>" width="170" height="230" vspace="10" hspace="49"  value="<?php echo $row3['name']?>" name="<?php echo $row3['id']?>" onclick="imagedisp3(this.value,this.name)" ></a>
<center><p hpace="49" style="color:blue; font-family: Times New Roman, Times, serif; font-size:18px"><?php echo $row3['name']?></p></center>
<center><p hpace="49" style="color:grey; font-family: Times New Roman, Times, serif; font-size:13px"><?php echo $row3['sdis']?></p></center>
<center><b><p hpace="49" style=" font-family: Times New Roman, Times, serif; font-size:18px"><span>&#8377;</span><?php echo $row3['price']?></p></b></center>
</form></td></tr> 
</table></div></center>
<?php

}?>
<center><input type="button" value="More >" name="3" style="height:100px ; width:60px; background-color:black ; color:white" vspace="160" onclick="choosecat(this.name)"></center>
<script>
function imagedisp3(val,nm){
  
  window.location.href = "http://localhost/web/singleitem.php?item=" + nm;

}
</script>
<hr>
<!-- 4 -->


<?php
$conn4=mysqli_connect("localhost","root","","craft");

$res4 = mysqli_query($conn4,"SELECT * FROM images where category='$c4' ORDER BY RAND() LIMIT 5 ");
while($row4 = mysqli_fetch_array($res4)){
$displ4 = $row4['image'];
?>
<center>
<div>
  <table style="background-color:white; background-size:cover">
 <tr><td>  
  <form>
<a href="#">
<img style="border : 3px solid black;" id="<?php $row4['id'] ?>" src="<?php echo $displ4;?>" width="170" height="230" vspace="10" hspace="49"  value="<?php echo $row4['name']?>" name="<?php echo $row4['id']?>" onclick="imagedisp4(this.value,this.name)" ></a>
<center><p hpace="49" style="color:blue; font-family: Times New Roman, Times, serif; font-size:18px"><?php echo $row4['name']?></p></center>
<center><p hpace="49" style="color:grey; font-family: Times New Roman, Times, serif; font-size:13px"><?php echo $row4['sdis']?></p></center>
<center><b><p hpace="49" style=" font-family: Times New Roman, Times, serif; font-size:18px"><span>&#8377;</span><?php echo $row4['price']?></p></b></center>
</form></td></tr> 
</table></div></center>
<?php

}?>
<center><input type="button" value="More >" name="4" style="height:100px ; width:60px; background-color:black ; color:white" vspace="165" onclick="choosecat(this.name)"></center>
<script>
function imagedisp4(val,nm){
  
  window.location.href = "http://localhost/web/singleitem.php?item=" + nm;

}
</script>
<hr>
<!-- 5 -->

<?php
$conn5=mysqli_connect("localhost","root","","craft");

$res5 = mysqli_query($conn5,"SELECT * FROM images where category='$c5' ORDER BY RAND() LIMIT 5 ");
while($row5 = mysqli_fetch_array($res5)){
$displ5 = $row5['image'];
?>
<center>
<div>
  <table style="background-color:white; background-size:cover">
 <tr><td>  
  <form>
<a href="#">
<img style="border : 3px solid black;" id="<?php $row5['id'] ?>" src="<?php echo $displ5;?>" width="170" height="230" vspace="10" hspace="49"  value="<?php echo $row5['name']?>" name="<?php echo $row5['id']?>" onclick="imagedisp5(this.value,this.name)" ></a>
<center><p hpace="49" style="color:blue; font-family: Times New Roman, Times, serif; font-size:18px"><?php echo $row5['name']?></p></center>
<center><p hpace="49" style="color:grey; font-family: Times New Roman, Times, serif; font-size:13px"><?php echo $row5['sdis']?></p></center>
<center><b><p hpace="49" style=" font-family: Times New Roman, Times, serif; font-size:18px"><span>&#8377;</span><?php echo $row5['price']?></p></b></center>
</form></td></tr> 
</table></div></center>
<?php

}?>
<center><input type="button" value="More >" name="5" style="height:100px ; width:60px; background-color:black ; color:white" vspace="168" onclick="choosecat(this.name)"></center>
<script>
function imagedisp5(val,nm){
  
  window.location.href = "http://localhost/web/singleitem.php?item=" + nm;

}
</script>
<hr>
<!-- 6 -->


<?php
$conn6=mysqli_connect("localhost","root","","craft");

$res6 = mysqli_query($conn6,"SELECT * FROM images where category='$c6' ORDER BY RAND() LIMIT 5 ");
while($row6 = mysqli_fetch_array($res6)){
$displ6 = $row6['image'];
?>
<center>
<div>
  <table style="background-color:white; background-size:cover">
 <tr><td>  
  <form>
<a href="#">
<img style="border : 3px solid black;" id="<?php $row6['id'] ?>" src="<?php echo $displ6;?>" width="170" height="230" vspace="10" hspace="49"  value="<?php echo $row6['name']?>" name="<?php echo $row6['id']?>" onclick="imagedisp6(this.value,this.name)" ></a>
<center><p hpace="49" style="color:blue; font-family: Times New Roman, Times, serif; font-size:18px"><?php echo $row6['name']?></p></center>
<center><p hpace="49" style="color:grey; font-family: Times New Roman, Times, serif; font-size:13px"><?php echo $row6['sdis']?></p></center>
<center><b><p hpace="49" style=" font-family: Times New Roman, Times, serif; font-size:18px"><span>&#8377;</span><?php echo $row6['price']?></p></b></center>
</form></td></tr> 
</table></div></center>
<?php

}?>
<center><input type="button" value="More >" name="6" style="height:100px ; width:60px; background-color:black ; color:white" vspace="171" onclick="choosecat(this.name)"></center>
<script>
function imagedisp6(val,nm){
  
  window.location.href = "http://localhost/web/singleitem.php?item=" + nm;

}
</script>
<hr>
<!-- 7 -->

<?php
$conn7=mysqli_connect("localhost","root","","craft");

$res7 = mysqli_query($conn,"SELECT * FROM images where category='$c7' ORDER BY RAND() LIMIT 5 ");
while($row7 = mysqli_fetch_array($res7)){
$displ7 = $row7['image'];
?>
<center>
<div>
  <table style="background-color:white; background-size:cover">
 <tr><td>  
  <form>
<a href="#">
<img style="border : 3px solid black;" id="<?php $row7['id'] ?>" src="<?php echo $displ7;?>" width="170" height="230" vspace="10" hspace="49"  value="<?php echo $row7['name']?>" name="<?php echo $row7['id']?>" onclick="imagedisp7(this.value,this.name)" ></a>
<center><p hpace="49" style="color:blue; font-family: Times New Roman, Times, serif; font-size:18px"><?php echo $row7['name']?></p></center>
<center><p hpace="49" style="color:grey; font-family: Times New Roman, Times, serif; font-size:13px"><?php echo $row7['sdis']?></p></center>
<center><b><p hpace="49" style=" font-family: Times New Roman, Times, serif; font-size:18px"><span>&#8377;</span><?php echo $row7['price']?></p></b></center>
</form></td></tr> 
</table></div></center>
<?php

}?>
<center><input type="button" value="More >" name="7" style="height:100px ; width:60px; background-color:black ; color:white" vspace="171" onclick="choosecat(this.name)"></center>
<script>
function imagedisp7(val,nm){
  
  window.location.href = "http://localhost/web/singleitem.php?item=" + nm;

}
</script>
<hr>
<!-- 8 -->

<?php
$conn8=mysqli_connect("localhost","root","","craft");

$res8 = mysqli_query($conn8,"SELECT * FROM images where category='$c8' ORDER BY RAND() LIMIT 5 ");
while($row8 = mysqli_fetch_array($res8)){
$displ8 = $row8['image'];
?>
<center>
<div>
  <table style="background-color:white; background-size:cover">
 <tr><td>  
  <form>
<a href="#">
<img style="border : 3px solid black;" id="<?php $row8['id'] ?>" src="<?php echo $displ8;?>" width="170" height="230" vspace="10" hspace="49"  value="<?php echo $row8['name']?>" name="<?php echo $row8['id']?>" onclick="imagedisp8(this.value,this.name)" ></a>
<center><p hpace="49" style="color:blue; font-family: Times New Roman, Times, serif; font-size:18px"><?php echo $row8['name']?></p></center>
<center><p hpace="49" style="color:grey; font-family: Times New Roman, Times, serif; font-size:13px"><?php echo $row8['sdis']?></p></center>
<center><b><p hpace="49" style=" font-family: Times New Roman, Times, serif; font-size:18px"><span>&#8377;</span><?php echo $row8['price']?></p></b></center>
</form></td></tr> 
</table></div></center>
<?php

}?>
<center><input type="button" value="More >" name="8" style="height:100px ; width:60px; background-color:black ; color:white" vspace="171" onclick="choosecat(this.name)"></center>
<script>
function imagedisp8(val,nm){
  
  window.location.href = "http://localhost/web/singleitem.php?item=" + nm;

}
</script>
<hr>
<!-- 9 -->

<?php
$conn9=mysqli_connect("localhost","root","","craft");

$res9 = mysqli_query($conn9,"SELECT * FROM images where category='$c9' ORDER BY RAND() LIMIT 5 ");
while($row9 = mysqli_fetch_array($res9)){
$displ9 = $row9['image'];
?>
<center>
<div>
  <table style="background-color:white; background-size:cover">
 <tr><td>  
  <form>
<a href="#">
<img style="border : 3px solid black;" id="<?php $row9['id'] ?>" src="<?php echo $displ9;?>" width="170" height="230" vspace="10" hspace="49"  value="<?php echo $row9['name']?>" name="<?php echo $row9['id']?>" onclick="imagedisp9(this.value,this.name)" ></a>
<center><p hpace="49" style="color:blue; font-family: Times New Roman, Times, serif; font-size:18px"><?php echo $row9['name']?></p></center>
<center><p hpace="49" style="color:grey; font-family: Times New Roman, Times, serif; font-size:13px"><?php echo $row9['sdis']?></p></center>
<center><b><p hpace="49" style=" font-family: Times New Roman, Times, serif; font-size:18px"><span>&#8377;</span><?php echo $row9['price']?></p></b></center>
</form></td></tr> 
</table></div></center>
<?php

}?>
<center><input type="button" value="More >" name="9" style="height:100px ; width:60px; background-color:black ; color:white" vspace="173" onclick="choosecat(this.name)"></center>
<script>
function imagedisp9(val,nm){
  
  window.location.href = "http://localhost/web/singleitem.php?item=" + nm;

}
</script>

<!-- 10 -->
<hr>

<?php
$conn10=mysqli_connect("localhost","root","","craft");

$res10 = mysqli_query($conn10,"SELECT * FROM images where category='$c10' ORDER BY RAND() LIMIT 5 ");
while($row10 = mysqli_fetch_array($res10)){
$displ10 = $row10['image'];
?>
<center>
<div>
  <table style="background-color:white; background-size:cover">
 <tr><td>  
  <form>
<a href="#">
<img style="border : 3px solid black;" id="<?php $row10['id'] ?>" src="<?php echo $displ10;?>" width="170" height="230" vspace="10" hspace="49"  value="<?php echo $row10['name']?>" name="<?php echo $row10['id']?>" onclick="imagedisp10(this.value,this.name)" ></a>
<center><p hpace="49" style="color:blue; font-family: Times New Roman, Times, serif; font-size:18px"><?php echo $row10['name']?></p></center>
<center><p hpace="49" style="color:grey; font-family: Times New Roman, Times, serif; font-size:13px"><?php echo $row10['sdis']?></p></center>
<center><b><p hpace="49" style=" font-family: Times New Roman, Times, serif; font-size:18px"><span>&#8377;</span><?php echo $row10['price']?></p></b></center>
</form></td></tr> 
</table></div></center>
<?php

}?>
<center><input type="button" value="More >" name="10" style="height:100px ; width:60px; background-color:black ; color:white" vspace="173" onclick="choosecat(this.name)"></center>
<script>
function imagedisp10(val,nm){
  
  window.location.href = "http://localhost/web/singleitem.php?item=" + nm;

}
</script>

<!-- 11 -->
<hr>

<?php
$conn11=mysqli_connect("localhost","root","","craft");

$res11 = mysqli_query($conn11,"SELECT * FROM images where category='$c11' ORDER BY RAND() LIMIT 5 ");
while($row11 = mysqli_fetch_array($res11)){
$displ11 = $row11['image'];
?>
<center>
<div>
  <table style="background-color:white; background-size:cover">
 <tr><td>  
  <form>
<a href="#">
<img style="border : 3px solid black;" id="<?php $row11['id'] ?>" src="<?php echo $displ11;?>" width="170" height="230" vspace="10" hspace="49"  value="<?php echo $row11['name']?>" name="<?php echo $row11['id']?>" onclick="imagedisp11(this.value,this.name)" ></a>
<center><p hpace="49" style="color:blue; font-family: Times New Roman, Times, serif; font-size:18px"><?php echo $row11['name']?></p></center>
<center><p hpace="49" style="color:grey; font-family: Times New Roman, Times, serif; font-size:13px"><?php echo $row11['sdis']?></p></center>
<center><b><p hpace="49" style=" font-family: Times New Roman, Times, serif; font-size:18px"><span>&#8377;</span><?php echo $row11['price']?></p></b></center>
</form></td></tr> 
</table></div></center>
<?php

}?>
<center><input type="button" value="More >" name="11" style="height:100px ; width:60px; background-color:black ; color:white" vspace="173" onclick="choosecat(this.name)"></center>
<script>
function imagedisp111(val,nm){
  
  window.location.href = "http://localhost/web/singleitem.php?item=" + nm;

}
</script>

<!-- 12 -->

<hr>

<?php
$conn12=mysqli_connect("localhost","root","","craft");

$res12 = mysqli_query($conn12,"SELECT * FROM images where category='$c12' ORDER BY RAND() LIMIT 5 ");
while($row12 = mysqli_fetch_array($res12)){
$displ12 = $row12['image'];
?>
<center>
<div>
  <table style="background-color:white; background-size:cover">
 <tr><td>  
  <form>
<a href="#">
<img style="border : 3px solid black;" id="<?php $row12['id'] ?>" src="<?php echo $displ12;?>" width="170" height="230" vspace="10" hspace="49"  value="<?php echo $row12['name']?>" name="<?php echo $row12['id']?>" onclick="imagedisp12(this.value,this.name)" ></a>
<center><p hpace="49" style="color:blue; font-family: Times New Roman, Times, serif; font-size:18px"><?php echo $row12['name']?></p></center>
<center><p hpace="49" style="color:grey; font-family: Times New Roman, Times, serif; font-size:13px"><?php echo $row12['sdis']?></p></center>
<center><b><p hpace="49" style=" font-family: Times New Roman, Times, serif; font-size:18px"><span>&#8377;</span><?php echo $row12['price']?></p></b></center>
</form></td></tr> 
</table></div></center>
<?php

}?>
<center><input type="button" value="More >" name="12" style="height:100px ; width:60px; background-color:black ; color:white" vspace="173" onclick="choosecat(this.name)"></center>
<script>
function imagedisp112(val,nm){
  
  window.location.href = "http://localhost/web/singleitem.php?item=" + nm;

}
</script>

</body>
  </html>
