<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
</head>
<body>
<center>
<table class="table">

<tr>
   <th><h2>NAME</h2></th>
    <th><h2>AGE<h2></th>
    <th><h2>ADDRESS</h2></th>
</tr>
@foreach($data as $value)
<tr>
<td>{{$value->name}}</td>
<td>{{$value->age}}</td>
<td>{{$value->address}}</td>
</tr>
@endforeach 
</table>
</center>
</body>
</html>