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

  
    p {
      text-align: center;
      color: #666666;
      font-size: 18px;
      text-align: justify;
    }
  </style>
</head>

<body>
  <!-- Task 37 -->

  <!--Write a PHP program to find the length of the string. Hint:
•	You have to use one variable.
•	You must use a built-in PHP String Function.


-->

  <div class="container">
   
    <p id="myParagraph">
    <?php 
    echo "<h4>Find String Length</h4>";
    $string = "laravel";
    echo '<br>';
    echo $string . '<< This is String';
    echo '<br>';
    
    //Check LowerCase
    
    // if(ctype_lower($string)){
    //   echo "Text is Lowercase";
    // }else{
    //   echo "Text is Uppercase";
    // }

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

    $lngth = strlen($string);

echo "The length of the string is: " . $lngth;


    ?>


    </p>
  </div>

</body>

</html>