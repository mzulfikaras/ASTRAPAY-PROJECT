<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">


    <title>HOME PAGE | PT ASTRA DIGITAL ARA</title>
</head>


<body>
    @include('sweetalert::alert')
    @include('layouts.navbar-page')
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
              <div class="col-md-6">
                <img src="{{asset('assets/images_login/logo.png')}}" width="200px" alt="" srcset="">
              </div>
              <div class="col-md-6">
                <h1 class="display-4">Selamat Datang <span>Di Home Page</span><br> Submission <span>Pengajuan Karyawan</span> Astrapay</h1>
              </div>  
            </div>
        </div>
    </div>

    <!-- Info panel -->
    <div class="container" id="info">
        <div class="row justify-content-center">
            <div class="col-10 info-panel">
                <div class="row justify-content-center ">
                    <div class="col-lg-8">
                    <h5 id="h5">HALAMAN KARYAWAN PT ASTRA DIGITAL</h5> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Panel  -->







    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>
