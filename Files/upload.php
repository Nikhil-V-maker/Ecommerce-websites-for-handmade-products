<html>
<head>
<script>
function Openform()
{
document.getElementById('form1').style.display = '';
document.getElementById('form2').style.display = 'none';
document.getElementById('form3').style.display = 'none';
}
function Openform2()
{
document.getElementById('form1').style.display = 'none';
document.getElementById('form2').style.display = '';
document.getElementById('form3').style.display = 'none';
}
function Openform3()
{
document.getElementById('form1').style.display = 'none';
document.getElementById('form2').style.display = 'none';
document.getElementById('form3').style.display = '';
}

</script>
<style>
a {
  color: black; 
  background-color:brown

}
a:visited {
  color: white;
}
a:hover, a:active, a:focus {
  color:cyan;
  background-color:lightgrey;
}
 /* .diva {
  float: left;      
  
  width: 230px;
  margin: 10px;
  align:center;
 } */
</style>
</head>

<body  background="https://previews.123rf.com/images/bugtiger/bugtiger1209/bugtiger120900008/15082606-textured-bamboo-handicraft-background.jpg" style="background-size:container">

<?php
$conn=mysqli_connect("localhost","root","","craft");

session_start();
$a=$_SESSION['var'];

?>
<p style="background-color:black">
    <table style="width:84.2em">
            <tr>
                <td>
                    <img src="https://drive.google.com/uc?id=1WrJRY7I5DxYStGsqo-viOrHij2eD9uT4" alt="handicraftvilla" width="100">
                </td>
            </tr>
 </table>  
</p>
    <center>
<input type="button" value="Sell my products" onclick="Openform()"  style="width:150px; height:50px; background-color:brown;color:white; font-weight:bold ;">
<input type="button" value="Orders for your products" onclick="Openform2()"  style="width:200px; height:50px; background-color:brown;color:white; font-weight:bold ;">
<input type="button" value="View my products" onclick="Openform3()"  style="width:150px; height:50px; background-color:brown;color:white; font-weight:bold ;">
</center>
<br><br>
<div id = "form1" style = "display:''">

<table  align="center" width="600px" height="590px" style="background-color:black; box-shadow: 0px 0px 30px 0px rgba(0, 0, 0, 100);"  ><tr><td>
    <form action="uploadpro.php" enctype='multipart/form-data' method="post" >
   
    <table width="500px" align="center" style="background-color:white" cellpadding="8" style="box-shadow: 0px 0px 30px 0px rgba(0, 0, 0, 100);">
    <tr><td>
    <input type="text" name="name"  style="width:250px; height:50px" placeholder="Product name" id="name">
    </td></tr>
    <tr>
    <td>
    <input type="number" name="price"  style="width:250px; height:50px" placeholder="Price in Rupee's" id="price">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" name="sd"  style="width:250px; height:50px" placeholder="Small discription (less than 20 lettes) " id="sd">
    </td>
    </tr>
    

    <tr>
    <td>
    <textarea name="dis" id="dis" cols="40" placeholder="Discription about your product" rows="10"></textarea>
    </td>
    </tr>

    <tr>
        <td>
        <label for="catg">Choose category of your product</label>

<select id="catg" name="catg">
 
  <option value="Bag">Bag</option>
  <option value="Jewellery">Jewellery</option>
  <option value="Clothing">Clothing</option>
  <option value="Decorative_items">Decorative_items</option>
  <option value="Antique_pieces">Antique_pieces</option>
  <option value="Paintings">Paintings</option>
  <option value="Tassels_or_Embroidery">Tassels_or_Embroidery</option>
  <option value="Kitchen_accessories">Kitchen_accessories</option>
  <option value="Handmade_cloth_items">Handmade_cloth_items</option>
  <option value="Leather_items">Leather_items</option>
  <option value="Food">Food</option>
  <option value="Others">Others</option>
  
</select>
        </td>
    </tr>

    <tr>
    <td>
    <form method="post" action="" enctype='multipart/form-data'>
    Upload an image of your product<br>
    <input type='file' style="background-color:white" name='file' />
    </form>
    </td>
    </tr>
<tr>
    <td>
    <input type='submit' style="background-color:brown; width:100px; height:40px; "  value='Upload' name='but_upload'>
    </td>
</tr>
    
    </table>
</form>

</td></tr></table>

</div>

<!-- 2 -->

<div id = "form2" style = "display:none">

      
<?php

$res3 = mysqli_query($conn,"SELECT * FROM images i,cart c where c.emailseller='$a' and c.id=i.id ");
while($row3 = mysqli_fetch_array($res3)){
$displ3 = $row3['image'];
?>
<center>
<div style=" float: left;      
  
  width: 230px;
  margin: 10px;
  align:center;">
  <table style="background-color:white; background-size:cover;">
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
<script>
function imagedisp3(val,nm){
  
  window.location.href = "http://localhost/web/singleitem2.php?item=" + nm;

}
</script>
</div>

<!-- 3 -->

<div id = "form3" style = "display:none">

      
<?php

$res2 = mysqli_query($conn,"SELECT * FROM images where emailseller='$a'");
while($row2 = mysqli_fetch_array($res2)){
$displ2 = $row2['image'];
?>
<center>
<div style=" float: left;      
  
  width: 230px;
  margin: 10px;
  align:center;">
  <table style="background-color:white; background-size:cover;">
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
<script>
function imagedisp2(val,nm){
  
  window.location.href = "http://localhost/web/singleitem3.php?item=" + nm;

}
</script>

</div>
</body>
</html>