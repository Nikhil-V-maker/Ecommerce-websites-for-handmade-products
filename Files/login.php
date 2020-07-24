<?php

 if($_SERVER['REQUEST_METHOD']=='POST'){

        $conn = mysqli_connect('localhost','root','','craft');
        if(!$conn)
        { 
            die(" Error in connection".mysqli_connect_erro());
        }else{
 $email = $_POST['email'];
 $password = $_POST['password'];
 
 $Sql_Query = "select * from login where email = '$email' and password = '$password' ";
 
 $check = mysqli_fetch_array(mysqli_query($conn,$Sql_Query));
 
 if(isset($check)){
 
 echo "<script> location.href='http://localhost/web/index.php'</script>";
 session_start();
$_SESSION['var'] = $email;

 }
 else{
     $message="Invalid Username or password please try again";
     
     echo "<script>alert('$message'); location.href='http://localhost/web/login.html'</script>";
 //echo "<script type='text/javascript'></script>";
 }}}
mysqli_close($conn)
?>