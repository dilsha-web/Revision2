<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
   
    <form action="/add" method="POST">
        @csrf
<input type="text" name="fname" placeholder="First Name" id="fname"><br><br>
<input type="text" name="lname" placeholder="Last Name" id="lname"><br><br>
<input type="email" name="email" placeholder="Enter Email" id="email"><br><br>
<input type="password" name="pass" placeholder="Enter Password" id="pass"><br><br>

<input type="submit" value="Submit">

    </form>
<br><br>
<!-- fetch data -->
    <table border="1">
        <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last name</th>
        <th>Email</th>
        <th colspan="2">Actions</th>
    </tr>
    @foreach ($data as $row)
    <tr>   
        <td>{{$row['id']}}</td>
        <td>{{$row['fname']}}</td>
        <td>{{$row['lname']}}</td>
        <td>{{$row['email']}}</td>
        <td> <a href={{"delete/".$row['id']}}>Delete</a></td>
        <td><a href={{"edit/".$row['id']}}>Update</td>
    
    </tr>
        
    @endforeach
    </table>
</body>
</html> 