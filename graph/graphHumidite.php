<?php 
    
    include ("phpgraphlib.php");
	include ("../connection.php");
    $graph = new PHPGraphLib(1000,800);
    
    $conn = Connection();
    $query = "SELECT date, humidite FROM DHT22 ORDER BY date DESC limit 30";
    $result = mysqli_query($conn, $query);
//     $row = mysqli_fetch_assoc($result);
    
    while ($row = mysqli_fetch_assoc($result)){
        $date=$row["date"];
        $humidite=$row["humidite"];
        $dataArray[$date]=$humidite;
    }
    

    $graph->addData($dataArray);
    $graph->setTitle("humidite lineGraph");
    $graph->setBars(false);
    $graph->setLine(true);
    $graph->setDataPoints(true);
    $graph->setDataPointColor('maroon');
    $graph->setDataValues(true);
    $graph->setTextColor("blue");
    $graph->createGraph();
    
    
?>