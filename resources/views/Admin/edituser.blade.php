@extends('layouts.main')

@section('content')
    <div class="wrapper-wrapper">
        <div id="page-content-wrapper" class="d-flex justify-content-center align-items-center">
            <div class="form-wrapper">
                <h1>Form<br>Edit User</h1>
                <form method="POST" action="{{ url('admin/'.$user->username) }}">
                    @csrf
                    @method('put')
                    <table>
                        <tr>
                            <td><label for="username">Username</label></td>
                            <td>
                                <input type="text" name="username" id="username" value="{{ old('username', $user->username) }}" required style="width: 150px"
                                    @error('username') class="is-invalid" @enderror>
                                @error('username')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td><label for="role">Role</label></td>
                            <td>
                                <select name="role" class="form-control @error('role') is-invalid @enderror">
                                    <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
                                    <option value="gudang" {{ old('role', $user->role) == 'gudang' ? 'selected' : '' }}>Gudang</option>
                                    <option value="purchasing" {{ old('role', $user->role) == 'purchasing' ? 'selected' : '' }}>Purchasing</option>
                                    <option value="sales" {{ old('role', $user->role) == 'sales' ? 'selected' : '' }}>Sales</option>
                                </select>
                                @error('role')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                    </table>
                    <a href="{{ url('/admin') }}"><button type="button" class="btncancel">Cancel</button></a>
                    <button type="submit" class="btnsubmit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
