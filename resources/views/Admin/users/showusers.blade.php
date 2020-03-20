<!DOCTYPE html>
<html lang="en">
<head>
  <title>product Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<a href="{{url('admin/users/insertform')}}"><span class="badge badge-secondary">Add a new user <i class="fas fa-plus"></i></a></span>
    
  <table class="table table-dark table-striped">
    <thead>
      <tr>
      <th>id</th>
        <th>username</th>
        <th>email</th>
        <th>created_at</th>
        <th>updated_at</th>
        <th>delete</th>
        <th>updated</th>
      </tr>
    </thead>
    <tbody>
    @foreach (['danger', 'warning', 'success', 'info'] as $key)
 @if(Session::has($key))
     <p class="alert alert-{{ $key }}">{{ Session::get($key) }}</p>
 @endif
@endforeach


    @foreach($users as $user)
       <tr>
       <td>{{$user->id}}</td>
       <td>{{$user->name}}</td>
       <td>{{$user->email}}</td>
       <td>{{$user->created_at}}</td>
       <td>{{date("Y-m-d h:i:sa", strtotime($user->updated_at))}}</td>
       <td><a href="{{url('admin/users/deleteform',$user->id)}}" class="nav-link"> <span class="badge badge-danger"><i class="fas fa-times"></i></span></a></td>
       <td><a href="{{url('admin/users/updateform',$user->id)}}" class="nav-link"><span class="badge badge-success"><i class="fas fa-check"></i></span></a></td>
       </tr>
    @endforeach
       
    </tbody>
  </table>
</div>

</body>
</html>
