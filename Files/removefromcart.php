<?php
$conn=mysqli_connect("localhost","root","","craft");

$iid=$_GET['item'];

$res2 = mysqli_query($conn,"SELECT email FROM cart where id='$iid' ");
while($row2 = mysqli_fetch_array($res2))
$rem=$row2['email'];

$sql = "DELETE FROM cart WHERE id='$iid' and email='$rem'";

if (mysqli_query($conn,$sql)) {
    echo "<script> location.href='http://localhost/web/upload.php'</script>";
//echo "done";
} else {
    echo 'Something went wrong';
        }
mysqli_close($conn)
?>
