<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

@include('includes.nav')
<div class="container">
<h2>Add Student Data</h2>
<div>
<form action="{{ route('insertStudent') }}" method="POST">
    @method('POST')
    @csrf
<div>
  <label for="studentName">Student Name:</label><br>
  <input type="text" id="studentName" name="studentName" value=""><br><br>
</div>
<div>
  <label for="studentAge">Student Age:</label><br>
  <input type="text" id="studentAge" name="studentAge" value=""><br><br>
</div>
  <input type="submit" value="Submit">
</form> 
</div>
</div>

</body>
</html>