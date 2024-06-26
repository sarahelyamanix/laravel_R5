<!DOCTYPE html>
<html lang="en">
<head>
  <title>Students</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('includes.nav')

<div class="container">
  <h2>Students Data</h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Student Name</th>
        <th>Student Age</th>
        <th>Edit</th>
        <th>Show</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($students as $student)
      <tr>
        <td>{{$student->studentName}}</td>
        <td>{{$student->studentAge}}</td>
        <td><a href='{{route("editStudent", $student->id)}}' >Edit</a></td>
        <td><a href='{{route("showStudent", $student->id)}}' >Show</a></td>
        <td>
          <form action="{{route('deleteStudent')}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="hidden" value="{{$student->id}}" name="id" >
            <input type="submit" value="delete" onclick="return confirm('Are you sure you want to delete this item?')">
          </form>
        </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>

</body>
</html>
