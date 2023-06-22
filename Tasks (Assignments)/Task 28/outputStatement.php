<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Task 28 - Output Statement</title>

  

</head>

<body>
  <!-- Task 28 -->

  <!-- Display your name on the screen using PHP.

 -->

 <h2 class="container text-center">Display your System name on the screen using PHP.</h2>
 <div style="margin-top:20px;color:red;font-size:40px" class="container text-center mt-sm">

 <?php

$systemName = php_uname('n'); 
$windowName = php_uname('v');
// echo "System Name: " . $systemName;
echo "<br>";
$username = get_current_user(); 
echo "Current User Name is " . $username . ", who is using " .$systemName. " in the " .$windowName." ";
?>



 
</div>
  
  
</body>

</html>