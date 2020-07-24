<html>
<head>
<script>
function show(shown, hidden) {
  document.getElementById(shown).style.display='block';
  document.getElementById(hidden).style.display='none';
  return false;
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

<body background="https://previews.123rf.com/images/bugtiger/bugtiger1209/bugtiger120900008/15082606-textured-bamboo-handicraft-background.jpg" style="background-size:container">
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
$conn=mysqli_connect("localhost","root","","craft");

session_start();
$uem=$_SESSION['var'];

$res = mysqli_query($conn,"SELECT * FROM login where email='$uem' ");
while($row = mysqli_fetch_array($res)){

?>
    <table  cellspacing="0" style="width:300px; float:left; margin:0px 0 0 100px; background-color:black; color:white" >
    <tr>
    <td>
    <center>Hello,<br><h3><b><?php echo $uem;?></b></h3></center>
    </td>
    </tr>
    </table>
    <table cellspacing="0" style="width:800px; background-color:black ;float:left; margin:0px 0 0 0px;" >
    <tr>
    <td>
    <div id="Page1">
    <center><a style="text-decoration:none; font-size: 25px" href="#" onclick="return show('Page2','Page1');">View my orders</a></center>
   <center> <form action="profup.php" method="POST">
    <table style="width:450px; background-color:white; font-size:18px" cellspacing="30px">
    <tr>
    <td>
    <input type="text" name="name"  style="width:250px; height:50px" placeholder="Full name" id="name">
    </td>
    </tr>
    <tr>
    <td>
    <input type="radio" name="gender" value="Male" id="Male">Male
    <input type="radio" name="gender" value="Female" id="Female">Female
    <input type="radio" name="gender" value="Other" id="Other">Other
    </td>
    </tr>
    <tr>
    <td>
    <input type="email" name="email" style="width:250px; height:50px" placeholder="Email Address" id="email">
    </td>
    </tr>
    <tr>
    <td>
    <input type="tel" name="number" style="width:250px; height:50px" placeholder="Mobile Number" id="number">
    </td>
    </tr>
    <tr>
    <td>
    <textarea name="add" id="add" cols="40" placeholder="Address Information" rows="10"></textarea>
    </td>
    </tr>
    <tr>
    <td>
    <input type="submit" value="Update" style="color:white; background-color:black ; width:150px; height:50px" ">
    </td>
    </tr>
    </table>
    </form></center>
    </div>
    </td>
    </tr>
    <tr>
    <td>
    <div id="Page2" style="display:none">
    <center><a style="text-decoration:none; font-size: 25px" href="#" onclick="return show('Page1','Page2');">View my profile</a></center>
    
    <?php


$a=$_SESSION['var'];

$res2 = mysqli_query($conn,"SELECT * FROM images i,cart c where c.email='$a' and c.id=i.id ");
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
  
  window.location.href = "http://localhost/web/singleitem.php?item=" + nm;

}
</script>

    </div>
    </td>
    </tr>
    </table>


<script>

document.getElementById("name").value= "<?php echo $row['name']    ?>";
document.getElementById("<?php echo $row['gender']    ?>").checked= true;
document.getElementById("email").value= "<?php echo $row['emailp']    ?>";
document.getElementById("number").value= "<?php echo $row['mobile']    ?>";
document.getElementById("add").value= "<?php echo $row['address']    ?>";
</script>

  <?php
}
?>

</body>
</html>