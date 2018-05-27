<?php
$server="localhost";
$user="root";
$password="";
$dbname="shopping";
$conn=mysqli_connect($server,$user,$password,$dbname);

if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
    echo "Hello";
}
if(isset($_POST['adduser']))
{
    $p1=$_POST['fname'];
    $p2=$_POST['email'];
    $p3=$_POST['pass'];
    $p4=$_POST['mobile'];
	$p5=$_POST['city'];
	$p6=$_POST['address'];
    $sql="INSERT INTO users(name,email,pass,mobile,city,address) VALUES ('$p1','$p2','$p3','$p4','$p5','$p6')";
    
   echo "Hello";
    
    if(mysqli_query($conn,$sql)){
         echo "Hello";
        echo "<script> alert('New record created successfully!')</script>";
       echo "<script> window.location.assign('index.php')</script>";
    
    }
    //else{
      //  echo "Error: ".$sql."<br>".mysqli_error($conn);
    //}   
}
else
    echo "not submittd";
?>