<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Testimonial</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('admin.includes.navbar')
<div class="container">
  <h2>Update Testimonial</h2>
  <form action="{{route('updateTeacher',[$teacher->id])}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="description">Name:</label>
      <input type="text" class="form-control" id="title" placeholder="edit name" name="name" value="{{$testimonial->name}}">
    </div>
    <div class="form-group">
      <label for="description">Profession:</label>
      <input type="text" class="form-control" id="title" placeholder="edit profession" name="profession" value="{{$testimonial->profession}}">
    </div>
    <div class="form-group">
      <label for="description">Description:</label>
      <textarea class="form-control" name="description" id="" cols="60" rows="3">{{$testimonial->description}}</textarea>    </div>
      <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="image"  name="image"  >
    </div>
    <br>
    <img src="{{asset('assets/images/'. $testimonial->image)}}" alt="{{$testimonial->name}}" style="width:200px;">
    <br>
    <br>
    <div class="checkbox">
      <label><input type="checkbox" name="published" @checked($testimonial->published)> Published me</label>
    </div>
    <button type="submit" class="btn btn-default">Update</button>
  </form>
</div>

</body>
</html>
