<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Assignment
  </title>

  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      padding: 20px;
    }

    .containers-body {
      display: flex;
      justify-content: space-evenly;

    }

    .container {
      width: 500px;
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

    input {
      display: block;
      margin: 20px auto;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button {
      display: inline;
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

    .tablePrint {
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="containers-body">



    <div class="container">
      <h1>Print Table</h1>
      <form method="POST">
        <input type="number" value="<?php echo !empty($_POST['tableOfNum']) ? $_POST['tableOfNum'] : "" ?>" placeholder="Enter Number You Want to print Table" name="tableOfNum" />
        <input type="submit" />
      </form>

      <p id="myParagraph">
        <?php
        $TableNum = !empty($_POST['tableOfNum']) ? $_POST['tableOfNum'] : "";
        if (!empty($TableNum)) {
          for ($i = 1; $i <= 10; $i++) {
            echo '<div class="tablePrint">' . $TableNum . ' x ' . $i . ' = ' . $TableNum * $i . '<br>' . '</div>';
          }
        }
        ?>

      </p>
    </div>
    <div class="container">
      <h1>Calculator </h1>
      <form method="POST">
        <input type="number"  placeholder="Enter First Number" name="firstNum" />
        <input type="number"  placeholder="Enter Second Number" name="secondNum" />
        <div style="text-align:center;margin-top:-20px;">
        <button type='submit' name="plus">+</button>
        <button type='submit' name="minus">-</button>
        <button type='submit' name="multiply">*</button>
        <button type='submit' name="divide">/</button>
        </div>
      </form>
      <p id="myParagraph">
        <?php
        if(isset($_POST['plus'])) { 
          echo $_POST['firstNum'] + $_POST['secondNum'];
         }

         if(isset($_POST['minus'])) { 
          echo $_POST['firstNum'] - $_POST['secondNum'];
         }

         if(isset($_POST['multiply'])) { 
          echo $_POST['firstNum'] * $_POST['secondNum'];
         }

         if(isset($_POST['divide'])) { 
          echo $_POST['firstNum'] / $_POST['secondNum'];
         }
        
        ?>

      </p>
    </div>
  </div>
</body>

</html>