<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="{{url('/')}}/name" method="POST">
    @csrf
    <div>
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <!-- <span style="color:red">@error('fname')('This Field is reqiuered') @enderror</span> -->
  <br>
</div>
<div>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value=""><br>
  <!-- <span style="color:red">@error('lname')('This Field is reqiuered') @enderror</span> -->
  <br>
</div>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>

