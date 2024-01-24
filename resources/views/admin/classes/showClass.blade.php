<!DOCTYPE html>
<html lang="en">
<head>
    <title>Classroom</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('admin.includes.navbar');
    <div class="container mt-3">
        <h2>Teacher: {{ $classrooms->name }}</h2>
        <table class="table table-borderless">
            <tbody>
            <tr>
                <td>Age</td>
                <td>{{ $classrooms->age }}</td>
            </tr>
            <tr>
                <td>Time</td>
                <td>{{ $classrooms->time }}</td>
            </tr>
            <tr>
                <td>Capacity</td>
                <td>{{ $classrooms->capacity }}</td>
            </tr>
            <tr>
                <td>Cost</td>
                <td>{{ $classrooms->cost }}</td>
            </tr>
            <tr>
                <td>Created at</td>
                <td>{{ $classrooms->created_at }}</td>
            </tr>
            </tbody>
            <tr>
                <td>Updated at</td>
                <td>{{ $classrooms->updated_at }}</td>
            </tr>
            <tr>
                <td>Published</td>
                <td>{{ $classrooms->published? "Yes" : "No" }}</td>
            </tr>
            <tr>
                <td>Teacher Name</td>
                <td>{{ $classrooms->teacher->name }}</td>
            </tr>
            <tr>
                <td>Teacher Image</td>
                <td><img src="{{ asset('assets/images/'.$classrooms->teacher->image) }}" alt="" style="height:200px"></td>
            </tr>
            <tr>
                <td>Classroom Image</td>
                <td><img src="{{ asset('assets/images/'.$classrooms->image) }}" alt="" style="height:200px"></td>
            </tr>
        </table>
    </div>
</body>
</html>