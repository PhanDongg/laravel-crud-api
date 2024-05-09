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

    <style>
        #form-login {
            border: 1px solid;
            margin-top: 10%;
            padding: 50px;
            div {
                margin-bottom: 20px;
            }
            button {
                margin-top: 20px;
                width: 25%;
            }
        }
    </style>
    <form action="{{ route('login') }}" method="post" id="form-login">
        @csrf
        <div>
            <label for="email">Nhập email</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="password">Nhập password</label>
            <input type="password" name="password">
        </div>
        <button type="submit">Đăng nhập</button>
    </form>
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
