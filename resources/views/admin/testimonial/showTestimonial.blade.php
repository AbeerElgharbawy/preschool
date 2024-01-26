<!-- <h2>Name:{{ $testimonials->name }}</h2>
<h2>Profession:{{ $testimonials->profession }}</h2>
<h2>Description:{{ $testimonials->description }}</h2>
<h2>Image:{{ $testimonials->image }}</h2>
<h2>Published:{{ $testimonials->published }}</h2> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Display Template</title>
    <style>
        /* Define your CSS styles here */
        .data-item {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .data-item h3 {
            margin-top: 0;
        }
        .data-item p {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <div class="data-list">
        <!-- Example data item -->
        <div class="data-item">
            <h3>Name:</h3>
            <p>{{ $testimonials->name }}</p>
        </div>
        
        <!-- Example data item -->
        <div class="data-item">
            <h3>Profession:</h3>
            <p>{{ $testimonials->profession }}</p>
        </div>
        <div class="data-item">
            <h3>Description:</h3>
            <p>{{ $testimonials->description }}</p>
        </div>
        <div class="data-item">
            <h3>Image:</h3>
            <p>{{ $testimonials->image }}</p>
        </div>
        <div class="data-item">
            <h3>Published:</h3>
            <p>{{ $testimonials->published }}</p>
        </div>

        <!-- Add more data items as needed -->
    </div>
</body>
</html>
