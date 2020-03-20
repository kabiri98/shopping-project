<!DOCTYPE html>
<html lang="en">
<head>
  <title>Delete product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Form Delete product</h2>
  <form action="{{route('admin.product.deleteproduct',$product->id)}}" method="post" class="was-validated">
      @csrf
      @method('POST')
    <div class="form-group">
      <label for="uname">نام محصول:</label>
      <input type="text" class="form-control" id="uname" name="name" value="{{$product->name}}"> 
      <div class="valid-feedback">Valid.</div>
    </div>
    <div class="form-group">
      <label for="pwd">توضیحات:</label>
      <input type="text" class="form-control" id="pwd" name="discription" value="{{$product->discription}}">
      <div class="valid-feedback">Valid.</div>
    </div>
    <div class="form-group">
      <label for="pwd">قیمت:</label>
      <input type="text" class="form-control" id="price" name="product_price" value="{{$product->product_price}}">
      <div class="valid-feedback">Valid.</div>
    </div>
    <div class="form-group">
      <label for="pwd">موجودی:</label>
      <input type="text" class="form-control" id="inventory" name="inventory" value="{{$product->inventory}}">
      <div class="valid-feedback">Valid.</div>
    </div>
    <div class="form-group">
      <label for="pwd">تاریخ اضافه شدن محصول:</label>
      <input type="text" class="form-control" id="created_at" name="created_at" value="{{$product->created_at}}">
      <div class="valid-feedback">Valid.</div>
    </div>
    <div class="form-group">
      <label for="pwd">تاریخ به روزرسانی محصول:</label>
      <input type="text" class="form-control" id="updated_at" name="created_at" value="{{$product->updated_at}}">
      <div class="valid-feedback">Valid.</div>
    </div>
    
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> من موافق <font color="red">حذف</font> این محصول هستم.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Delete</button>
  </form>
 
</div>

</body>
</html>
