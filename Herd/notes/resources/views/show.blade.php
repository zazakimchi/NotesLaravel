<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Note</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa; 
        }
        .container {
            max-width: 600px;
            margin-top: 50px;
        }
        .card {
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: white;
            font-weight: bold;
            text-align: center;
            font-size: 1.2em;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }
        .btn-primary {
            width: 100%;
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-center bg-primary text-white">
                {{ $note->topic }}
            </div>
            <div class="card-body">
                <p>{{ $note->notes }}</p>
                <a href="{{ url()->previous() }}" class="btn btn-secondary mt-3">Back</a>
            </div>
        </div>
    </div>
</body>
</html>
