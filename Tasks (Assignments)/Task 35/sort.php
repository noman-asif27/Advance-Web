<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Task 35 - Sort Array
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
  <!-- Task 35 -->

  <!--Write a function to sort an array
-->

  <div class="container">
   
    <p id="myParagraph">
    <?php 
    echo "<h4>Students Array</h4>";

    $student = array("Ali","Hafiz","Aslam","Yasir","Noman","Mubashar","Sharjeel");
    
    foreach ($student as $std) {
      echo $std . ", ";
    }
    echo "<br>";
    echo "<h4>First Method To Sort Array</h4>";
   
    sort($student);
    print_r($student);

    
    
    ?>


    </p>
  </div>

</body>

</html>