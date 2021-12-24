<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>
<body>
    <form action="/update" method="POST">
        @csrf
<input type="hidden" name="id" value="{{$data['id']}}" ><br><br>
<input type="text" name="fname" value="{{$data['fname']}}" ><br><br>
<input type="text" name="lname" value="{{$data['lname']}}" ><br><br>
<input type="email" name="email" value="{{$data['email']}}"><br><br>

<input type="submit" value="Update">

    </form>
    
</body>
</html>