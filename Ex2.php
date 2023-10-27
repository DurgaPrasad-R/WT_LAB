<html>
<body>
<!-- Array in PHP
An array stores multiple values in one single variable
In PHP, there are three kinds of arrays:
- Numeric array
- Associative array: an array where each ID key is associated with a value
- Multidimensional array -->
<?php
function myFunction()
{
echo "Hello, We see Different types of Arrays Here:<br>";
}
// Function call
myFunction();
$flower_shop = array ("rose", "daisy","orchid");echo "Flowers:
".$flower_shop[0].",".$flower_shop[1].", ".$flower_shop[2]."";
echo "<br>";
$flower_shop = array ( "rose" => "5.00", "daisy" => "4.00", "orchid"
=> "2.00" );
// Display the array values
echo "\n";

echo "rose costs" .$flower_shop['rose'].",daisy costs
".$flower_shop['daisy'].",and orchid
costs ".$flower_shop['orchid']."";
echo "<br>";
foreach($flower_shop as $x=>$x_value) {
    echo "Flower=" . $x . ", Value=" . $x_value;
    echo "<br>";
    }
    $flower_shop = array(
        "rose" => array( "5.00", "7 items", "red" ),
        "daisy" => array( "4.00", "3 items", "blue" ),
        "orchid" => array( "2.00", "1 item", "white" ),
        );
        echo "rose costs ".$flower_shop['rose'][0].
        ", and you get ".$flower_shop['rose'][1].".<br>";
        echo "daisy costs ".$flower_shop['daisy'][0].
        ", and you get ".$flower_shop['daisy'][1].".<br>";
        echo "orchid costs ".$flower_shop['orchid'][0].
        ", and you get ".$flower_shop['orchid'][1].".<br>";

?>

</body>
</html>
