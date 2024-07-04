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
                        <td><label for="username" class="form-label">Username/ID</label></td>
                        <td><input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                                required autofocus value="{{ old('username') }}"></td>
                        <td><i class="fas fa-user me-2"></i></td>
                    </tr>
                    @error('username')
                    <tr>
                        <td></td>
                        <td><span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span></td>
                        <td></td>
                    </tr>
                    @enderror
                    <tr>
                        <td><label for="password" class="form-label">Password</label></td>
                        <td><input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                                required></td>
                        <td><i class="fa-solid fa-lock me-2"></i></td>
                    </tr>
                    @error('password')
                    <tr>
                        <td></td>
                        <td><span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span></td>
                        <td></td>
                    </tr>
                    @enderror
                </table>
                @if ($errors->any())
                <div class="alert alert-danger mt-3">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if(session('loginError'))
                <div class="alert alert-danger mt-3">
                    {{ session('loginError') }}
                </div>
                @endif
                <button type="submit" class="btn">Login</button>
            </form>
        </div>
    </main>
</body>

</html>
