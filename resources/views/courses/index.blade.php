<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMS part 3</title>
</head>
<body>
  <p>All Courses!</p>
    <a href="{{route ('courses.create')}}"> create new course</a>

  @foreach($courses as $course)
  <div>
    <h2>{{$course->name}}</h2>
    <h2>{{$course->syllabus}}</h2>
    <p>{{$course->duration}}</p>

    <a href="{{route('courses.edit', $course->id)}}">edit</a>
    <form action="{{route ('courses.destroy', $course ->id)}}" method="POST" style="display: inline">

      @csrf
      @method ('DELETE')
      <button type="submit" onclick="return confirm ('Are you sure you want to delete this Course?')">Delete</button>
    </form>
  </div>
  @endforeach
</body>
</html>