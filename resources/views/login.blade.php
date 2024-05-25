<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
    <title>SI SUPRAS | Login</title>
</head>

<body>
    <main class="form-login">
        @if (session()->has('regsuccess'))
            <div class="alert alert-success" style="margin-top: -100px" role="alert">
                {{ session('regsuccess') }}
            </div>
        @endif
        @if (session()->has('loginError'))
            <div class="alert alert-danger" style="margin-top: -100px" role="alert">
                {{ session('loginError') }}
            </div>
        @endif
        <br>
        <div class="heading" style="margin-top: 20px">
            <h1>SELAMAT DATANG</h1>
            <br>
            <h1>SILAHKAN LOGIN</h1>
        </div>
        <div class="wrapper">
            <form action="/login" method="POST">
                @csrf
                <table>
                    <tr>
                        <td><label for="username" class="form-label" @error('username')
                            is-invalid @enderror>Username/ID</label></td>
                        <td><input type="text" name="username" class="form-control" required autofocus value="{{ old('username') }}"></td>
                        <td><i class="fas fa-user me-2"></i></td>
                        @error('username')
                            <tr class="invalid-message">{{ $message }}</tr>
                        @enderror
                    </tr>
                    <tr>
                        <td><label for="password" class="form-label">Password</label></td>
                        <td><input type="password" name="password" class="form-control" required></td>
                        <td><i class="fa-solid fa-lock me-2"></i></td>
                    </tr>
                </table>
                <button type="submit" class="btn">Login</button>
            </form>
        </div>
    </main>
</body>

</html>
