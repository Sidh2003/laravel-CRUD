<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #f1f1f1;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 80px;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #007bff;
            color: white;
            font-weight: bold;
            font-size: 1.3rem;
            text-align: center;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            padding: 5px;
        }

        .form-label {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #45b825;
            border-color: #00ff2f;
            width: 10%;
            padding: 12px;
            font-size: 1.1rem;
            border-radius: 8px;
        }

        .btn-primary:hover {
            background-color: #84ee4f;
            border-color: #f0f0f0;
        }

        .mb-3 {
            margin-bottom: 1.5rem !important;
        }

        input.form-control {
            border-radius: 8px;
            border: 1px solid #ddd;
            font-size: 1rem;
            padding: 12px;
        }

        .alert {
            font-size: 14px;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .alert-danger {
            background-color: #dc3545;
            color: white;
        }

        .text-danger {
            font-size: 0.875rem;
            color: #dc3545;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
        }

        .card-body {
            padding: 30px;
        }

        .card-footer {
            text-align: center;
            padding: 10px;
            background-color: #f7f7f7;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">Add New Employee</div>
            @if (Session::has('fail'))
                <span class="alert alert-danger p-2">{{ Session::get('fail') }}</span>
            @endif
            <div class="card-body">
                <form action="{{ route('AddUser') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="full_name" class="form-label">Full Name</label>
                        <input type="text" name="full_name" value="{{ old('full_name') }}" class="form-control"
                            id="full_name" placeholder="Enter Full Name">
                        @error('full_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                            id="email" placeholder="Enter Email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone_number" class="form-label">Phone Number</label>
                        <input type="number" name="phone_number" value="{{ old('phone_number') }}" class="form-control"
                            id="phone_number" placeholder="Enter Phone Number">
                        @error('phone_number')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="position" class="form-label">Position</label>
                        <input type="text" name="position" value="{{ old('position') }}" class="form-control"
                            id="position" placeholder="Enter Position">
                        @error('position')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
