<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMS part3</title>
</head>
<body>
  <p>create a new student</p>
  <form action="creat.blade.php" method="post">
    @csrf
    <label for="name">name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="mobile">mobile:</label>
    <input type="number" id="mobile" name="mobile" required><br><br>

    <label for="address">address:</label>
    <input type="text" id="address" name="address" required><br><br>

    <input type="submit" value="Submit">
  </form>
</body>
</html>