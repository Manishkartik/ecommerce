<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, intial-scale=1">
		
				
<script>

function check()
{

 var r=0,count=0,num,c1=0,c2=0;

 if(fname.value=="")
  document.getElementById("fnamereq").style.visibility="visible",r=1;
 else
  document.getElementById("fnamereq").style.visibility="hidden";

 
 num=parseInt(mobile.value);
 for(i=num;i>0;i=Math.floor(i/10))
  count++;
 if(count!=10)
  document.getElementById("mobilereq").style.visibility="visible",r=1;
 else
  document.getElementById("mobilereq").style.visibility="hidden";
  
 c1=email.value.indexOf("@");
 c2=email.value.indexOf(".com");
 if(c1==-1||c2==-1)
  document.getElementById("emailreq").style.visibility="visible",r=1;
 else
  document.getElementById("emailreq").style.visibility="hidden";

 if(passlength()==1)
 {
  if(r==0)
  {
   r=1;
   alert("password must contain atleast 8 characters");
  }
 }
 else if(passmatch()==1)
 {
  r=1;
  alert("password not match!!!");
  cpass.value="";
 }

 if(r==1)
  return false;
 else
  return true;

}

function hide()
{
 document.getElementById("fnamereq").style.visibility="hidden";
 
 document.getElementById("mobilereq").style.visibility="hidden";
 document.getElementById("emailreq").style.visibility="hidden";
 document.getElementById("cpassmatch").style.visibility="hidden";
 document.getElementById("passlen").style.visibility="hidden";
}

function passmatch()
{
 if(pass.value==cpass.value && pass.value!="")
  document.getElementById("cpassmatch").style.visibility="visible";
 else
 {
  document.getElementById("cpassmatch").style.visibility="hidden";
  return (1);
 }
}

function passlength()
{
 document.getElementById("cpassmatch").style.visibility="hidden";
 if(pass.value.length<8)
 {
  document.getElementById("passlen").style.visibility="visible";
  return (1);
 }
 else
  document.getElementById("passlen").style.visibility="hidden";
}
</script> 
		
		
		
		
		
        <style>
            input {
                width: 77%;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }
            form {border: 3px solid #f1f1f1;
                width: 40%;
                margin-left: 30%;
                margin-right: 30%;
                margin-top: 5%}
            input[type=submit]{
                background-color: #fa1c1c;
                color: white;
                margin: 8px 0px;
                border: none;
                cursor: pointer;
                height: 22px;
                width: 77%;
                font-size: 15px;
                font-weight: bold;
                opacity: 0.9;
            }
            
            input[type=submit]:hover {
                opacity: 0.99;
                color: #000000;
            }
            
        </style>
    </head>
    <body>
	<div class="form-style-5">
      <h2 align="center">Register to create a Online Shop Account</h2>  
      <form action="userinsert.php" method="post" enctype="multipart/form-data" width="40%" onSubmit="return check()" onReset="hide()">
          <table align="center" width="100%" cellpadding="5px" cellspacing="5px">
              <tr>
                  <td align="right">User Name:</td>
                  <td><input type="text" name="fname" placeholder="Enter Your Name" id="fname"/>
				  <td><label id="fnamereq" class="required" style="color:red;visibility:hidden;">*required</label></td>
              </tr>
              <tr>
                  <td align="right">Email:</td>
                  <td><input type="email" name="email" placeholder="Enter your email"id="email"/></td>
				  <td><label id="emailreq" class="required" style="color:red;visibility:hidden;">*invalid</label></td>
              </tr>
              <tr>
                  <td align="right">Password:</td>
                  <td><input type="password" name="pass" placeholder="Enter your password" id="pass" onchange="passlength()"/>
				  <td><label id="passlen" style="color:red;visibility:hidden;">(min length 8)</td>
				  </td>
              </tr>
              <tr>
                  <td align="right">Confirm Password:</td>
                  <td><input type="password" name="cpass" placeholder="Enter your password again" id="cpass" onchange="passmatch()"/></td>
				  <td><label id="cpassmatch" style="color:green;visibility:hidden;">Password Match</td>
				  </td>
              </tr>
              <tr>
                  <td align="right">Mobile No.:</td>
                  <td><input type="text" name="mobile" placeholder="Enter your Mobile No"id="mobile"/></td>
				  <td><label id="mobilereq" class="required" style="color:red;visibility:hidden;">*invalid</label></td>
				  </td>
              </tr>
              <tr>
                  <td align="right">City:</td>
                  <td><input type="text" name="city" placeholder="Enter your City"/></td>
              </tr>
              <tr>
                  <td align="right">Address:</td>
                  <td><textarea rows="5" cols="30" name="address"></textarea></td>
              </tr>
              <tr>
                 <td></td>
                  <td><input type="submit" value="Register" name="adduser"/></td>
              </tr>
          </table>
      </form>
	  </div>
    </body>
</html>