@extends('layouts.admin')
@section('content')

</head>
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
              <h3 class="box-title">Daftar Identitas Buku</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered table-hover">
                    <tr>
                        <td colspan="5"><a href="{{url('/add')}}"><button class="btn btn-success">Tambah</button></a></td>
                    </tr>
                    <tr>
                        <td><center>Judul Buku</td>
                        <td><center>Pengarang</td>
                        <td><center>Penerbit</td>
                        <td><center>Tahun Terbit</td>
                        <td><center>Tindakan</td>
                    </tr>
                    @foreach($buku as $value)
                    <tr>
                        <td>{{$value->judul_buku}}</td>
                        <td>{{$value->pengarang}}</td>
                        <td>{{$value->penerbit}}</td>
                        <td>{{$value->tahun_terbit}}</td>
                        <td><center><a href="{{url('/destroy/'.$value->id)}}"><button class="btn btn-danger btn-sm">Hapus</button></a> || 
                        <a href="{{url('/up/'.$value->id)}}"><button class="btn btn-warning btn-sm">Edit</button></a></center></td>
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