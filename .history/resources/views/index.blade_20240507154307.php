<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('custom.css') }}">
    <title>Home</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
                        {{-- đăng xuất --}}
                        <form action="{{ route('logout') }}" method="post" id="form-logout" style="border:none; width:20%;">
                            @csrf
                            <button type="submit">Đăng xuất</button>
                        </form>
        </div>
    </nav>

    <h2>List users</h2>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td colspan="3">Action</td>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td><button><a href="http://127.0.0.1:8000/admin/users/create">Add User</a</button>
                </td>
                <td><button><a href="http://127.0.0.1:8000/admin/users/update/{{ $user->id }}">Update User</a></button></td>
                <td><button><a href="http://127.0.0.1:8000/admin/users/delete/{{ $user->id }}"> Delete User</a></button></td>
            </tr>
        @endforeach
    </table>

    <footer class="bg-dark text-light text-center py-4 d-none">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2021 Your Company</p>
                </div>
                <div class="col-md-6">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#">Home</a></li>
                        <li class="list-inline-item"><a href="#">About</a></li>
                        <li class="list-inline-item"><a href="#">Services</a></li>
                        <li class="list-inline-item"><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
