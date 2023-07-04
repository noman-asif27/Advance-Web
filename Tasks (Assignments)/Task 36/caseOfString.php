<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Task 36 - Find the case of string

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
  <!-- Task 36 -->

  <!--Write a PHP function that checks whether a string is all lowercase.

-->

  <div class="container">
   
    <p id="myParagraph">
    <?php 
    echo "<h4>Find String Case</h4>";
    $string = "laravel";
    echo '<br>';
    echo $string . '<< This is String';
    echo '<br>';
    
    //Check LowerCase
    
    if(ctype_lower($string)){
      echo "Text is Lowercase";
    }else{
      echo "Text is Uppercase";
    }

    //Check Uppercase

    // if(ctype_upper($string)){
    //   echo "Text is UpperCase";
    // }else{
    //   echo "Text is Not Uppercase";
    // }

    //Check Numeric

    // if(is_numeric($string)){
    //   echo "Variable is Numeric";
    // }else{
    //   echo "Variable not Numeric";
    // }

    //strtolower(), strtoupper(), strlen(),

    


    ?>


    </p>
  </div>

</body>

</html>