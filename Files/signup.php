<?php

 if($_SERVER['REQUEST_METHOD']=='POST'){

        $conn = mysqli_connect('localhost','root','','craft');
        if(!$conn)
        { 
            die(" Error in connection".mysqli_connect_erro());
        }else{
 $email = $_POST['ema'];
 $password = $_POST['password'];
 $conpass = $_POST['password2'];

$message3="Password and confirm password should be same";

if(empty($email)){
?>
<script>
alert("You didn't enter email");
location.href='http://localhost/web/signup.html' ;
</script>
<?php    
}
else
if(empty($password)){
?>
<script>
alert("You didn't enter password");
location.href='http://localhost/web/signup.html' ;
</script>
<?php
}
else 
if(empty($conpass)){
?>
<script>
alert("You didn't enter confirm password");
location.href='http://localhost/web/signup.html' ;
</script>
<?php
}   
else if($password!=$conpass){
?>
<script>
alert("password and confirm password should be same");
location.href='http://localhost/web/signup.html';
</script>
<?php
}
else{

 $sql = "INSERT INTO login(email,password) VALUES ('$email','$password')";

if (mysqli_query($conn,$sql)) {
    echo "New record created successfully";
    echo "<script> location.href='http://localhost/web/login.html'</script>";
} else {
    echo 'Something went wrong';
        }}}}
mysqli_close($conn)
?>