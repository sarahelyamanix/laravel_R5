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
<h2>Edit Client</h2>
<form action="{{ route('updateClient', $client->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
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
        <input type="text" id="fname" name="clientName" value="{{$client->clientName}}" class="form-control"><br><br>
    </div>
    <div>
        <label for="lname">phone:</label><br>
        <input type="text" id="lname" name="phone" value="{{$client->phone}}" class="form-control"><br><br>
    </div>
    <div>
        <label for="lname">email:</label><br>
        <input type="text" id="lname" name="email" value="{{$client->email}}" class="form-control"><br><br>
    </div>
    <div>
        <label for="lname">website:</label><br>
        <input type="text" id="lname" name="website" value="{{$client->website}}" class="form-control"><br><br>
        
    <label for="city">City:</label><br>
    <select name="city" id="city" class="form-control">
      <option value="">Please Select City</option>
      <option value="Cairo" {{ $client->city == 'Cairo' ? 'selected' : '' }}>Cairo</option>
      <option value="Giza" {{ $client->city == 'Giza' ? 'selected' : '' }}>Giza</option>
      <option value="Alex" {{ $client->city == 'Alex' ? 'selected' : '' }}>Alex</option>
    </select>
    <br><br>
    <label for="active">Active:</label><br>
    <input type="checkbox" id="active" name="active" {{ $client->active ? 'checked' : '' }}><br><br>
    
    <label for="image">Image:</label><br>
    <img src="{{ asset('assets/images/' . $client->image) }}" alt="{{$client->clientName}}" style="width:300px;">
    <input type="file" id="image" name="image" class="form-control"><br><br>
    </div>
        <input type="submit" value="Submit">
</form> 
</div>
</body>
</html>
