<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(to right, #4facfe, #00f2fe);
            font-family: 'Arial', sans-serif;
        }
        .container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
            font-weight: 700;
        }
        table {
            background: #f9f9f9;
        }
        th {
            background: #42a5f5;
            color: #fff;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background: #e3f2fd;
        }
        tr:hover {
            background: #bbdefb;
        }
        .table-bordered th,
        .table-bordered td {
            border: 1px solid #90caf9;
        }
        .btn-create {
            background: linear-gradient(45deg, #42a5f5, #478ed1);
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 20px 0;
            cursor: pointer;
            border-radius: 5px;
            transition: background 0.3s ease;
        }
        .btn-create:hover {
            background: linear-gradient(45deg, #478ed1, #42a5f5);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Users List</h2>
        <a href="{{ route('user_create') }}" class="btn-create">Create New User</a>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-lg mr-2">Edit</a>
                            <a href="{{route ('user_delete', '$user->id')}}" class="btn btn-danger btn-lg">Delete</a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
