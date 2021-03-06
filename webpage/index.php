<?php require("authentication.php");?>


<!DOCTYPE html>
<html>
<head>

<!-- every 5min refresh automatique -->
<meta charset="UTF-8" http-equiv="refresh" content="300">  
        

	<!-- STYLESHEETS START -->
	<!-- Bootstrap style sheet -->
	<link rel="stylesheet" href="css/bootstrap.css" />
	<!-- Sunshine specific style sheet -->
	<link rel="stylesheet" href="css/styles.css" />
	<!-- STYLESHEETS END -->
	<!-- font-awesome BEGINS -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- font-awesome END -->
	<link rel="stylesheet" href="css/Index.css" >
	<!-- FONTS START -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
	<!-- FONTS END -->
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<!-- webticker jquery   https://maze.digital/webticker/  -->
	<script src="js/cripts.js"></script>
	
	<!-- PRE-LOADER JAVASCRIPT START -->
    <script src="js/pace.min.js" type="text/javascript"></script> 
	
	
   <script type="text/javascript">
	  
	   /*
	      The function below is used to:
			1. show/hide picture
	   */
	   
	   /*
	   $(document).ready(function(){
			$('#air-btn').click(function(){
				  if ( $('#air').css('visibility') == 'hidden' )
					$('#air').css('visibility','visible');
				  else
					$('#air').css('visibility','hidden');
				});
		});

	   $(document).ready(function(){
			$('#temperature-btn').click(function(){
				  if ( $('#temperature').css('visibility') == 'hidden' )
					$('#temperature').css('visibility','visible');
				  else
					$('#temperature').css('visibility','hidden');
				});
		});

	   $(document).ready(function(){
			$('#co-btn').click(function(){
				  if ( $('#co').css('visibility') == 'hidden' )
					$('#co').css('visibility','visible');
				  else
					$('#co').css('visibility','hidden');
				});
		});
		
		*/
		
		/*
			The function below is used to:
			1. start the ticker on the home page
		*/		
		$(document).ready(function() {

			var current = 1;
			var height = $('.ticker').height();
			var numberDivs = $('.ticker').children().length;
			var first = $('.ticker h3:nth-child(1)');
			setInterval(function() {
				var number = current * -height;
				first.css('margin-top', number + 'px');
				if (current === numberDivs) {
					first.css('margin-top', '0px');
					current = 1;
				} else current++;
			}, 2500);
					});

   </script>

<title>Bureau Intelligent</title>

</head>

<body>

	<div class="container" style="margin: 0px; width: 100%;height:100%;align:center">
<!-- MAIN NAV START -->
		<div class="row" >
			<nav class="navbar-fixed-top" style="border-radius:0 0 5px 5px;background:#BDBDBD; width: 100%;margin:0 auto;">
				  <!-- 		<div class="navbar-fixed-top/navbar-static-top">         固定在网页顶部-->
				  <div style="width: 80%; margin:0 auto;">
  
        			<ul class="nav navbar-nav">	<!-- 下拉单 -->
        				<li class="navbar-header">
                            <a class="navbar-brand" style="left: 0" href="#header">Bureau Intelligent</a>
                        </li>
        			</ul>
        			<div class="collapse navbar-collapse" id="navbar-collapse-1">
            			<ul class="nav navbar-nav navbar-right" >
            				<li>
            					<a href="#header">
            						<i class="fa fa-home" aria-hidden="true"></i> home
            					</a>
            				</li>
            				<li class="dropdown">
            					<a href="#" class="dropdown-toggle" data-toggle="dropdown" >
            						<i class="fa fa-cog" aria-hidden="true"></i> Settings
            						<!-- <b class="caret"></b> -->
            					</a>
            					<ul class="dropdown-menu"> 
            						<li><a href="#">Créer un mode</a></li>
            						<li><a href="#">Another Action</a></li>
            						<li class="divider"></li>
            						<li><a href="#">Something else</a></li>
            					</ul>
            				</li>
            				<li>
            					<a href="#sante">
            						<i class="fa fa-area-chart" aria-hidden="true"></i> Statistic
            					</a>
            				</li>
            				<li>
            					<a href="#light">
            						<i class="fa fa-toggle-on" aria-hidden="true"></i> Controle
            					</a>
            				</li>
            				<li>
            					<a href="#about">
            						<i class="fa fa-thumbs-up" aria-hidden="true"></i> About Us
            					</a>
            				</li>
            				<li class="dropdown">
            					<a href="#" class="dropdown-toggle"  data-toggle="dropdown">
            						<i class="fa fa-user" aria-hidden="true"></i> Me
<!--             						<b class="caret" ></b> -->
            					</a>
            					<ul class="dropdown-menu"> 
            						<li>	
										<a href="photo/profile.png">profil	
											<img class="img-circle" style="height:auto; width:25px;margin-left:12px;" alt="profil" src = "photo/profile.png"/>
										</a>  
									</li>
            						<li class="divider"></li>
            						<li><a href="#">Préférences</a></li>
            						<li><a href="#">Paramètres</a></li>
            						<li><a href="logout.php?action=logout">Déconnexion</a></li>
            						<li class="divider"></li>
            						<li><a href="#">Aide</a></li>
            						<li><a href="#feedback">Signaler un problème</a></li>
            					</ul>
            				</li>
                   	    
            			</ul>
            		</div>
        		</div>
			</nav>
		</div>
<!-- MAIN NAV END -->
<!-- HOME START -->
		
        <header id="header">
            <div class="container" >
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1 col-sm-5" id="intro"  >
                        <h1><strong>Welcome</strong> back!</h1>
                        <br>
                        <!-- TICKER START -->
                         <div class="ticker">
                            <h3><strong>Bereau</strong> intelligent</h3>
                            <h3><strong>Bright</strong> ideas.</h3>
                            <h3><strong>Amazing</strong> results.</h3>
                        </div>
						<br>
                        <!-- TICKER END -->
                        <p> Be tough: Hard work beats talent when talent doesn't work hard.</p>
                        <br>
                        <a href="#about" class="btn btn-transparent scroll"><strong>LEARN MORE</strong></a>
                        <a href="#about" class="btn btn-link btn-white scroll">Get Help</a>
                    </div>
                </div>
            </div>
        </header>
	</div>
		
<!-- HOME END -->
	<div style="width:100%; background: url('photo/services.jpg') fixed no-repeat;"> 
		
		<div class="row">
		</div>
		
		<div id="sante" class="row" style="position:static;width:100%;  margin:0 auto; border-radius:5px;padding: 25px 25px 25px 25px; background-color:#2C3E50;background-color: rgba(255,255,255,0.7);width:90%;horiz-align:middle; margin:50px auto 30px auto;">
			<div class="view" style="margin:25px;">
				<div>
					<h2 class="sante">Health Care System</h2>
				</div>
				<div class="col-md-12 column ui-sortable">
					
					<div class="box box-element" class="margin:20px;">
					 	<div style="width:100%;height:150px">
							
							
							<span style="height:100%;width:auto;border:0px solid #00F;">
                            <!-- border:1px solid #00F; -->
								<?php include 'TempIcon.php'; ?>
								<a id="temperature-btn" style="text-decoration: none;color:black;" href="datatable/tableTemperature.html" target="_blank" >Temperature : <?php echo $temps;?> °C</a></br>
							
							<!-- 点击显示图片  				
								<div id="temperature" style="visibility:hidden;width: 30%">
                        			<img alt="First slide" style="width: 100%;margin-top:0%" src="graphTemperature.php" ></img>
                        		</div>  -->
							</span>
						
                        	
							<?php include 'readdata.php';?>
							
                            
							<span style="left:40%;height:100%;width:auto;border:0px solid #00F;">
								
								<div><a id="air-btn" style="text-decoration: none;color:black;" href="datatable/tableDust.html" target="_blank" >Air quality : <?php echo $air ;?> %</a> </div></br>
								
								<img id="svg1" src="photo/dustevil<?php echo $quality ;?>.png"  style="border:0px solid #00F;height:80%;max-width:auto;">
							
							<!-- 点击显示图片							
								<div id="air" style="visibility:hidden;width: 50%">
                        			<img alt="Second slide" style="width: 100%;margin-top:-40%" src="graphDust.php" ></img>
                        		</div>  -->
							</span>
							
							
						<!-- 	可用opacity改变透明度 -->
							<span style="left:80%;border:0px solid #00F;height:100%;width:auto;">
								
								<div><a id="co-btn" style="text-decoration: none;color:black;" href="datatable/tableCO.html" target="_blank" >Density of CO : <?php echo $co ;?></a> </div></br>
								
								<img id="jpg1" src="photo/poisin4.png" style="border:0px solid #00F;height:80%;max-width:auto;-webkit-mask-image:-webkit-gradient(linear, left top, left bottom, from(rgba(0,0,0,<?php echo $co ;?>)), to(rgba(0,0,0,0.05)));"/>
								
							<!--  点击显示图片	
								<div id="co" style="visibility:hidden;width: 150%">
                        			<img alt="Fourth slide" style="width: 100%;margin-top:-40%" src="graphCO.php" ></img>
                        		</div>  -->
							</span>
						</div>
					</div>
				</div>
			</div>
			
			<div style="margin:15px">				
				<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#graphcarousel">
					<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
				</button>
				<div id="graphcarousel" class="collapse">
					<?php include'carousel.php';?>
				</div>
			</div>

		</div>
		
		
	
		<div id="light" style="border-radius:5px;padding: 40px; background-color:#D8D8D8;background-color: rgba(255,255,255,0.7);width:90%;horiz-align:middle; margin:50px auto 30px auto;">
			<?php include 'light.php';?>
		</div>
		
		
		
		<div id="about" class="row" style="border-radius:5px;padding: 40px; background-color:#FFFFFF;background-color:rgba(255,255,255,0.7);width:90%;horiz-align:middle; margin:50px auto 30px auto;">
			<div>
				<h2 class="about-us">About This Group</h2>
			</div>
			<div class="col-md-3 column ui-sortable" style="border:0px solid #00F;"> 
				<div class="widthandlength" style="border:0px solid #00F;">
					<h3 class="member-name" style="position:relative">Simon</h3>
    			
    				<div class="" >
    					<img class="grey" style="opacity:1;position:relative" alt="simon" src="photo/simon.jpg">
    				</div>
<!-- 					<p><a class="btn" href="#">View details >></a></p> -->
				</div>
			</div>
			<div class="col-md-3 column ui-sortable" style="border:0px solid #00F;"> 
				<div class="widthandlength">
					<h3 class="member-name">Paul</h3>
    				
    				<div class="">
    					<img class="grey" alt="paul" src="photo/paul.jpg">
    				</div>
<!-- 					<p><a class="btn" href="#">View details >></a></p> -->
				</div>
			</div>
			<div class="col-md-3 column ui-sortable" style="border:0px solid #00F;">
				<div class="widthandlength">
					<h3 class="member-name">Limin</h3>
    				
    				<div class="">
    					<img class="grey" alt="limin" src="photo/limin.jpg">
    				</div>
<!-- 					<p><a class="btn" href="#">View details >></a></p> -->
				</div>
			</div>
			<div class="col-md-3 column ui-sortable" style="border:0px solid #00F;"> 
				<div class="widthandlength">
					<h3 class="member-name">Shui</h3>
    			
    				<div class="">
    					<img class="grey" alt="shui" src="photo/shui.jpg">
    				</div>
<!-- 					<p><a class="btn" href="#">View details >></a></p> -->
				</div>
			</div>
		</div>
		
		
		<div id="feedback" class="row" style="border-radius:5px;padding: 40px; background-color:#FFFFFF;background-color:rgba(255,255,255,0.7);width:90%;horiz-align:middle; margin:50px auto 30px auto;">
		
			<?php include 'feedback.php';?>
			
		</div>
		
		<br>
		<footer class="footer">
			<div class="container">
				<p class="pull-right"><a href="#">Back to top</a></p>
				<p>Copyright © 2016-2017 Bureau Intelligent group. All rights reserved.</p>
			</div>
		</footer>
		
		
	</div>


</body>
</html>