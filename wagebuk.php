<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="wagebuk.css">
</head>
<body>
  <div class="container">
  <h2>WageBuk💱</h2>
  <p>
    Estimate your weekly earnings effortlessly with our user-friendly salary calculator. Input your hourly rate, hours worked, click on Calculate, and get an instant calculation. Perfect for employees and freelancers alike. Start planning your finances today!
</p>
<div>
  <h1>Hello</h1>
</div>
  <form action="wagebuk.php" method="post">
    <label>Hours:</label>
    <input type="number" name="hours" min="0" max="120" placeholder="🕒"><br><br>
    <label>Rate:</label>
    <input type="number" name="rate" min="1" step="any" placeholder="$">
    <input type="submit" value="Calculate"><br><br>
  </form>
  </div>
</body>
</html>

<?php
  $hours = $_POST["hours"];
  $rate = $_POST["rate"];
  $weekly_pay = null;

  if($hours <= 0){
    $weekly_pay = 0;
  }
  elseif($hours <= 40){
    $weekly_pay = $hours * $rate;
  }
  elseif($hours > 40){
    $weekly_pay = ($hours * $rate) + (($hours - 40) * ($rate * 1.5));
  }

  $weekly_pay = round($weekly_pay, 2);
  echo "You made \${$weekly_pay} this week.";
?>