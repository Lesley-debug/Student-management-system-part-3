<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>
    Create a student
  </p>
  <form action="create.blade.php" method="post">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="mobile">:</label>
    <input type="number" id="mobile" name="mobile" required><br><br>

    <label for="address">Date of Birth:</label>
    <input type="address" id="address" name="address" required><br><br>

    <input type="submit" value="Submit">

  </form>
</body>
</html>