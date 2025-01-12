<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #007bff;
            color: white;
            font-weight: bold;
            font-size: 1.3rem;
            text-align: center;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .form-label {
            font-weight: 600;
            font-size: 1rem;
        }

        .btn-primary {
            background-color: #45b825;
            border-color: #00ff2f;
            width: 10%;
            padding: 12px;
            font-size: 12px;
            border-radius: 8px;
        }

        .btn-primary:hover {
            background-color: #84ee4f;
            border-color: #f0f0f0;
        }

        .mb-3 {
            margin-bottom: 1.5rem;
        }

        input.form-control {
            border-radius: 8px;
            border: 1px solid #ddd;
            padding: 12px;
            font-size: 1rem;
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

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .card-body {
            padding: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">Edit Employee</div>
            @if (Session::has('fail'))
                <span class="alert alert-danger p-2">{{ Session::get('fail') }}</span>
            @endif
            <div class="card-body">
                <form action="{{ route('EditUser') }}" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <div class="mb-3">
                        <label for="full_name" class="form-label">Full Name</label>
                        <input type="text" name="full_name" value="{{ $user->name }}" class="form-control"
                            id="full_name" placeholder="Enter Full Name">
                        @error('full_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" value="{{ $user->email }}" class="form-control"
                            id="email" placeholder="Enter Email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="phone_number" class="form-label">Phone Number</label>
                        <input type="number" name="phone_number" value="{{ $user->phone_number }}" class="form-control"
                            id="phone_number" placeholder="Enter Phone Number">
                        @error('phone_number')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="position" class="form-label">Position</label>
                        <input type="text" name="position" value="{{ $user->position }}" class="form-control"
                            id="position" placeholder="Enter Position">
                        @error('position')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
