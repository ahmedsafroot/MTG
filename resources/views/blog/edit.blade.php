<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MTG Blog</title>

    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    <form method="POST" action="{{ route('logout') }}" style="margin:5px;float:right">
        @csrf
        <button type="submit" class="btn btn-info">Logout</button>
    </form>
<a href="{{route('blogs.index')}}" style="margin:10px">Back</a>
</br></br>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{ route('blogs.update', $post->id) }}" id="update_post">
        <input type="hidden" name="_method" value="PUT">
    @csrf
Title: <input type="text" name="title" id="title" value="{{$post->title}}" required>
    Body: <textarea name="body" id="body" required>{{$post->body}}</textarea>
    <button type="button" onclick="update_post()">Save</button>
</form>
       <script>
           function update_post() {
               if($("#title").val()==""){
                   alert("title can't be empty")
               }
               else if($("#body").val()=="")
               {
                   alert("body can't be empty");
               }
               else
               {
               $("#update_post").submit();
               }
           }
       </script>
</body>
</html>