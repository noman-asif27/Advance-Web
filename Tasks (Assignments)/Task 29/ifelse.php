<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Task 29 - PHP If Else Condition
</title>

  

</head>

<body>
  <!-- Task 29 -->

  <!--Use the If...else statement of PHP to write a code to Display
“Good Morning” or “Good Afternoon” according to current
time.

 -->

 <h2 class="container text-center">IF Else Statement Condition</h2>
 <div style="margin-top:20px;color:red;font-size:40px" class="container text-center mt-sm">

 <?php
$currentTime = date("H:i");



if ($currentTime < "12:00") {
    echo "Good Morning";
} if($currentTime < "19:00"){
  echo "Good Afternoon";
}else {
    echo "Good Night";
}
?>


 
</div>
  
  
</body>

</html>