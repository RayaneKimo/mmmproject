
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
       <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        </head>


        <body>
           @include('posts.messages')
          
           
        <h1 class="m-12 text-3xl text-red-900 leading-tight"> Just Laravel Posts </h1


@if(count($posts) > 0 )


   @foreach ($posts as $post )
   <div >
<h2> <a href='/posts/{{$post->id}}'> {{$post->title}} </a></h2></br>
</div>
<small> Created at : {{$post->created_at}}</small>
   @endforeach

{{$posts->links()}}

@else
<h3>no posts found </h3>
@endif



        </body>
</html>
