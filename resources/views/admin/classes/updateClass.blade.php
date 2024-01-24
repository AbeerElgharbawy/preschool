<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Class</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('admin.includes.navbar');
    <div class="container">
        <h2>Edit Class</h2>
        <form action="{{route('updateClass',[$classes->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label >Class:</label>
                <input type="text" class="form-control" id="subject" name="class" value="{{ $classes->class }}" >
                
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value="{{ $classes->name }}" >
                
            </div>
            <div class="form-group">
                <label >Subject:</label>
                <input type="text" class="form-control"  name="jobTitle" value="{{ $classes->jobTitle }}">
                
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control" id="image" name="image" value="{{ $classes->image }}">
                <img src="{{asset('assets/images/'. $classes->image)}}" alt="{{$classes->name}}" style="width:200px;">

            </div>
            <div class="form-group">
                <label >Age:</label>
                <input type="text" class="form-control" name="age" value="{{ $classes->age }}">
                <label >Time:</label>
                <input type="text" class="form-control" name="time" value="{{ $classes->time }}" >
                <label >Capacity:</label>
                <input type="text" class="form-control" name="capacity" value="{{ $classes->capacity }}" >
                <label >Cost:</label>
                <input type="text" class="form-control" name="cost" value="{{ $classes->cost }}" >
               
            </div>
            <div class="form-group">
                <label for="teacher_id">Teacher:</label>
                <div class="form-group">
                    <select name="teacher_id">
                        <option value="">Choose a teacher</option>
                        @foreach($teachers as $teacher)
                        <option value="{{ $teacher->id }}" @selected($classes->teacher_id == $teacher->id)>{{ $teacher->name }}</option>
                        @endforeach
                    </select>
                </div>
            <div class="form-group">
                <div class="checkbox">
                    <label><input type="checkbox" name="published" @checked($classes->published) >Published</label>
                </div>
            </div>
            <button type="submit" class="btn btn-default">Update</button>
        </form>
    </div>
</body>
</html>