<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('/insert')}}" method="post">
        @csrf
        <table border="3">
            <tr>
                <td>Name</td>
                <td><input type="text" name="nm"></td>
            </tr>
            <tr>
                <td>RollNo</td>
                <td><input type="text" name="rn"></td>
            </tr>
            <tr><td><input type="submit" value="Insert"></td></tr>
        </table>
    </form>
</body>
</html>
