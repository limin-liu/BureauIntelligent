<?php 
    
    include ("phpgraphlib.php");
	include ("../connection.php");
    
	$graph = new PHPGraphLib(1000,800);
      
	$conn = Connection();
    $query = "SELECT date, CO FROM CO ORDER BY date DESC limit 30";
    $result = mysqli_query($conn, $query);
    
    while ($row = mysqli_fetch_assoc($result)){
        $date=$row["date"];
        $co=$row["CO"];
        $dataArray[$date]=$co;
    }
    

    $graph->addData($dataArray);
    $graph->setTitle("CO lineGraph");
    $graph->setBars(false);
    $graph->setLine(true);
    $graph->setDataPoints(true);
    $graph->setDataPointColor('maroon');
    $graph->setDataValues(true);
//     $graph->setDataValuesColor('maroon');
    $graph->setGoalLine(.0025);
    $graph->setGoalLineColor('red');
    $graph->setTextColor("blue");
    $graph->createGraph();
    
    
?>