<!DOCTYPE html>
<html>
<head>

	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Latihan JQUERY</title>
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

    <script>
    $( document ).ready(function() {
      $( "#tombol_hide" ).click(function() {     
        $("h3").hide();
      });

      $( "#tombol_big" ). click(function() {
        $("h3").css("font-size", "50px");
      });
       
      $( "#tombol_show" ).click(function() {     
        $("h3").show();
      });
       
      $( "#tombol_small" ).click(function() {     
        $("h3").css("font-size","20px");
      });
       
      $( "#tombol_red" ).click(function() {     
        $("h3").css( "color", "pink" );
      });

   });

    function tambah() {
      var j1 = parseFloat($(".j1").val());
      var j2 = parseFloat($(".j2").val());
      has = j1+j2;
      $(".has").val(has);
    }

    function kurang() {
      var k1 = parseFloat($(".k1").val());
      var k2 = parseFloat($(".k2").val());
      hsl = k1-k2;
      $(".hsl").val(hsl);
    }

    function kali() {
      var kal1 = parseFloat($(".kal1").val());
      var kal2 = parseFloat($(".kal2").val());
      ha = kal1*kal2;
      $(".ha").val(ha);
    }

    function bagi() {
      var bag1 = parseFloat($(".bag1").val());
      var bag2 = parseFloat($(".bag2").val());
      hal = bag1/bag2;
      $(".hal").val(hal);
    }

    function indeks(){
      var n1 = $(".n1").val();
      var n2 = $(".n2").val();
      var n3 = $(".n3").val();
      var ind = (parseFloat(n1)+parseFloat(n2)+parseFloat(n3)) /3;
      $(".inds").val(ind);
      if (ind>90){
        $('.hsl').val('istimewa');
      } else if(ind>85){
        $('.hsl').val('bagus');
      } else if(ind>75){
        $('.hsl').val('cukup');
      } else{
        $('.hsl').val('kurang');
      }
  }
   </script>

   <style>
     hr {
      width: 400px;
      border-top: 2px solid #666;
     }
     hr.p{
      width: 100%;
      border-top: 2px solid #666;
     }
   </style>

</head>
<body>
  @include('tampilan.navbar')

    @section('content')
  <center><h1>LATIHAN JQUERY</h1></center>  
  <hr>
  <h3>HAY SYIFA</h3>
  <button id="tombol_hide">Sembunyikan</button>
  <button id="tombol_show">Tampilkan</button>
  <button id="tombol_small">Perkecil</button>
  <button id="tombol_red">Merahkan</button>
  <button id="tombol_big">Perbesar</button>

  <br><br><p id="paragraf" onclick="alert('hay pasti kaget')">Silahkan klik saya</p><hr class="p">
<table>
  <form>
    <!--penjumlahan-->
    <th colspan="2"><center>Penjumlahan
    <br>--------------------------------</center></th>
    <tr>
        <td>Masukkan Angka Pertama</td>
        <td><input type="number" class="j1" name="j1" value=""></td>
    </tr>
    <tr>
        <td>Masukkan Angka Kedua</td>
        <td><input type="number" class="j2" name="j2" value=""></td>
        <td><input type="button" class="btn btn-primary btn-sm" value="Hitung" onclick="tambah()"></td>  
    </tr>
    <tr>
          <td>Hasil</td>
          <td><input class="has" name="has" type="text" readonly></td>
    </tr>

    <!--pengurangan-->
    <th colspan="2"><center><br><br>Pengurangan
    <br>--------------------------------</center></th>
    <tr>
        <td>Masukkan Angka Pertama</td>
        <td><input type="number" class="k1" name="k1" value=""></td>
    </tr>
    <tr>
        <td>Masukkan Angka Kedua</td>
        <td><input type="number" class="k2" name="k2" value=""></td>
        <td><input type="button" class="btn btn-primary btn-sm" value="Hitung" onclick="kurang()"></td>  
    </tr>
    <tr>
          <td>Hasil</td>
          <td><input class="hsl" name="hsl" type="text" readonly></td>
    </tr>

  <!--perkalian-->
    <th colspan="2"><center><br><br>Perkalian
    <br>--------------------------------</center></th>
    <tr>
        <td>Masukkan Angka Pertama</td>
        <td><input type="number" class="kal1" name="kal1" value=""></td>
    </tr>
    <tr>
        <td>Masukkan Angka Kedua</td>
        <td><input type="number" class="kal2" name="kal2" value=""></td>
        <td><input type="button" class="btn btn-primary btn-sm" value="Hitung" onclick="kali()"></td>  
    </tr>
    <tr>
          <td>Hasil</td>
          <td><input class="ha" name="ha" type="text" readonly></td>
    </tr> 

    <!--pembagian-->
    <th colspan="2"><center><br><br>Pembagian
    <br>--------------------------------</center></th>
    <tr>
        <td>Masukkan Angka Pertama</td>
        <td><input type="number" class="bag1" name="bag1" value=""></td>
    </tr>
    <tr>
        <td>Masukkan Angka Kedua</td>
        <td><input type="number" class="bag2" name="bag2" value=""></td>
        <td><input type="button" class="btn btn-primary btn-sm" value="Hitung" onclick="bagi()"></td>  
    </tr>
    <tr>
          <td>Hasil</td>
          <td><input class="hal" name="hal" type="text" readonly></td>
    </tr>

    <!--indeks-->
    <th colspan="2"><center><br><br>Indeks Nilai
    <br>--------------------------------</center></th>
    <tr>
        <td>Masukkan Nilai Pertama</td>
        <td><input type="number" class="n1" name="n1" value=""></td>
    </tr>
    <tr>
        <td>Masukkan Nilai Kedua</td>
        <td><input type="number" class="n2" name="n2" value=""></td>
    </tr>
    <tr>
        <td>Masukkan Nilai Ketiga</td>
        <td><input type="number" class="n3" name="n3" value=""></td> 
    </tr>
    <tr>
      <td><input type="button" class="btn btn-primary btn-sm" value="Hitung" onclick="indeks()"></td> 
    </tr>
    <tr>
          <td>Rata Rata</td>
          <td>Grade</td>
    </tr>
    <tr>
      <td><input class="inds" name="ind" type="text" readonly></td>
      <td><input class="hsl" name="ind" type="text" readonly></td>
    </tr>
    <tr>
      <td colspan="3"><br><br><center><input type="reset" name="res" class="btn btn-dark" value="Reset"></center></td>
    </tr>
    </form>
  </table><br><br>
</body>
</html>