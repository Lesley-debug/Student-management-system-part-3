<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>teacher</title>
</head>
<body>
  <h1>All Teachers!</h1>

  <a href="{{route ('teachers.create')}}"> create new teacher</a>

  @foreach($teachers as $teacher)
  <div>
    <h2>{{$teacher->name}}</h2>
    <h2>{{$teacher->mobile}}</h2>
    <p>{{$teacher->address}}</p>

    <a href="{{route('teachers.edit', $teacher ->id)}}">edit</a>
    <form action="{{route ('teachers.destroy', $teacher ->id)}}" method="POST" style="display: inline">

      @csrf
      @method ('DELETE')
      <button type="submit" onclick="return confirm ('Are you sure you want to delete this post?')">Delete</button>
    </form>
  </div>
  @endforeach
</body>
</html>