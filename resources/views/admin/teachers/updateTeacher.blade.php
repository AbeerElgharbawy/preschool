<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Teacher</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('admin.includes.navbar')
<div class="container">
  <h2>Update Teacher</h2>
  <form action="{{route('updateTeacher',[$teachers->id])}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="description">Name:</label>
      <input type="text" class="form-control" id="title" placeholder="edit name" name="name" value="{{$teachers->name}}">
    </div>
    <div class="form-group">
      <label for="description">Subject:</label>
      <input type="text" class="form-control" id="title" placeholder="edit subject" name="subject" value="{{$teachers->subject}}">
    </div>
    <div class="form-group">
      <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="image"  name="image"  >
      <label for="description">Facebook:</label>
      <input type="text" class="form-control" id="title" placeholder="edit facebook" name="facebook" value="{{$teachers->facebook}}">
      <label for="description">Twitter:</label>
      <input type="text" class="form-control" id="title" placeholder="edit twitter" name="twitter" value="{{$teachers->twitter}}">
      <label for="description">Instagram:</label>
      <input type="text" class="form-control" id="title" placeholder="edit instagram" name="instagram" value="{{$teachers->instagram}}">
    </div>
    <br>
    <img src="{{asset('assets/images/'. $teachers->image)}}" alt="{{$teachers->name}}" style="width:200px;">
    <br>
    <br>
    <div class="checkbox">
      <label><input type="checkbox" name="published" @checked($teachers->published)> Published me</label>
    </div>
    <button type="submit" class="btn btn-default">Update</button>
  </form>
</div>

</body>
</html>
