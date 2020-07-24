<?php

 if($_SERVER['REQUEST_METHOD']=='POST'){

        $conn = mysqli_connect('localhost','root','','craft');
        if(!$conn)
        { 
            die(" Error in connection".mysqli_connect_erro());
        }else{
$namep = $_POST['name'];
$price = $_POST['price'];
$sd=$_POST['sd'];
$dis=$_POST['dis'];
$catg=$_POST['catg'];
//echo $catg;

session_start();
$uem=$_SESSION['var'];

if(isset($_POST['but_upload'])){
 
 // $name = $_FILES['file']['name'];
  $target_dir = "mini/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);
  $DefaultId = 0;
  $GetOldIdSQL ="SELECT id FROM images ORDER BY id ASC";
 
  $Query = mysqli_query($conn,$GetOldIdSQL);
  
  while($row = mysqli_fetch_array($Query)){
  
  $DefaultId = $row['id'];
  }
  $name="$DefaultId.png";
  $ServerURL = "http://localhost/web/mini/$name";
  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//echo $imageFileType;
  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
 
     // Insert record
     $query = "insert into images(emailseller,name,image,price,category,sdis,discription) values('$uem','$namep','$ServerURL','$price','$catg','$sd','$dis')";
     mysqli_query($conn,$query);
  
     // Upload file
     move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
     echo "<script> location.href='http://localhost/web/index.php'</script>";
    }
  }
 
}}
?>

