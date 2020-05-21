<?php
session_start();
include("connection.php");
extract($_REQUEST);
if(isset($_SESSION['id']))
{
	header("location:food.php");
}
  if(isset($login))
  {
	$sql=mysqli_query($con,"select * from tblvendor where fld_email='$username' && fld_password='$pswd' ");
    if(mysqli_num_rows($sql))
	{
	 $_SESSION['id']=$username;
	header('location:food.php');	
	}
	else
	{
	$admin_login_error="Invalid Username or Password";	
	}
  }
   
?>

<head>
  <meta charset="UTF-8">
    <title>Hotel Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel = "stylesheet" href = "css/main.css">

		<style>
		ul li{}
		ul li a {color:white;padding:40px; }
    ul li a:hover {color:white;}
    label{ color: whitesmoke;}
		</style>
</head>
<body>

<?php
include("navbar.php");
?>

<div class="middle" style=" position:fixed; padding:40px; border:1px solid #ffc107; left:30%; top:30%; width:400px;">
       <ul class="nav nav-tabs nabbar_inverse" id="myTab" style="background:#ffc107;border-radius:10px 10px 10px 10px;" role="tablist">
          <li class="nav-item">
             <a  class="nav-link active" style="color:black;" id="home-tab" data-toggle="tab" href="#login" role="tab" aria-controls="home" aria-selected="true">Hotel Login</a>
          </li>
         
              <a class="nav-link" id="profile-tab" style="color:black;"    aria-controls="profile" aria-selected="false">Welcome</a>
          
       </ul>
	   <br><br>
	   <div class="tab-content" id="myTabContent">
	   <!--login Section-- starts-->
            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="home-tab">
			    <div class="footer" style="color:red;"><?php if(isset($admin_login_error)){ echo $admin_login_error;}?></div>
			  <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                           <label for="username">Username:</label>
                           <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" required/>
                        </div>
                        <div class="form-group">
                             <label for="pwd">Password:</label>
                             <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required/>
                        </div>
                        
                          <button type="submit" name="login" style="background:black; border:1px solid #ffc107;"class="btn btn-primary">Submit</button>
                          <a href="vendor-new.php"><button type="button" name="new" class="btn btn-warning">Sign Up for New Account</button></a>
                 </form>
			</div>
			<!--login Section-- ends-->
			
			
            
      </div>
	  </div>
	   
</body>
