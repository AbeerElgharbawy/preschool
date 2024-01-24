<!DOCTYPE html>
<html lang="en">
<head>
    <title>Teachers</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('admin.includes.navbar')
    <div class="container">
    <h2>Teachers Table</h2>
    <table class="table table-condensed">
        <thead>
        <tr>
            <th>Name</th>
            <th>Subject</th>
            <th>Image</th>
            <th>Facebook</th>
            <th>Twitter</th>
            <th>Instagram</th>
            <th>Published</th>
            <th>Show</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
            @foreach( $teachers as $teacher )
            <tr>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->subject }}</td>
                <td><img src="{{asset('assets/images/' . $teacher->image)}}" alt="$teacher->name" style="height:50px"></td>
                <td>{{ $teacher->facebook }}</td>
                <td>{{ $teacher->twitter }}</td>
                <td>{{ $teacher->instagram }}</td>
                <td>{{ $teacher->published? 'Yes' :'No' }}</td>
                <td><a href="showTeacher/{{$teacher->id}}" >Show</a></td>
                <td><a href="update/{{$teacher->id}}">Edit</a></td>
                <!-- <td><a href="deleteTeacher/{{ $teacher->id }}" onclick="return confirm('Are you sure?')">Delete</a></td> -->
                <td><a href="deleteTeacher/{{ $teacher->id }}" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
                @if (session('alert'))
                    <div class="alert alert-success">
                    {{ session('alert') }}
                    </div>
                @endif
    </table>
    </div>
</body>
</html>