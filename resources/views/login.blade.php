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
    <div class="wrapper-wrapper">
        <h1>SELAMAT DATANG <br>SILAHKAN LOGIN</h1>
        <div class="wrapper">
            <form action="">
                <table>
                    <tr>
                        <td><label for="username" class="form-label">Username/ID</label></td>
                        <td><input type="text" id="username" name="username" class="form-control" required></td>
                        <td><i class="fas fa-user me-2"></i></td>
                    </tr>
                    <tr>
                        <td><label for="password" class="form-label">Password</label></td>
                        <td><input type="password" id="password" name="password" class="form-control" required></td>
                        <td><i class="fa-solid fa-lock"></i></td>
                    </tr>
                </table>
                <button type="submit" class="btn">Login</button>
            </form>
        </div>
    </div>
</body>

</html>
