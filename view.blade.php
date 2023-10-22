<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="4">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>RollNo</td>
            <td>Opration</td>
        </tr>
        @foreach($customer as $i)
        <tr>
            <td>{{$i['id']}}</td>
            <td>{{$i['name']}}</td>
            <td>{{$i['rollno']}}</td>
            <td><a href="{{'delete/'.$i['id']}}">Delete</a>
            <a href="{{'/update/'.$i['id']}}">Update</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>
