<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('cssm/style.css') }}">
@extends('Template.user')

@section('konten')
<div class="container">
   <div class="d-flex justify-content-center">
      <div class="col-md-11">
         <div class="card no-border">
            <div class="row">
               <div class="col-md-4">
                  <div class="catatan shadow">
                     <div class="card header-catatan">
                        <div class="d-flex justify-content-center">
                           <div class="col-2">
                              <img class="icon-disway" src="{{ asset('img/logo/logo-disway-head.png') }}" alt="">
                           </div>
                           <div class="col-8 mt-3">
                              <span class="text-catatan ">CATATAN DAHLAN ISKAN</span>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-body">
                           <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                     </div>
                  </div>
                  <div class="card mt-3 shadow">
                     <div class="card-body">
                        <img class="img-fluid" src="{{ asset('img/event/conten-writer.jpg') }}" alt="" srcset="">
                     </div>
                  </div>
                  <div class="card mt-3 shadow">
                     <div class="card-body">
                        <img class="img-fluid" src="{{ asset('img/event/event-senam.jpeg') }}" alt="" srcset="">
                     </div>
                  </div>
                  <div class="card-body pb-0">
                     <h2 class="header-berita">Terkini</h2>
                  </div>
                  @for ($i = 0; $i < 10; $i++)
                     <div class="card mb-3 no-border">
                        <div class="row g-0">
                           <div class="col-md-3">
                              <img src="{{ asset('img/img-berita/default.jpg') }}" class="img-fluid rounded-start foto-berita2" alt="...">
                           </div>
                           <div class="col-md-9">
                              <div class="card-body">
                                 <h5 class="card-title">Card title</h5>
                                 <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                 <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                              </div>
                           </div>
                        </div>
                     </div>
                  @endfor
               </div>
               <div class="col-md-8">
                  <div class="card-body pb-0">
                     <h2 class="header-berita">Terkini</h2>
                  </div>
                  @for ($i = 0; $i < 10; $i++)
                     <div class="card mb-3 no-border">
                        <div class="row g-0">
                           <div class="col-md-9">
                              <div class="card-body">
                                 <h5 class="card-title">Card title</h5>
                                 <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                 <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                              </div>
                           </div>
                           <div class="col-md-3">
                              <img src="{{ asset('img/img-berita/default.jpg') }}" class="img-fluid rounded-start foto-berita" alt="...">
                           </div>
                        </div>
                     </div>
                  @endfor
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
{{-- @auth
<center>{{ auth()->user()->name }}</center>
@endauth --}}
@endsection