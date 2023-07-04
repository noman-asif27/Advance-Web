<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Task 34 - For Each Loop
  </title>

  <style>
    
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      padding: 20px;
    }

    .container {
      max-width: 500px;
      margin: 0 auto;
      background-color: #ffffff;
      padding: 40px;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      color: #333333;
    }

    input{
      display: block;
      margin: 20px auto;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    button {
      display: block;
      margin: 20px auto;
      padding: 10px 20px;
      font-size: 16px;
      background-color: #4caf50;
      color: #ffffff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #45a049;
    }

    p {
      text-align: center;
      color: #666666;
      font-size: 18px;
      text-align: justify;
    }
  </style>
</head>

<body>
  <!-- Task 34 -->

  <!--You need to write a program in PHP using for...each loop to remove specific elements by value from an array using PHP program.
Hint:
•	Take an array with list of month names.
•	Take a variable with the name of value to be deleted
s
-->

  <div class="container">
   
    <p id="myParagraph">
    <?php 
    echo "<h4>Month Array</h4>";

    $month = array("Jan","Feb","Mar","Apr","May","June","July","Aug","Sept","Oct","Nov","Dec");
    foreach ($month as $mon) {
      echo $mon . "\n";
    }
    echo "<br>";
    echo "<h4>First Method Using Unset to Remove March from Array</h4>";
    unset($month[2]);
    foreach ($month as $mon) {
      echo ($mon . "\n");
  }
    echo "<br>";
    echo "<h4>Second Method Using Foreach Dynamicaly Delete March</h4>";
    $deleteValue = 'Mar';
    foreach ($month as $key => $mon) {
    if ($mon === $deleteValue) {
        unset($month[$key]);
    }
    }
    foreach ($month as $mon) {
    echo $mon . "\n";
}
    echo "<br>";
    echo "<br>";
    echo "<h4>Third Method Using Array Search Dynamicaly Delete October</h4>";
    $delete_Key = "Oct";
    $key = array_search($delete_Key, $month);
    unset($month[$key]);
    foreach($month as $mon){
      echo $mon . "\n";
    }


    echo "<br>";
    echo "<br>";
    echo "<h4>Four Method Using If Condition Dynamicaly Delete September</h4>";
    $delete_Value = "Sept";
    if(($key2 = array_search($delete_Value, $month)) !== false ){
      unset($month[$key2]);
      // var_dump($key2);

    }
    foreach($month as $mon){
      echo $mon . "\n";
    }

    echo "<br>";
    echo "<br>";
    echo "<h4>Fifth Method Using Array Diff Dynamicaly Delete December</h4>";
    $delete_Value = "Dec";
    $key3 = array_diff($month, array($delete_Value));
    foreach($key3 as $mon){
      echo $mon . "\n";
    }

    echo "<br>";
    echo "<br>";
    echo "<h4>Six Method Using Array Keys Dynamicaly Delete August</h4>";
    $deleteItem = "Aug";
    foreach (array_keys($month, $deleteItem) as $key) {
      unset($month[$key]);
    }
    foreach($month as $mon){
      echo $mon . "\n";
    }
    ?>


    </p>
  </div>

</body>

</html>