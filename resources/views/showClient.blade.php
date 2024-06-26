<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Show {{$client->clientName}}</title>
</head>
<body>
@include('includes.navC')
    <p><img src="{{ asset('assets/images/' . $client->image) }}" alt="{{$client->clientName}}" style="width:300px;"></p>
    <h1>Client: {{$client->clientName}}</h1>
    <hr>
    <h2>Phone: {{$client->phone}}</h2>
    <hr>
    <h2>Email: {{$client->email}}</h2>
    <hr>
    <h2>Website: {{$client->website}}</h2>
    <hr>
    <h2>Address: {{$client->address}}</h2>
    <hr>
    <h2>City: {{$client->city->city}}</h2>
</body>
</html>