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
<h2>Add Client</h2>
<form action="{{ route('insertClient')  }}" method="post">
    @csrf
    <div>
        <label for="fname">name:</label><br>
        <input type="text" id="fname" name="clientName" value="" class="form-control"><br><br>
    </div>
    <div>
        <label for="lname">phone:</label><br>
        <input type="text" id="lname" name="phone" value="" class="form-control"><br><br>
    </div>
    <div>
        <label for="lname">email:</label><br>
        <input type="text" id="lname" name="email" value="" class="form-control"><br><br>
    </div>
    <div>
        <label for="lname">website:</label><br>
        <input type="text" id="lname" name="website" value="" class="form-control"><br><br>
    </div>
        <input type="submit" value="Submit">
</form> 
</div>
</body>
</html>