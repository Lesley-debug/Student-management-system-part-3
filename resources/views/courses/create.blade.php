<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>
    Create a Course
  </p>
  <form action="{{route ('courses.store')}}" method="post">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{old ('name')}}"><br><br>

    <label for="mobile"> syllabus:</label>
    <input type="text" name="syllabus" value="{{old ('syllabus')}}"><br><br>

    <label for="address">duration:</label>
    <input type="number" id="address" name="duration" value="{{old ('duration')}}"><br><br>

    <input type="submit" value="Submit">

  </form>

  @if ($errors->any())

  <ul>
    @foreach ($errors ->All() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>

  @endif
</body>
</html>