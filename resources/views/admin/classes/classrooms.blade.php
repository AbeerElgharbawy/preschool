<!DOCTYPE html>
<html lang="en">
<head>
    <title>Classrooms</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('admin.includes.navbar')
    <div class="container">
    <h2>Classrooms Table</h2>
    <table class="table table-condensed">
        <thead>
        <tr>
            <th>Name</th>
            <th>title</th>
            <th>Age</th>
            <th>Time</th>
            <th>Capacity</th>
            <th>Cost</th>
            <th>teacher name</th>
            <th>Image</th>
            <th>published</th>
            <th>Show</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($classes as $class)
            <tr>
                <td>{{ $class->class }}</td>
                <td>{{ $class->name }}</td>
                <td>{{ $class->age }}</td>
                <td>{{ $class->time }}</td>
                <td>{{ $class->capacity }}</td>
                <td>{{ $class->cost }}</td>
                <td>{{ $class->teacher->name }}</td>
                <td><img src="{{ asset('assets/images/'.$class->image) }}" alt="" style="height:50px"></td>
                <td>{{ $class->published? "Yes" : "No" }}</td>
                <td><a href="{{ route('showClass', ['id'=>$class->id]) }}">Show</a></td>
                <td><a href="update/{{$class->id}}">Edit</a></td>
                <td><a href="deleteClass/{{$class->id}}">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    
    </div>
</body>
</html>