<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello World Home Page!!!</h1>
    @foreach($homes as $home)
    <ul>
       <li>Id : {{$home->id}}</li>
       <li>Title : {{$home->title}}</li>
       <li>Body : {{$home->body}}</li>
    </ul>
    @endforeach
</body>
</html>