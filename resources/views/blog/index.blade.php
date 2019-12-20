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
<a href="{{route('blogs.create')}}" style="marign:10px">Add New Post</a>

@if(Session::has('message'))
<p class="alert alert-info" style="margin-top: 30px">{{ Session::get('message') }}</p>
@endif

@if(Session::has('error'))
<p class="alert alert-danger" style="margin-top: 30px">{{ Session::get('error') }}</p>
@endif

</br></br>
    <div class="post">
        <table border="1" class="table" style="margin:10px">
            <thead>
                <tr>
                  <th>id</th>
                  <th>publish by</th>
                  <th>title</th>
                  <th>body</th>
                  <th>Date</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
            </thead>
            <tbody>
              @if(isset($posts) && count($posts)>0)
              @foreach($posts as $post)
              <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->user->name}}</td>
                <td>{{$post->title}}</td>
                <th>{{$post->body}}</th>
                <td>{{$post->created_at}}</td> 
                
                  @if($post->user_id==$user->id || $user->role=="admin")
                  <td>
                   <a href="{{route('blogs.edit',['id' =>$post->id])}}">Edit</a> 
                  </td>
                  <td>
                   <form action="{{ route('blogs.destroy', $post->id) }}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        @csrf
                        <button>Delete User</button>
                    </form>
                  </td>
                  @else
                        <td>
                        ------
                        </td>
                        <td>
                         ------
                        </td>
                  @endif
                
               
              </tr>
              @endforeach
              
              @else
              <tr>
                  <th colspan="6">
                  No Posts To Show
                  </th>
                </tr>
              @endif
              
            </tbody>
        </table>
        </div>
</body>
</html>