<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMS part3</title>
</head>
<body>
  <p>create a student</p>
  <form action="create.blade.php" method="Post">
    @csrf
    <label for="name">name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="syllabus">syllabus:</label>
    <input type="text" id="syllabus" name="syllabus" required><br><br>

    <label for="Duration">Duration:</label>
    <input type="number" id="Duration" name="Duration" required><br><br>

    <input type="submit" value="Submit">
  </form>
</body>
</html>