<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>
<div>
<form action="{{ route('insertStudent') }}" method="POST">
    @method('POST')
    @csrf

<div>
  <label for="studentName">Student Name:</label><br>
  <input type="text" id="studentName" name="studentName" value=""><br>
</div>
<div>
  <label for="astudentAge">Student Age:</label><br>
  <input type="text" id="studentAge" name="studentAge" value=""><br><br>
</div>
  <input type="submit" value="Submit">
</form> 
</div>
<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>