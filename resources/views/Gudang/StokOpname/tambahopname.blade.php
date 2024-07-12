@extends('Layouts.main')

@section('content')
    <style>
        .invalid-message {
            color: red;
            font-size: 0.9em;
            margin-top: 5px;
        }
    </style>
    <div class="wrapper-wrapper">
        <div id="page-content-wrapper" class="d-flex justify-content-center align-items-center">
            <div class="form-wrapper" style="margin-top: 20px">
                <h1>Form<br>Stok Opname</h1>
                <form action="{{ route('stokopname.store') }}" method="POST">
                    @csrf
                    <table>

                        <tr>
                            <td><label for="tanggalopname">Tanggal</label></td>
                            <td>
                                <input type="date" name="tanggalopname" id="dateField"
                                    value="{{ old('tanggalopname') }}" min="2015-01-02" max="2030-12-31" required style="width: 200px">
                                @error('tanggalopname')
                                    <div class="invalid-message">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td><label for="descopname">Keterangan</label></td>
                                <td>
                                    <textarea type="text" name="descopname" id="descopname" style="width: 200px"
                                        @error('descopname') class="is-invalid" @enderror>{{ old('descopname') }}</textarea>
                                    @error('descopname')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </td>
                            </td>   
                        </tr>
                    </table>
                    <a href="/stokopname"><button type="button" class="btncancel">Cancel</button></a>
                    <button type="submit" class="btnsubmit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $("select").select2({
                placeholder: "",
            });
        });
    </script>
@endsection
