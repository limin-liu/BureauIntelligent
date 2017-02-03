<?php


$query_air="select * from DUST ORDER BY date DESC limit 1" ;
$result_air=mysqli_query($conn,$query_air);
while ($row_air = mysqli_fetch_assoc($result_air)){
    $air=print_r($row_air['air'],true);
}
if ("80"<$air&&$air<="100"){$quality="5";}
if ("60"<$air&&$air<="80"){$quality="4";}
if ("40"<$air&&$air<="60"){$quality="3";}
if ("20"<$air&&$air<="40"){$quality="2";}
else if ("0"<=$air&&$air<="20"){$quality="1";}


$query_co="select * from CO ORDER BY date DESC limit 1" ;
$result_co=mysqli_query($conn,$query_co);
while ($row_co = mysqli_fetch_assoc($result_co)){
    $co=print_r($row_co['co'],true);
}
//$density=100*$co;

?>