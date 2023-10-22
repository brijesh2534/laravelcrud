<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{url('/update')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$customer['id']}}">
        <table border="3">
            <tr>
                <td>Name</td>
                <td><input type="text" name="nm" value="{{$customer['name']}}"></td>
            </tr>
            <tr>
                <td>RollNo</td>
                <td><input type="text" name="rn" value="{{$customer['rollno']}}"></td>
            </tr>
            <tr><td><input type="submit" value="Update"></td></tr>
        </table>
    </form>
</body>
</html>
