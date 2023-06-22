<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Task 27 - PHP Loops to display
numbers on
screen
</title>

  

</head>

<body>
  <!-- Task 27 -->

  <!-- Write a Program to display count, from 5 to 15 (as shown
below) using following:
• For Loop
• While Loop
• Do…while Loop
 -->

 <h2 class="container text-center">For Loop, While Loop, Do-While Loop</h2>
 <div style="margin-top:20px;color:red;font-size:40px" class="container text-center mt-sm">

 <?php
echo "Using For Loop:\n";
for ($i = 5; $i <= 15; $i++) {
    echo $i . " ";
}

echo "<br>";
echo "\nUsing While Loop:\n";
$i = 5;
while ($i <= 15) {
    echo $i . " ";
    $i++;
}

echo "<br>";

echo "\nUsing Do...while Loop:\n";
$i = 5;
do {
    echo $i . " ";
    $i++;
} while ($i <= 15);




?>



 
</div>
  
  
</body>

</html>