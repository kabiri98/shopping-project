<!DOCTYPE html>
<html lang="en">
<head>
  <title>Insert User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Form Insert Users</h2>
  <form action="{{route('admin.users.insertuser')}}" method="post" class="was-validated">
      @csrf
      @method('POST')
    <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" name="name" > 
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">email:</label>
      <input type="email" class="form-control" id="pwd" name="email" >
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please enter valid format for email.</div>
    </div>
    <div class="form-group">
      <label for="pwd">password:</label>
      <input type="password" class="form-control" id="pwd" name="password" >
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree to Add this User.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>
    <button type="submit" class="btn btn-primary">INSERT</button>
  </form>
 
</div>

</body>
</html>
