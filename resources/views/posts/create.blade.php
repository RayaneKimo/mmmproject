
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
       <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css" />
        </head>


        <body>
       

          <h1 class="font-semibold font-serif text-green-700 text-6xl m-12 " > Create Post </h1>
         
          {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method'=> 'POST']) !!}
          <div >
          {{Form::label('title','Title') }}
          {{Form::text('title','',[ 'placeholder'=> "title"])}} 

          @error('title')
          <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">  
           {{$message}}
          </div>
       
        @enderror
         </div>
         <div >
          {{Form::label('body','Body') }}
          {{Form::textarea('Body','',[ 'id' =>'article-ckeditor' , 'class'=> ['placeholder'=> "title" ]])}}
         </div>

         @error('Body')
          <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">  
           {{$message}}
          </div>
          @enderror

         {{Form::submit('submit',['class'=>"inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"])}}
          {!! Form::close() !!}

         

          
          <script src={{ asset('ckeditor/ckeditor.js')}}></script> 
          <script> CKEDITOR.replace('article-ckeditor'); </script>

        </body>
</html> 