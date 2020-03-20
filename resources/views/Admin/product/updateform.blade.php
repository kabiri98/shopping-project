<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Form Update Product</h2>
  <form action="{{route('admin.product.updateproduct',$product->id)}}" method="post" class="was-validated">
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
    <label for="uname">قیمت:</label>
      <input type="text" class="form-control" id="uname" name="product_price" value="{{$product->product_price}}"> 
      <div class="valid-feedback">Valid.</div>
    </div>
    <div class="form-group">
    <label for="uname">موجودی:</label>
      <input type="text" class="form-control" id="uname" name="inventory" value="{{$product->inventory}}"> 
      <div class="valid-feedback">Valid.</div>
    </div>
    <div class="form-group">
    <label for="uname">تاریخ ثبت:</label>
      <input type="text" class="form-control" id="uname" name="created_at" value="{{$product->created_at}}"> 
      <div class="valid-feedback">Valid.</div>
    </div>
    <div class="form-group">
    <label for="uname">تاریخ به روز رسانی:</label>
      <input type="text" class="form-control" id="uname" name="updated_at" value="{{$product->updated_at}}"> 
      <div class="valid-feedback">Valid.</div>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> بااعمال تغییرات روی این کالا موافقت می کنم
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
 
</div>

</body>
</html>
