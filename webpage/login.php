<?php //get session, 
    session_start();
    if(isset($_SESSION['userid'])){
    header("Location:index.php");
    exit();
}
?> 


<html>  
    <head>
        <title>login</title>    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.css" />
        <style>
            .error {color: #FF0000;margin:  5px 0px -10px 0px}
        </style>
    </head> 
    <body>
        
<?php
	
	
	
	
	require('connection.php');
    $user_Err=$password_Err='';
    $userid=@$_POST['userid'];
    $password=@$_POST['password'];
    //sql
	$conn=Connection();
    $sql="select userid,username,password from USER where userid='$userid'";
    $result=mysqli_query($conn,$sql);
	
if($_SERVER["REQUEST_METHOD"] == "POST")
    {    
        if($result && mysqli_num_rows($result)>0)
        {
            $row=mysqli_fetch_assoc($result);
            $password1=$row['password'];
            if($password1==$password)  // check if the password is match
            {
                session_start();
                $_SESSION['userid']=$userid;
                $_SESSION['username']=$row['username'];
                header("location:index.php");              
            }
            else
            {
                $password_Err="password wrong &nbsp; <a href='javascript:history.back(-1);'>click here for try again</a>";
                
            }
        }
        else
        {
            $user_Err= 'User non-registered';        
        } 
    }
  
 ?> 
        
<div class="container">
   
	<div class="panel-heading">
		<h2 style="text-align: center">User Login <span class="glyphicon glyphicon-user"> </h2>
	</div>
		
	<hr>
	<div class="panel-body">   
		
		<form id="login-form" action="login.php" method="post" role="form" style="display: block;">
		   
			<div class="col-md-4 col-md-offset-4">
				<div class="form-group">
					<div class="input-group" style="margin-bottom=30px">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="text" name="userid" id="userid" tabindex="1" class="form-control" placeholder="User ID" value="">
					</div>	
					<div class='error'><?php echo @$user_Err;?></div>
				</div>				
			
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
					</div>
					<div class='error'><?php echo @$password_Err;?></div>											
				</div>
				
				<div class="form-group">
					<div class="checkbox">
						<label>
							<input type="checkbox" value="remember-me"> Remember me
						</label>
					</div>
				</div>
				
				<div class="form-group">
					<input type="submit" name="submit" id="submit" tabindex="3" class=" btn btn-lg btn-primary btn-block" value="Log In">
				</div>
					
				<div class="form-group">    
					<div class="text-center">
						<a href="forget_password.php" tabindex="4">Forgot Password <span class="glyphicon glyphicon-search"> </span></a>
					</div>
				</div>
			</div>

		</form>
	</div>     
</div>
                    
    
    </body>
</html> 