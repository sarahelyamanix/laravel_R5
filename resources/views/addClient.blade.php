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

@include('includes.navC')

<div class="container">
<h2>Add Client</h2>
<form action="{{ route('insertClient')  }}" method="post" enctype="multipart/form-data">
    @csrf
    @if ($errors->any())
  <div class="alert alert-danger" role="alert">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
    <div>
        <label for="fname">name:</label><br>
        <input type="text" id="fname" name="clientName" value="{{old('clientName')}}" class="form-control"><br><br>
    </div>
    <div>
        <label for="lname">phone:</label><br>
        <input type="text" id="lname" name="phone" value="{{old('phone')}}" class="form-control"><br><br>
    </div>
    <div>
        <label for="lname">email:</label><br>
        <input type="text" id="lname" name="email" value="{{old('email')}}" class="form-control"><br><br>
    </div>
    <div>
        <label for="lname">website:</label><br>
        <input type="text" id="lname" name="website" value="{{old('website')}}" class="form-control"><br><br>
    </div>
    <label for="city">City:</label><br>
    <select name="city" id="city" class="form-control">
      <option value="">Please Select City</option>
      <option value="Cairo" {{ old('city') == 'Cairo' ? 'selected' : '' }}>Cairo</option>
      <option value="Giza" {{ old('city') == 'Giza' ? 'selected' : '' }}>Giza</option>
      <option value="Alex" {{ old('city') == 'Alex' ? 'selected' : '' }}>Alex</option>
    </select>
    <br><br>
    <label for="active">Active:</label><br>
<input type="checkbox" id="active" name="active" value="1" {{ old('active') ? 'checked' : '' }}><br><br>

    <label for="image">Image:</label><br>
    <input type="file" id="image" name="image" class="form-control"><br><br>
        <input type="submit" value="Submit">
</form> 
</div>
</body>
</html>
