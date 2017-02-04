<?php 
    include ("phpgraphlib.php");
	include ("../connection.php");
    $graph = new PHPGraphLib(1000,800);
    
    
    $conn = Connection();
    $query = "SELECT DATE_FORMAT(date,'%H:%i:%s') as time,temperature FROM DHT22 ORDER BY date DESC limit 30";  //show only hour and minute from date 
    //$query = "SELECT date, temperature FROM DHT22 ORDER BY date DESC limit 30";
	$result = mysqli_query($conn, $query);
//     $row = mysqli_fetch_assoc($result);
    
    while ($row = mysqli_fetch_assoc($result)){
        $date=$row["time"];
        $temperature=$row["temperature"];
        $dataArray[$date]=$temperature;
    }
    
//     while ($row = mysqli_fetch_assoc($result)){
//        print_r($row);
//     }
//     -------------bar graph-----------------
//     $graph->addData($dataArray);
//     $graph->setTitle("Temperature barGraph");
//     $graph->setGradient("lime","green");
//     $graph->setTextColor("blue");
//     $graph->createGraph();
    
    $graph->addData($dataArray);
    $graph->setTitle("Temperature lineGraph");
    $graph->setBars(false);
    $graph->setLine(true);
    $graph->setDataPoints(true);
    $graph->setDataPointColor('maroon');
    $graph->setDataValues(true);
  //  $graph->setDataValuesColor('maroon');
    //$graph->setGoalLine(25);
    //$graph->setGoalLineColor('red');
    $graph->setTextColor("blue");
    $graph->createGraph();
    
    
?>