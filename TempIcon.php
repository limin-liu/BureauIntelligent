

<!doctype html>
<html>
<head>
<link rel="stylesheet" href="css/thermometer.css">

</head>
<body>
<?php
   
	include("connection.php"); 	
	
	$conn=Connection();

	$query="select temperature from DHT22 ORDER BY date DESC limit 1" ;
	$result=mysqli_query($conn,$query);
     while ($row = mysqli_fetch_assoc($result)){  
         $temps=print_r($row['temperature'],true);
        }
    
// 	echo $temps;
    $tempsreal=489.1-10*$temps;//489.1= 619-129.9,也可以用500 代替。这个值算出来为温度计显示的高度。 满温度为50°c，底为0°c，温度计长489.1xp
?>
	<div class="svgCont" style="max-height:25px;max-width:120px;margin:auto;left:0%;border:1 solid #FFFFFF">
      <div >
             <svg xmlns="http://www.w3.org/2000/svg" width="619" height="129.9" viewBox="0 0 619 129.9">
              <style>
                .st0{fill:#E6E7E8;} .st1{fill:#EE3A43;} .st2{fill:#FFFFFF;} .st3{fill:none;stroke:#D1D3D4;stroke-width:7;stroke-miterlimit:10;}
              </style>
              <path d="M552 3.5c-17.4 0-34.1 6.7-46 19.7H44.8c-22.5 0-41.3 17.3-41.3 39.3v4.8c0 10.7 4.7 21.4 12.5 29 7.7 7.6 18.1 12 28.8 12h461.7c11.8 11 28.2 18.2 45.5 18.2 35 0 63.5-27.6 63.5-61.4S587 3.5 552 3.5z" class="st1"/>
              
              <rect id="thermometerLineBody" width=<?php echo $tempsreal?> height="42" x="27" y="44.4" class="st2"/>
              
    <!--           <circle id="thermometerLineHead" cx="40" cy="64.9" r="20" class="st1"/> -->
              <path d="M552 3.3c-17.4 0-34.1 6.7-46 19.7H44.8C22.3 23 3.5 40.3 3.5 62.3v4.8c0 10.7 4.7 21.4 12.5 29 7.7 7.6 18.1 12 28.8 12h461.7c11.8 11 28.2 18.2 45.5 18.2 35 0 63.5-27.6 63.5-61.4S587 3.3 552 3.3zm0 98.1c-14.4 0-27-7.5-33.6-18.5H44.8c-8.4 0-15.8-7.1-15.8-15.5v-4.8c0-8.3 7.4-14.8 15.8-14.8H518c6.5-11 19.3-19.4 33.9-19.4 21.3 0 38.5 16.3 38.5 36.4.1 20.3-17.2 36.6-38.4 36.6z" class="st2"/>
              <path d="M552 3.5c-17.4 0-34.1 6.7-46 19.7H44.8c-22.5 0-41.3 17.3-41.3 39.3v4.8c0 10.7 4.7 21.4 12.5 29 7.7 7.6 18.1 12 28.8 12h461.7c11.8 11 28.2 18.2 45.5 18.2 35 0 63.5-27.6 63.5-61.4S587 3.5 552 3.5z" class="st3"/>
            </svg>     
      </div>
      
</div>
</body>

</html>