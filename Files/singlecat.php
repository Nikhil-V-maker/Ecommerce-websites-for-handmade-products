<html>
    <head>
<style>
      div {
  float: left;      
  
  width: 230px;
  margin: 13px;
  align:center;
  
}
</style>
    </head>
    <body background="https://previews.123rf.com/images/bugtiger/bugtiger1209/bugtiger120900008/15082606-textured-bamboo-handicraft-background.jpg" style="background-size:cover">
    <p style="background-color:black">
    <table style="width:84.2em">
            <tr>
                <td>
                    <img src="https://drive.google.com/uc?id=1WrJRY7I5DxYStGsqo-viOrHij2eD9uT4" alt="handicraftvilla" width="100">
                </td>
            </tr>
 </table>  
</p>
    <?php

$conn = mysqli_connect('localhost','root','','craft');
if(!$conn)
{ 
    die(" Error in connection".mysqli_connect_erro());
}else{
$a=$_GET['cat'];

if($a==1)
    $cats="Bag";
else
if($a==2)
    $cats="Jewellery";
else
if($a==3)
    $cats="Clothing";
else
if($a==4)
    $cats="Decorative_items";
else
if($a==5)
    $cats="Antique_pieces";
else
if($a==6)
    $cats="Paintings";
else
if($a==7)
    $cats="Tassels_or_Embroidery";
else
if($a==8)
    $cats="Kitchen_accessories";
else
if($a==9)
    $cats="Handmade_cloth_items";
else
if($a==10)
    $cats="Food";
else
if($a==11)
    $cats="Others";
else
if($a==12)
    $cats="Leather_items";

$res = mysqli_query($conn,"SELECT * FROM images where category='$cats'");
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

}}
?>

<script>
function imagedisp(val,nm){
  
  window.location.href = "http://localhost/web/singleitem.php?item=" + nm;

}
</script>


    </body>
</html>