
					<?php
					
					session_start();
						$server="localhost";
						$user="root";
						$password="";
						$dbname="shopping";
						$conn=mysqli_connect($server,$user,$password,$dbname);
						

if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}

?>

<div class="full">
   <header>
    <div class="mainheader">
        <nav id="mainheader">
<?php

						
						
						if(isset($_SESSION['ID'])){
							$query = "select * FROM users ORDER BY ID ASC";
							$result = mysqli_query($conn,$query);
							
							if(mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_array($result)){
						if($_SESSION['ID']==$row['ID']){
							?>							
						<ul>
						<li class="logo"><a href="./index.php">Online Shop</a></li>
						<li class="search"><input type="text" name="search" maxlength="150" width="80px" value="Search for products..."><div class="searchb"></div></li>
						<li class="help"><a href="#">Help</a></li>
						<li class="register"><a href="#"><?php echo ucfirst($row['name']); ?> </a></li>
						<li class="login"><a href="./logout.php"><?php echo "Logout"; ?> </a></li>
						<li id="basket"><div class="bicon"></div><span class="bbt"><em>My Basket</em></span>
							<div class="basket" id="jbasket"><div class="pbt">Items in my basket</div><br><center>0 Item(s)</center></div>
						</li>
						</ul>
						<?php

						}
					}
				}
			}
			else{
			?>
				<ul>
                <li class="logo"><a href="./index.php">Online Shop</a></li>
                <li class="search"><input type="text" name="search" maxlength="150" width="80px" value="Search for products..."><div class="searchb"></div></li>
                <li class="help"><a href="#">Help</a></li>
                <li class="register"><a href="register.php">Register</a></li>
                <li class="login"><a href="./logme.php">Login</a></li>
                <li id="basket"><div class="bicon"></div><span class="bbt"><em>My Basket</em></span>
                    <div class="basket" id="jbasket"><div class="pbt">Items in my basket</div><br><center>0 Item(s)</center></div>
                </li>
				</ul>
			<?php
				}
			?>
        </nav>
       </div>
        <div id="menuheader">
        <ul id="mainul">
            <li style="width: 160px; margin-left: 100px;"><a href="#">Home &amp; Furniture</a>
            
            <ul>
                <li style=><a>Kitchen,Dining<span style="margin-left:0px;"><img src="./images/rarrow.png" width=15px height=10px/></span></a>
                    <ul>
                        <li><a>Dining Set</a></li>
                        <li><a href="./kitchen.php">Kitchen Tools</a></li>
                    </ul></li>
                <li><a>Home Decor<span style="margin-left:5px;"><img src="./images/rarrow.png" width=15px height=10px/></span></a>
                    <ul>
                        <li><a>Painting</a></li>
                        <li><a>Clocks</a></li>
                        <li><a>Showpieces</a></li>
                    </ul>
                </li>
            </ul>
            
            
            
            </li>
            <li><a href="#">Men</a>
            
            
            <ul>
                <li style="padding-left: 38px;"><a>Clothes<span style="margin-left:30px;"><img src="./images/rarrow.png" width=15px height=10px/></span></a>
                    <ul>
                        <li><a href="./men_tshirt.php">T-shirts</a></li>
                        <li><a>Shirts</a></li>
                        <li><a>Jeans</a></li>
                    </ul></li>
                <li style="padding-left: 38px;"><a>FootWear<span style="margin-left:20px;"><img src="./images/rarrow.png" width=15px height=10px/></span></a>
                    <ul>
                        <li><a>Sport Shoes</a></li>
                        <li><a>Formal Shoes</a></li>
                    </ul>
                </li>
            </ul>
            
            </li>
            <li><a href="#">Women</a>
            <ul>
                <li style="padding-left: 30px;"><a>Clothing<span style="margin-left:30px;"><img src="./images/rarrow.png" width=15px height=10px/></span></a>
                    <ul>
                        <li><a href="./sarees.php">Sarees</a></li>
                        <li><a href="./kurti.php">Kurtas &amp; Kurtis</a></li>
                        <li><a>T-shirts &amp; Tops</a></li>
                    </ul></li>
                <li style="padding-left: 30px;"><a>Jewellery<span style="margin-left:30px;"><img src="./images/rarrow.png" width=15px height=10px/></span></a>
                    <ul>
                        <li><a href="./jewellery.php">Gold Jwellery</a></li>
                        <li><a>Silver Jwellery</a></li>
                    </ul>
                </li>
            </ul>
            </li>
            <li><a href="#">Electronics</a>
            <ul>
                <li><a href="./laptop.php">Laptops<span style="margin-left:30px;"><img src="./images/rarrow.png" width=15px height=10px/></span></a>
                    </li>
                <li><a>Mobiles<span style="margin-left:30px;"><img src="./images/rarrow.png" width=15px height=10px/></span></a>
                    <ul>
                        <li><a href="./applephone.php">Apple</a></li>
                        <li><a>Honor</a></li>
                        <li><a>Oppo</a></li>
                    </ul>
                </li>
                <li><a href="./watches.php">Watches</a>
                </li>
            </ul></li>
            <li style="width: 180px; margin-right: 100px;"><a href="#">Sports, Books &amp; More</a>
            <ul>
                <li><a>Books<span style="margin-left:60px;"><img src="./images/rarrow.png" width=15px height=10px/></span></a>
                    <ul>
                        <li><a>Entrance Exams</a></li>
                        <li><a>Literature</a></li>
                        <li><a>Fiction</a></li>
                    </ul></li>
                <li><a>Sports<span style="margin-left:60px;"><img src="./images/rarrow.png" width=15px height=10px/></span></a>
                    <ul>
                        <li><a href="./cricket.php">Cricket</a></li>
                        <li><a>Badminton</a></li>
                        <li><a>Indoor Games</a></li>
                    </ul>
                </li>
            </ul>
            </li>
        </ul>
    </div>
    </header>
</div>
