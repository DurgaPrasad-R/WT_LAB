<?php
echo "Welcome, Let's see various types of Arrays";
echo "<br>";
echo "1. Numeric Arrays:";
echo "<br>";
$arr = array('Rose','Daisy','Jasmine');
echo "Flowers:".$arr[0].",".$arr[1].",".$arr[2];
echo "<br>";
echo "2. Associative Arrays:";
echo "<br>";
$flower_shop = array('ROSE' => 12,'DAISY' => 15, 'Jasmine' => 18);
echo "List of Flowers and their Costs:";
echo "<br>";
echo "ROSE:".$flower_shop['ROSE'];
echo "<br>";
echo 'DAISY:'.$flower_shop['DAISY'];
echo "<br>";
echo 'JASMINE:'.$flower_shop['Jasmine'];
echo "<br>";
echo "Looping:";
echo "<br>";
foreach($flower_shop as $x=>$x_value){
    echo $x.":".$x_value."<br>";
}
echo "3.Multi-Dimensional Arrays:<br>";
$flower_shop_costs = array(
    "Rose" => array(10,5,'red')
);
echo "Rose costs: ".$flower_shop_costs["Rose"][0]." and you will get:".$flower_shop_costs["Rose"][1]." items";
?>
