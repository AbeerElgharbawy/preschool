<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Teacher</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('admin.includes.navbar');
    <div class="container">
        <h2>Add New Teacher</h2>
        <form action="{{route('storeTeacher')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" >
                
            </div>
            <div class="form-group">
                <label for="profession">Subject:</label>
                <input type="text" class="form-control" id="subject" name="subject" >
                
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control" id="image" name="image">
               
            </div>
            <div class="form-group">
                <label for="profession">Facebook:</label>
                <input type="text" class="form-control" id="facebook"  name="facebook" >
                <label for="profession">Twitter:</label>
                <input type="text" class="form-control" id="facebook"  name="twitter" >
                <label for="profession">Instagram:</label>
                <input type="text" class="form-control" id="facebook"  name="instagram" >
               
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label><input type="checkbox" name="published" > Published</label>
                </div>
            </div>
            <button type="submit" class="btn btn-default">Insert</button>
        </form>
    </div>
</body>
</html>