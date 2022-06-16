<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Unduh Izin SiCantik | DPMPTSP Kota Pasuruan</title>

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/signin.css') }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
  </head>
  <body>
    <div class="form-signin">
      <img class="d-block mx-auto mb-4" src="{{ asset('logo/kotapasuruan.png') }}" alt="" width="95" height="115">
      <h2 class="text-center">DPMPTSP Kota Pasuruan</h2>
      <p class="lead text-center">Unduh Izin SiCantik Cloud</p>
      <form class="card p-3">
        <div class="input-group">
          <input type="text" minlength="8" class="form-control" id="noper" placeholder="Masukkan Nomor Permohonan">
          <a href="javascript:void(0);" id="cari" class="btn btn-secondary">Cari</a>
        </div>
      </form>
      <br>
      <div id="formhasil">

      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script type="text/javascript">
      $(document).ready(function(){
        $.ajaxSetup({
          headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });

        $("#cari").click(function(){
          $keyword = $("#noper").val();
          
          if($keyword !== ''){
              $.ajax({
              type: 'GET',
              url: "{{ route('cari') }}",
              data: {'data': $keyword},
              success: function(data) {
                if (data !== '' ) {
                  $('#formhasil').html(data);
                } else {
                  $('#formhasil').html('<div class="card p-2"> <div class="card-body"> <p class="card-text"> No. Permohonan yang anda masukkan tidak ditemukan </p> </div> </div>');
                  // alert('No. Permohonan yang anda Masukkan tidak ditemukan !');
                }
              },
            });
            
          } else {
              alert('Masukkan Nomor Permohonan');
              $('#noper').focus();
              $('#formhasil').html('');
          }
          

        });
      });
    </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
  
</html>