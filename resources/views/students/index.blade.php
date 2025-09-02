<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student</title>
</head>
<body>
  <h1>All students!</h1>

  <a href="{{route ('students.create')}}"> create new student</a>

  @foreach($students as $student)
  <div>
    <h2>{{$student->name}}</h2>
    <h2>{{$student->mobile}}</h2>
    <p>{{$student->address}}</p>

    <a href="{{route('students.edit', $student ->id)}}">edit</a>
    <form action="{{route ('students.destroy', $student ->id)}}" method="POST" style="display: inline">

      @csrf
      @method ('DELETE')
      <button type="submit" onclick="return confirm ('Are you sure you want to delete this post?')">Delete</button>
    </form>
  </div>
  @endforeach
</body>
</html>