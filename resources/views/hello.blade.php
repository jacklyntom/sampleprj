<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>registration</h1>
    <form action="/insertregister" method="post">
    @csrf
    <tr>
   <td> name:</td>
   <td><input type="text" name="name" id="name"></td>
   </tr>
   <tr>
   <td> age:</td>
   <td><input type="text" name="age" id="age"></td>
   </tr>
   <tr>
   <td> address:</td>
   <td><input type="text" name="address" id="address"></td>
   </tr>
   <tr>
   <td><input type="submit" name="register" id="register"></td>
   </tr>
   </form>

</body>
</html>
