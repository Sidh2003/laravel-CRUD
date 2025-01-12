<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /* Custom styles */
        body {
            background-color: #f0f2f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            margin-top: 40px;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .card-header {
            background-color: #007bff;
            color: white;
            font-weight: 600;
            border-bottom: 2px solid #0056b3;
            padding: 15px;
        }

        .card-header a {
            font-size: 14px;
            color: white;
        }

        .alert {
            font-size: 16px;
            margin-top: 10px;
            padding: 12px;
            border-radius: 8px;
            transition: opacity 0.3s ease-in-out;
        }

        .alert-success {
            background-color: #28a745;
            color: white;
        }

        .alert-danger {
            background-color: #dc3545;
            color: white;
        }

        table {
            transition: transform 0.3s ease;
        }

        table:hover {
            transform: scale(1.02);
        }

        th,
        td {
            text-align: center;
            padding: 12px 15px;
            vertical-align: middle;
        }

        th {
            background-color: #f7f7f7;
            color: #343a40;
            font-weight: 600;
        }

        td {
            background-color: #ffffff;
            color: #6c757d;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .btn {
            transition: all 0.3s ease;
            padding: 8px 16px;
            font-size: 14px;
            border-radius: 5px;
        }

        .btn:hover {
            opacity: 0.8;
            transform: scale(1.05);
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        .fadeIn {
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .pagination {
            justify-content: center;
        }

        .pagination .page-item.active .page-link {
            background-color: #007bff;
            border-color: #007bff;
        }

        .pagination .page-item:hover .page-link {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container fadeIn">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>Employee Management System</span>
                <a href="/add/user" class="btn btn-success btn-sm">Add New</a>
            </div>

            @if (Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif

            @if (Session::has('fail'))
                <div class="alert alert-danger">{{ Session::get('fail') }}</div>
            @endif

            <div class="card-body">
                <table class="table table-sm table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Full name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Position</th>
                            <th>Created At</th>
                            <th>Last Update</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($all_users) > 0)
                            @foreach ($all_users as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone_number }}</td>
                                    <td>{{ $item->position }}</td>
                                    <td>{{ $item->created_at->format('d M, Y') }}</td>
                                    <td>{{ $item->updated_at->format('d M, Y') }}</td>
                                    <td><a href="/edit/{{ $item->id }}" class="btn btn-primary btn-sm">Edit</a></td>
                                    <td><a href="/delete/{{ $item->id }}" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="8" class="text-center">No User Found!</td>
                            </tr>
                        @endif
                    </tbody>
                </table>

                {{-- <!-- Pagination -->
                <div class="d-flex justify-content-center">
                    {{ $all_users->links() }}
                </div> --}}
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
