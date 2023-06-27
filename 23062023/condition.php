<!DOCTYPE html>
<html>
<body>

<?php

$letter = [];
for ($i='A';$i!='AA';$i++){
    array_push($letter, $i);
}
print_r($letter);

echo "<br>";

$i = 1;
while($i<=5){
    echo $i."<br>";
    $i++;
}

echo "<br>";


$day = date('l');
if($day == "Friday"){
    echo "Have a nice Friday";
} elseif($day == "sunday"){
    echo "Have a Happy Weekend";
} else {
    echo "Have a Nice Day";
}

echo "<br>";
$dayOfWeek = date('l'); // Get the current day of the week

switch ($dayOfWeek) {
    case 'Monday':
        $menu = "Spaghetti Bolognese";
        break;
    case 'Tuesday':
        $menu = "Grilled Chicken with Rice";
        break;
    case 'Wednesday':
        $menu = "Beef Stir-Fry";
        break;
    case 'Thursday':
        $menu = "Vegetable Curry";
        break;
    case 'Friday':
        $menu = "Fish and Chips";
        break;
    case 'Saturday':
        $menu = "Pancakes with Maple Syrup";
        break;
    case 'Sunday':
        $menu = "Roast Beef with Mashed Potatoes";
        break;
    default:
        $menu = "Menu not available";
        break;
}

echo "Today's Menu: " . $menu;





// $x = 20;
// if($x <= 40){
// echo "x is small";
// }else{
// echo "x is big";
// };

// $cars=array("Volvo","BMW","Toyota"); 
// echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
// echo "<br>";
// foreach($cars as $value){
//   echo "I like " . $value ."<br>";

// }




?>

</body>
</html>
