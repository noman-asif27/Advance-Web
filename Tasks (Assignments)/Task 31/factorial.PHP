<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Task 31 - Factorial Number
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
  <!-- Task 31 -->

  <!--Write a program to calculate factorial of a number using for
loop in PHP.

 -->

  <div class="container">
    <h1>Enter The Number to Find Factorial Number</h1>
    <form method="POST">
      <input type="text" name="dse" placeholder="Enter The Number" />
    <button type="submit" id="myButton">Click to Get Factorial Number</button>
    </form>
    <p id="myParagraph">
    <?php 
      if(isset($_POST["dse"])){
        // echo $_POST['dse'];
        $userNum = $_POST['dse'];
        $factorial = 1;

      //   for ($i = 1; $i <= $userNum; $i++) {
      //     // echo $i;
      //     $factorial *= $i;
      // }

        for($i=$userNum;$i>=1;$i--){
          $factorial = $factorial * $i;
          
        }
        echo '<br>'. 'The factorial of the number '.$userNum.' is ' . $factorial;

      };
    ?>
    </p>
  </div>

</body>

</html>