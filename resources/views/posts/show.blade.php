
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        </head>


        <body>
        <a href='/posts' class='btn btn-default'> go back </a> 
            
  <h1> Posts </h1>
<small>Created at :{{$post->created_at}}</small>

<div>
    {{$post->body}}
</div>

        </body>
</html>
