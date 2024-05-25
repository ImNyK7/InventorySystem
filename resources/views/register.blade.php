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
    <title>SI SUPRAS | Register</title>
</head>

<body>
    <main class="form-registration">
        <h1>REGISTER AKUN</h1>
        <div class="wrapper">
            <form action="/admin/register" method="POST">
                @csrf
                <table>
                    <tr>
                        <td><label for="username" class="form-label">Username/ID</label></td>
                        <td><input type="text" name="username"
                                class="form-control @error('username') is-invalid @enderror" required
                                value="{{ old('username') }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td><i class="fas fa-user me-2"></i></td>
                    </tr>
                    <tr>
                        <td><label for="password" class="form-label">Password</label></td>
                        <td><input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" required>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td><i class="fa-solid fa-lock me-2"></i></td>
                    </tr>
                    <tr>
                        <td><label for="password_confirmation" class="form-label">Confirm Password</label></td>
                        <td><input type="password" name="password_confirmation"
                                class="form-control @error('password_confirmation') is-invalid @enderror" required>
                            @error('password_confirmation')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                        <td><i class="fa-solid fa-circle-check me-2"></i></td>
                    </tr>
                    <tr>
                        <td><label for="role" class="form-label">Role</label></td>
                        <td><select name="is_admin" class="form-control @error('is_admin') is-invalid @enderror">
                                <option value="0">Gudang</option>
                                <option value="1">Admin</option>
                            </select>
                            @error('is_admin')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                </table>
                <button type="submit" class="btn">Register</button>
            </form>
        </div>
    </main>
</body>

</html>
