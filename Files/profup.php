<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

    $conn = mysqli_connect('localhost','root','','craft');
    if(!$conn)
    { 
        die(" Error in connection".mysqli_connect_erro());
    }else{
$name = $_POST['name'];
$gender = $_POST['gender'];
$email=$_POST['email'];
$num=$_POST['number'];
$add=$_POST['add'];

session_start();
$uem=$_SESSION['var'];

$Sql_Query = "UPDATE login SET name = '$name',gender='$gender', emailp = '$email', mobile='$num',address='$add' WHERE email = '$uem'";

 if(mysqli_query($conn,$Sql_Query))
{
 echo "<script> location.href='http://localhost/web/profile.php'</script>";
}
else
{
 echo 'Something went wrong';
 }
    }}
?>
