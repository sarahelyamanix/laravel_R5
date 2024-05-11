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


<h2>HTML Forms</h2>

<form action="{{route('formResult')}}" method="post">
    @csrf
  <label for="fname">name:</label><br>
  <input type="text" id="fname" name="clientName" value=""><br>
  <label for="lname">phone:</label><br>
  <input type="text" id="lname" name="phone" value=""><br>
  <label for="lname">email:</label><br>
  <input type="text" id="lname" name="email" value=""><br>
  <label for="lname">website:</label><br>
  <input type="text" id="lname" name="website" value=""><br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>