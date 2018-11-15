@extends('layouts.admin')
@section('content')

<body>
    <h1>
        Tabel CRUD
        <small>Control panel</small>
      </h1>
  
             <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Siswa Terdaftar</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <table class="table table-bordered table-hover">
                    <tr>
                        <td colspan=7><button class="btn btn-success" data-toggle="modal" data-target="#modaltambih">Tambah Data</button></a></td>
                    </tr>
                    <tr>
                        <td><center>Foto</td>
                        <td><center>Nama</td>
                        <td><center>Tempat Lahir</td>
                        <td><center>Tanggal Lahir</td>
                        <td><center>Hobby</td>
                        <td><center>File</td>
                        <td><center>Tindakan</td>
                    </tr>
                        @foreach($biw as $value)
                    <tr>
                        <td><img src="{{ asset('/img/'.$value->foto)}}" width="30px" height="30px"></td>
                        <td>{{$value->nama}}</td>
                        <td>{{$value->tempat}}</td>
                        <td>{{$value->tanggal_lahir}}</td>
                        <td>{{$value->Hobby}}</td>
                        <td><a href="{{url('/file/'.$value->file)}}" target="_blank"><img src="{{ asset('/img/dok.jpg')}}" width="30px" height="30px"></a></td>
                        <td><center><a class="btn btn-danger btn-sm" href="{{url('/hps/'.$value->id)}}">Hapus</a> || <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modaledit{{$value->id}}">Edit</button></center></td>
                    </tr>

                    <div class="modal fade" id="modaledit{{$value->id}}" role="dialog">
    <div class="modal-dialog modal-xs">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Biodata</h4>
        </div>
        <div class="modal-body">
                    <form action="{{url('/baru')}}" method="post" enctype="multipart/form-data"> {{csrf_field()}} @csrf

                        <div class="form-group row">
                            <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

                            <div class="col-md-6">
                                <input id="id" type="hidden" class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}" name="id" value="{{$value->id}}" required autofocus>

                                @if ($errors->has('id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama Lengkap') }}</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" value="{{$value->nama}}" required autofocus>

                                @if ($errors->has('nama'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tempat" class="col-md-4 col-form-label text-md-right">{{ __('Tempat Lahir') }}</label>

                            <div class="col-md-6">
                                <input id="tempat" type="text" class="form-control{{ $errors->has('tempat') ? ' is-invalid' : '' }}" name="tempat" value="{{$value->tempat}}" required>

                                @if ($errors->has('tempat'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tempat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tgll" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Lahir') }}</label>

                            <div class="col-md-6">
                                <input type="date" name="tgll" id="tgll" value="{{$value->tanggal_lahir}}" class="form-control" require>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hobi" class="col-md-4 col-form-label text-md-right">{{ __('Hobby') }}</label>

                            <div class="col-md-6">
                                <input id="hobi" type="text" class="form-control{{ $errors->has('hobi') ? ' is-invalid' : '' }}" name="hobi" value="{{$value->Hobby}}" required>

                                @if ($errors->has('hobi'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hobi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="foto" class="col-md-4 col-form-label text-md-right">{{ __('Foto') }}</label>

                            <div class="col-md-6">
                                <input id="foto" type="file" class="form-control{{ $errors->has('foto') ? ' is-invalid' : '' }}" name="foto" required>

                                @if ($errors->has('foto'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('foto') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-md-4 col-form-label text-md-right">{{ __('File') }}</label>

                            <div class="col-md-6">
                                <input id="file" type="file" class="form-control{{ $errors->has('file') ? ' is-invalid' : '' }}" name="file" required>

                                @if ($errors->has('file'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


                @endforeach
                </table>

            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>



@include('tambih')
    <!-- /.content -->
@endsection
