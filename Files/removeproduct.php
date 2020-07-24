<?php
$conn=mysqli_connect("localhost","root","","craft");

$iid=$_GET['item'];

$sql = "DELETE FROM images WHERE id='$iid'";

if (mysqli_query($conn,$sql)) {
    $sql = "DELETE FROM cart WHERE id='$iid'";
    mysqli_query($conn,$sql);
    echo "<script> location.href='http://localhost/web/upload.php'</script>";
//echo "done";
} else {
    echo 'Something went wrong';
        }
        
mysqli_close($conn)
?>
