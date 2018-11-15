<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dist/css/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    @include('tampilan.navbar')

    @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('EDIT DATA') }}</div>

                <div class="card-body">
                    <form action="{{url('/update')}}" method="post"> {{csrf_field()}} @csrf

                        <input type="hidden" name="id" value="{{$value->id}}">

                        <div class="form-group row">
                            <label for="judul" class="col-md-4 col-form-label text-md-right">{{ __('Judul Buku') }}</label>

                            <div class="col-md-6">
                                <input id="judul" type="text" class="form-control{{ $errors->has('judul') ? ' is-invalid' : '' }}" name="judul" value="{{$value->judul_buku}}" required autofocus>

                                @if ($errors->has('judul'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('judul') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Pengarang" class="col-md-4 col-form-label text-md-right">{{ __('Pengarang') }}</label>

                            <div class="col-md-6">
                                <input id="pengarang" type="text" class="form-control{{ $errors->has('pengarang') ? ' is-invalid' : '' }}" name="pengarang" value="{{$value->pengarang}}" required>

                                @if ($errors->has('pengarang'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('pengarang') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="penerbit" class="col-md-4 col-form-label text-md-right">{{ __('Penerbit') }}</label>

                            <div class="col-md-6">
                                <input id="penerbit" type="text" class="form-control{{ $errors->has('penerbit') ? ' is-invalid' : '' }}" name="penerbit" required value="{{$value->penerbit}}">

                                @if ($errors->has('penerbit'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('penerbit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="thn" class="col-md-4 col-form-label text-md-right">{{ __('Tahun Terbit') }}</label>

                            <div class="col-md-6">
                                <input id="thn" type="text" class="form-control" name="thn" value="{{$value->tahun_terbit}}" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>