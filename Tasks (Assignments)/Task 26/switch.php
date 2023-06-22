<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Task 26 - PHP Use of Switch Statement
</title>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

</head>

<body>
  <!-- Task 26 -->

  <!-- Use the Switch statement of PHP to display the current day
of the
week.
 -->

 <h2 class="container text-center">This is the Correct Day as per the Current Date.</h2>
 <div style="margin-top:20px;color:red;font-size:50px" class="container text-center mt-sm">
 
 <?php
$dayOfWeek = date('N'); 

// echo $dayOfWeek;

switch ($dayOfWeek) {
    case 1:
        echo "Today is Monday";
        break;
    case 2:
        echo "Today is Tuesday";
        break;
    case 3:
        echo "Today is Wednesday";
        break;
    case 4:
        echo "Today is Thursday";
        break;
    case 5:
        echo "Today is Friday";
        break;
    case 6:
        echo "Today is Saturday";
        break;
    case 7:
        echo "Today is Sunday";
        break;
    default:
        echo "Unable to determine the day of the week";
        break;
}
?>
</div>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>