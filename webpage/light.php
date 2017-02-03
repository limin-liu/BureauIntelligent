<!DOCTYPE html>

<?php require_once("authentication.php");?>

<?php  
$light = @$_GET['light'];
if($light == "on") {  
  $file = fopen("light.json", "w") or die("can't open file");
  fwrite($file, '{"light": "on"}');
  fclose($file);
} 
else if ($light == "off") {  
  $file = fopen("light.json", "w") or die("can't open file");
  fwrite($file, '{"light": "off"}');
  fclose($file);
}
?>

<html>  
  <head>      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LED for ESP8266</title>


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  </head>
  <body>
    <div class="row" style="margin: 0;">
        <div >
            <h2 style="text-align: left;padding:20px;color:#2C3E50;">Control System</h2>
        </div>
        <br>
        <div class="col-md-6 col-md-offset-3">
          <a href="?light=on" class="btn btn-success btn-block btn-lg" style="-webkit-filter: grayscale(30%);
	-moz-filter: grayscale(30%);													<!-- 灰度-->
	-ms-filter: grayscale(30%);
	-o-filter: grayscale(30%);
	filter: grayscale(30%);
	filter: gray;
	width: 100%">TURN ON</a>
          <br />
          <a href="?light=off" class="btn btn-danger btn-block btn-lg" style="-webkit-filter: grayscale(30%);
	-moz-filter: grayscale(30%);
	-ms-filter: grayscale(30%);
	-o-filter: grayscale(30%);
	filter: grayscale(30%);
	filter: gray;
	width: 100%">TURN OFF</a>
          <br />
          <div style="font-size:120%;margin: auto;color:#2C3E50; padding:10px;width:100%;height:200%;text-align:center;border:1 solid #000000;border-radius:5px;background-color:#FFFFFF;">
          <?php
            if($light=="on") {
              echo(" LED ON ");
            }
            else if ($light=="off") {
              echo(" LED OFF ");
            }
            else {
              echo ("LIGHT STATUS");
            }
          ?>
        </div>
      </div>
    </div>
  </body>
</html>  