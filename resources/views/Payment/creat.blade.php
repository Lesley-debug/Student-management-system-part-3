<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student management system part3</title>
</head>
<body>
  <p>Create payment</p>
  <form action="creat.blade.php" method="post">
    @csrf
    <label for="amount">amount:</label>
    <input type="number" id="amount" name="amount" required><br><br>

    <label for="payment_date">payment date:</label>
    <input type="date" id="payment_date" name="payment_date" required><br><br>

    <label for="enrollment_id">enrollment id:</label>
    <input type="number" id="enrollment_id" name="enrollment_id" required><br><br>


    <input type="submit" value="Submit">
</body>
</html>