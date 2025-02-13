<?php
$car = array("Volvo","BMW", "Toyoto");
array_splice($car,1 ,1);
var_dump(($car));
?>
<?php
$car = array("brand" => "Volvo", "modal"=> "BMW",  "year"=> "Toyoto");
//arry_shift method deleting or removuing arry//

//srot()=ascending order, rsort()=[decending order, ]
array_shift($car) 
?>

<?php
$car = array("Volvo","BMW", "Toyoto");
sort($car);
$numbers=array(4,6,2,22,11);
sort($numbers);
var_dump(($car));
?>

<?php
$car = array("Volvo","BMW", "Toyoto");
rsort($car);
$numbers=array(4,6,2,22,11);
rsort($numbers);
var_dump(($car));
?>

<?php
$age = array("peter"=>"35","gopi"=>"20","joe"=>"24");
asort(($age));
var_dump(($age));
?>

<?php
$age = array("peter"=>"35","gopi"=>"20","joe"=>"24");
ksort(($age));
var_dump(($age));
?>

<?php
$age = array("peter"=>"35","gopi"=>"20","joe"=>"24");
arsort(($age));
var_dump(($age));
?>

<?php
$age = array("peter"=>"35","gopi"=>"20","joe"=>"24");
krsort(($age));
var_dump(($age));
?>


<?php
$cars=array(
    array("volvo",22,18),
    array("bmw",15,13),
    array("saab",5,2),
    array("land rover",17,15),
);
echo $car[0][0].": Instock: ".$car[1][0].",sold: ".$car[0][2].".<br>";
echo $car[1][0].": Instock: ".$car[1][1].",sold: ".$car[1][2].".<br>";
echo $car[2][0].": Instock: ".$car[2][1].",sold: ".$car[2][2].".<br>";
echo $car[3][0].": Instock: ".$car[3][1].",sold: ".$car[3][2].".<br>";

var_dump($cars);
?>


<?php
$cars=array(
    array("volvo",22,18),
    array("bmw",15,13),
    array("saab",5,2),
    array("land rover",17,15),
);
for ($row = 0; $row <4; $row++){
    echo "<p><b>row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++){
        echo "<li>".$car[$row][$col]."</li>";

    }
    echo "</ul>";
}
?>


<hr>
<?php
$name=array("gopi","raju","ravi");
$marks=array("50","70","40");
$c=array($name,$marks);
print_r($c);
var_dump($c);
?>
<hr>

<?php
$name=array("gopi","raju","ravi","kaja");
print_r(array_chunk($name,1, true));
var_dump($name);
?>


<?php
$a=array("gopi 12","raju 21","ravi 312","kaja 32");
print_r(array_count_values($a));
var_dump($a);
?>



<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("ae"=>"red","f"=>"green","g"=>"blue");
$a3=array("ae"=>"red","f"=>"green","g"=>"blue");
print_r(array_count_values($a1));
var_dump($a1);
?>

<!-- prime numbers-->

<?php 


?>