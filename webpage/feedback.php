<?php require_once("authentication.php");?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Feedback Form</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.css" />
        <script language="javascript">
        function form_check() 
        {

			if(trimStr(document.emailform.email.value) == '')
				{
					alert('Input your email');
					return false;
				}
            if(trimStr(document.emailform.subject.value) == '')
                {
                    alert('Input your subject');
                    return false;
                }
            if(trimStr(document.emailform.message.value) == '')
                {
                    alert('Write your message ');
                    return false;
                }
        } 
        function trimStr(s)
        {
            return s.replace(/(^\s*)|(\s*$)/g, '');
        }
        </script> 
        
</head>
    <body>
		<div class="row" style="margin:0;">
			
			<div >
				<h2 style="text-align: left;padding:20px;color:#2C3E50;">Feedback Form</h2>
			</div>
				
			
			<div class="panel-body">
				<form method='post' name='emailform'  action='feedback.php' enctype='multipart/form-data' onsubmit='return form_check()'>           
				   
				   <div class="col-md-4 col-md-offset-4">
						<div class="form-group">
							<label>Your Email :<br/></label>
							<input name='email' type='text' class="form-control" placeholder='user@example.com'/>
						</div>
						
						<div class="form-group">
							<label>Subject :</label>
							<input name='subject' type='text' class="form-control" placeholder='Information'/>
						</div>
					
						<div class="form-group">
							<label>Message :<br/><textarea name='message' rows='15' cols='50' class="form-control" ></textarea></label>
						</div>
					
						<div class="form-group">
							<label>Attachement upload :  </label>
							<input type='file' name='file' id='file'/>
						</div>
						
						<br/><br/>
					
						<div class="form-group">
							<button type='submit' class='btn btn-success glyphicon glyphicon-check' style="-webkit-filter: grayscale(30%)">&nbsp;Submit</button>
							<button type='reset' class='btn btn-danger glyphicon glyphicon-repeat pull-right'style="-webkit-filter: grayscale(30%)">&nbsp;Reset</button>
						</div>
					</div>
				</form>
			</div>
	   </div>

 <?php
        
        require_once('connection.php');
        //use phpmailer to set smtp and send email
		$conn=Connection();
		
           if($_SERVER["REQUEST_METHOD"] == "POST")
               {
           
                $datenow = date("Y-m-d H:i:s");
				$email = $_POST['email'];
				@$subject = $_POST['subject']; 
                @$message = $_POST['message'];
                $sql="INSERT INTO FEEDBACK(date,email,subject,message) value('$datenow','$email','$subject','$message')"; 
                $query=mysqli_query($conn,$sql);

               
				if($query && mysqli_affected_rows($conn)==1)
				{
					echo 'notice input succeed';
					header("pagepricipale.php");
				}
				else
				{
					echo 'notice input failed <a href=".php"> click here for return </a>';
				}

			}
						

        ?>        

    </body>
</html>