<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Notes</title>
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
    <div class="container">
        <div class="card">
            <div class="card-header">Update Notes</div>
            @if (Session::has('fail'))
                <span class="alert alert-danger p-2">{{Session::get('fail')}}</span>
            @endif
            <div class="card-body p-4">
                <form action="{{route('UpdateNotes')}}" method="post">
                    @csrf

                    <input type="hidden" name="notes_id" value="{{ $notes->id }}">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="topic" value="{{$notes->topic}}" class="form-control" placeholder="Enter Name">
                        @error('topic')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Add Notes</label>
                        <textarea name="notes" rows="5" class="form-control" placeholder="Write something...">{{$notes->notes}}</textarea>
                        @error('notes')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
