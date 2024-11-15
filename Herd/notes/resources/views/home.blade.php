<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .table-container {
            margin-top: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .card-header {
            background-color: #f8f9fa;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .btn-add-new {
            background-color: #28a745;
            color: white;
        }
        .btn-add-new:hover {
            background-color: #218838;
        }
        .notes-column {
            max-width: 250px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this note?");
        }
    </script>
    
</head>
<body>
    <div class="container">
        <div class="table-container">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Notes Assessment</h5>
                    <a href="/add-notes" class="btn btn-add-new btn-sm">Add New</a>
                </div>

                <div class="card-body">
                    <table class="table table-sm table-striped table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Notes</th>
                                <th>Writer</th>
                                <th colspan="3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($all_notes->count() > 0)
                                @foreach ($all_notes as $index => $note)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td class="notes-column" title="{{ $note->notes }}">{{ $note->notes }}</td>
                                        <td>{{ $note->topic }}</td>
                                        <td><a href="/edit-notes/{{ $note->id }}" class="btn btn-primary btn-sm">Update</a></td>
                                        <td>
                                            <a href="{{ route('deleteNotes', $note->id) }}" 
                                               onclick="return confirmDelete()" 
                                               class="btn btn-danger btn-sm">
                                               Delete
                                            </a>
                                        </td>
                                        
                                        <td><a href="{{ route('show', $note->id) }}" class="btn btn-info btn-sm">View</a></td>

                                    </tr>    
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5" class="text-center">No Notes Found!</td>
                                </tr>
                            @endif
                        </tbody>
                       
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>




