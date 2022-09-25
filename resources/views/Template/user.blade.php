<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>RadarTasik.com|{{ $title }}</title>
   <link rel="stylesheet" href={{ asset('css/app.css') }}>
</head>

<body>
   <div class="sticky-top">
      <nav class="navbar bg-light" style="height: 82px; ">
         <div class="container mt-3">
            <div class="row">
               <div class="col-md-3">
                  <img class="navbar-brand logo" src="{{ asset('img/logo/radar.png') }}" alt="" srcset="">
               </div>
               <div class="col-md-4">
                  <form class="d-flex " role="search">
                     <input class="form-control " style="border-bottom-left-radius: 17px; border-top-left-radius: 17px; width:26rem; height:45px;" type="search" placeholder="Search" aria-label="Search">
                     <a href="#"><img class="col-4" style="border-bottom-right-radius: 17px; border-top-right-radius: 17px; height:45px; width:50px;" src="{{ asset('img/logo/search.png') }}" alt="" srcset=""></a>
                  </form>
               </div>
               <div class="col-md-1">
                  <button type="button" id="btNetwork" class="btn-red">Network</button>
               </div>
               <div class="col-md-4">
                  <div class="col-md-12">
                     <div class="col-md-10">
                        <a href=""><img class="logo-sosmed" src="{{ asset('img/logo/facebook.png') }}" alt="" srcset=""></a>
                        <a href=""><img class="logo-sosmed1" src="{{ asset('img/logo/instagram.png') }}" alt="" srcset=""></a>
                        <a href=""><img class="logo-sosmed2" src="{{ asset('img/logo/twiter.png') }}" alt="" srcset=""></a>
                        <a href=""><img class="logo-sosmed3" src="{{ asset('img/logo/youtube.png') }}" alt="" srcset=""></a>
                     </div>
                     <div class="col-md-1">
                        <a class="ml-3" href="login">Login</a>
                     </div>                  
                  </div>
               </div>
            </div>
         </div>
      </nav>

      <ul class="nav nav-tabs justify-content-center" style="height: 50px; background-color:#0C25A3;">
         <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle text-light fw-bold mt-2" style="font-size: 12px;" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">DAERAH</a>
            <ul class="dropdown-menu ">
               <li><a class="dropdown-item text-light" href="#">Action</a></li>
               <li><a class="dropdown-item text-light" href="#">Another action</a></li>
               <li><a class="dropdown-item text-light" href="#">Something else here</a></li>
               <li>
                  <hr class="dropdown-divider">
               </li>
               <li><a class="dropdown-item text-light" href="#">Separated link</a></li>
            </ul>
         </li>
         <li class=" nav-item">
            <a class="nav-link text-light fw-bold mt-2" aria-current="page" style="font-size: 12px;" href="#">NASIONAL</a>
         </li>
         <li class=" nav-item">
            <a class="nav-link text-light fw-bold mt-2" aria-current="page" style="font-size: 12px;" href="#">INSIDEN</a>
         </li>
         <li class=" nav-item">
            <a class="nav-link text-light fw-bold mt-2" aria-current="page" style="font-size: 12px;" href="#">BISNIS</a>
         </li>
         <li class=" nav-item">
            <a class="nav-link text-light fw-bold mt-2" aria-current="page" style="font-size: 12px;" href="#">SPORTAIMENT</a>
         </li>
         <li class=" nav-item">
            <a class="nav-link text-light fw-bold mt-2" aria-current="page" style="font-size: 12px;" href="#">TEKNOLOGI</a>
         </li>
         <li class=" nav-item">
            <a class="nav-link text-light fw-bold mt-2" aria-current="page" style="font-size: 12px;" href="#">PENDIDIKAN</a>
         </li>
         <li class=" nav-item">
            <a class="nav-link text-light fw-bold mt-2" aria-current="page" style="font-size: 12px;" href="#">SELEBRITI</a>
         </li>
         <li class=" nav-item">
            <a class="nav-link text-light fw-bold mt-2" aria-current="page" style="font-size: 12px;" href="#">KESEHATAN</a>
         </li>
         <li class=" nav-item">
            <a class="nav-link text-light fw-bold mt-2" aria-current="page" style="font-size: 12px;" href="#">GAYA HIDUP</a>
         </li>
         <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle text-light fw-bold mt-2" style="font-size: 12px;" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">UMUM</a>
            <ul class="dropdown-menu ">
               <li><a class="dropdown-item text-light" href="#">Action</a></li>
               <li><a class="dropdown-item text-light" href="#">Another action</a></li>
               <li><a class="dropdown-item text-light" href="#">Something else here</a></li>
               <li>
                  <hr class="dropdown-divider">
               </li>
               <li><a class="dropdown-item text-light" href="#">Separated link</a></li>
            </ul>
         </li>
         <li class=" nav-item">
            <a class="nav-link text-light fw-bold mt-2" aria-current="page" style="font-size: 12px;" href="#">CATATAN HARIAN DAHLAN</a>
         </li>
         <li class=" nav-item">
            <a class="nav-link text-light fw-bold mt-2" aria-current="page" style="font-size: 12px;" href="#">INDEKS</a>
         </li>
      </ul>
   </div>

   <div class="bg-grey mx-3 my-4">
      @yield('konten')
   </div>
</body>

</html>