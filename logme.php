<?php $ptitle="e-Mart | Login";?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, intial-scale=1">
		
		
		<?php
if(isset($_REQUEST["Login"]))
{
$server="localhost";
$user="root";
$password="";
$dbname="shopping";
$conn=mysqli_connect($server,$user,$password,$dbname);
if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}
echo'connection established';


$p1=$_POST["email"];
$p2=$_POST["pass"];
$sql="SELECT * from users";
$result = mysqli_query($conn, $sql);

while($row=mysqli_fetch_assoc($result)){

if ($row['email']=$p1 && $row['pass']=$p2) {
    session_start();
	$_SESSION['ID']=$row['ID'];
	header('location:index.php');
	}
	}
	echo'LOGIN FAILED';
	}

?>

        <style>
            body {font-family: Arial, Helvetica sans-serif;}
            form {border: 3px solid #f1f1f1;
                width: 40%;
                margin-left: 30%;
                margin-right: 30%;
                margin-top: 5%}
            input[type=email], input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }
            button{
                background-color: #4caf50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0px;
                border: none;
                cursor: pointer;
                width: 100%;
                font-size: 15px;
                font-weight: bold;
            }
            
            button:hover {
                opacity: 0.8;
                color: red;
            }
            
            .cancelbtn {
                width: auto;
                padding: 10px 18px;
                font-size: 15px;
                background-color: #f45336;
                font-weight: bold;
            }

            
            .cancelbtn:hover {
                background: #fa2412;
                color: black;
            }

            .imgcontainer {
                text-align: center;
                margin: 24px 0 12px 0;
            }
            
            img.avatar{
                width: 10%;
                border-radius: 50%;
            }
            
            .container{
                    padding: 16px;
            }
            
            span.psw{
                float: right;
                padding-top: 16px;
            }
            
            @media screen and (max-width: 300px) {
                span.psw{
                    display: block;
                    float: none;
                }
                .cancelbtn{
                    width: 100%;
                }
            }
        </style>
        <title>Login</title>
    </head>
    <body>
        <h2 align="center">Login in your Online Shop Account</h2>
        <form action="logme.php" method="POST">
            <div class="imgcontainer">
                <img src="images/userlogo.png" alt="userlogo" class="avatar">
            </div>
            <div class="container">
                <label for="umailid"><b>Email Id</b></label>
                <input type="email" placeholder="Enter your Email Id" name="email" id="email" required>
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="pass" id="pass" required>
                <button type="submit" value="Login" name="Login" id="Login">Login</button>
                <label>
       
            </div>
            <div class="container" style="background-color:#f1f1f1">
                <span class="psw"><a href="#">Forgot password?</a></span>
            </div>
        </form>
    </body>
</html>