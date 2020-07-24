<html>
    <head>
<style>
    hr{ 
  height: 3px;
  color: red;
  background-color: black;
  border: none;
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
 </table>  </p>
<?php

$conn = mysqli_connect('localhost','root','','craft');
if(!$conn)
{ 
    die(" Error in connection".mysqli_connect_erro());
}else{
$a=$_GET['item'];

$res = mysqli_query($conn,"SELECT * FROM images where id='$a' ");
while($row = mysqli_fetch_array($res)){
?>
<table cellspacing="0" cellpadding="15" style="border: 3px solid black"><tr><td rowspan="4" ><center>
<img style="border : 3px solid black; "  src="<?php echo $row['image'];?>" width="370" height="430" vspace="30" hspace="49" >
</center></td>
<td><b><p hpace="49" style="color:black; font-family: Times New Roman, Times, serif; font-size:30px"><?php echo $row['name']?></p></b></td>
</tr>
<tr><td><b><p hpace="49" style=" font-family: Times New Roman, Times, serif; font-size:35px"><span>&#8377;</span><?php echo $row['price']?></p></b>
</td></tr>
<tr><td><b><p style=" font-family: Times New Roman, Times, serif; font-size:25px">Description:</p></b>
<b><p hpace="49" style=" font-family: Times New Roman, Times, serif; font-size:18px; " ><?php echo $row['discription']?></p></b></td></tr>

<?php
}}
?>
<tr>
    <td rowspan="2"><b><p  style=" font-family: Times New Roman, Times, serif; font-size:25px">Reviews:</p></b>
<?php
$b=$_GET['item'];
$res = mysqli_query($conn,"SELECT * FROM review where id='$b' ");
while($r = mysqli_fetch_array($res)){
?>
<hr>
<b><p hpace="49" style=" font-family: Times New Roman, Times, serif; font-size:18px; " ><?php echo $r['rev']?></p></b>
<hr>
<?php
}
?>
</td>
</tr>
<tr><td><center><input type="button" value="Delete this product" name="<?php echo $a?>" style="width:150px; height:50px; background-color:brown;color:white; font-weight:bold ;" onclick="cart(this.name)"></center></td></tr>

</table>

    
<script>
    function cart(iid){
        window.location.href = "http://localhost/web/removeproduct.php?item=" + iid;
    }
</script>


    </body>
</html>