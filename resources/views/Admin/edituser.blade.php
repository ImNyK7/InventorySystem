@extends('Layouts.adminmain')

@section('content')
    <div class="wrapper-wrapper">
        <div id="page-content-wrapper" class="d-flex justify-content-center align-items-center">
            <div class="form-wrapper">
                <h1>Form<br>Edit User</h1>
                <form method="POST" action="{{  url('admin/'.$user->username)  }}">
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
                            <td><label for="is_admin">Role</label></td>
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
