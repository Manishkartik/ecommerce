<?php
if(isset($_POST['submit'])){
$server="localhost";
$user="root";
$password="";
$db="ecommerce";

//create connection
$conn=mysqli_connect($server,$user,$password,$db);

//check for connection

if(!$conn){
    die("Connection Failed".mysqli_connect_error());
}
else{
    $uname=$_POST['uname'];
    $umail=$_POST['umail'];
    $upassword=$_POST['upassword'];
    $umobile=$_POST['umobile'];
    $ucity=$_POST['ucity'];
    $uaddress=$_POST['uaddress'];
    
$sql="INSERT INTO user_registration(user_id, user_name, user_email, user_pass, user_mobile, user_city, user_address) values('$uname','$uemail','$upassword','$umobile','$ucity','$uaddress')";
if(mysqli_query($conn, $sql)){
    echo "<script type='text/javascript'>alert('Registered Successfully');</script>";
     header('Location: /ecommerce/login.php');
}
}
}

?>