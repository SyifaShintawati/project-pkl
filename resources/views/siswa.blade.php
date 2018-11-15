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
                        <td colspan=6><a href="{{url('/tambah')}}"><button class="btn btn-success">Tambah Data</button></a></td>
                    </tr>
                    <tr>
                        <td><center>Nama</td>
                        <td><center>Jurusan</td>
                        <td><center>Asal Sekolah</td>
                        <td><center>Alamat</td>
                        <td><center>Tanggal Lahir</td>
                        <td><center>Tindakan</td>
                    </tr>
                        @foreach($data as $value)
                    <tr>
                        <td>{{$value->nama}}</td>
                        <td>{{$value->jurusan}}</td>
                        <td>{{$value->asal_sekolah}}</td>
                        <td>{{$value->alamat}}</td>
                        <td>{{$value->tanggal_lahir}}</td>
                        <td><center><a class="btn btn-danger btn-sm" href="{{url('/hapus/'.$value->id)}}">Hapus</a> || <a class="btn btn-warning btn-sm" href="{{url('/edit/'.$value->id)}}">Edit</a></center></td>
                    </tr>

                    @endforeach

                </table>
                </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection