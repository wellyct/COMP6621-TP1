@extends('layouts.main')

@section('content')
<link href="css.bootstrap.min.css" rel="stylesheet">
<h1>Course</h1>

<div class="pricing-header p-3 pb-md-4 mx-auto text-center">
  <h1 class="display-4 fw-normal">Daftar Paket Kursus Mengemudi</h1>
  <p class="fs-5 text-muted">Kami menawarkan Paket Latihan Manual dan Matic yang tentu saja dengan harga bersaing dan pelayanan yang maksimal.
    Kita akan diajarkan mulai dari dasar seperti pengenalan bagian-bagian mobil, pedal gas, kopling, rem, tanjakan atau turunan, dan juga parkir.</p>
</div>

<div><h4>Paket Mobil Manual</h4></div>
  <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
          <h4 class="my-0 fw-normal">Suka-suka</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">IDR 70<small class="text-muted fw-light">  ribu</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Biaya per jam</li>
            <li>Cash sesuai pengambilan</li>
            <li>2 – 12 x Pertemuan</li>
            <li style="text-decoration: line-through;">Administrasi 20rb</li>
            <li style="text-decoration: line-through;">Antar jemput</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
          <h4 class="my-0 fw-normal">Private</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">IDR 480<small class="text-muted fw-light"> ribu</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Administrasi 20rb</li>
            <li>10 x Pertemuan</li>
            <li>max 1 jam / ±20km</li>
            <li style="text-decoration: line-through;">Antar-Jemput</li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
          
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm border-primary">
        <div class="card-header py-3 text-bg-primary border-primary">
          <h4 class="my-0 fw-normal">VIP</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">IDR 630<small class="text-muted fw-light"> ribu</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Administrasi 20rb</li>
            <li>12 x Pertemuan</li>
            <li>max 2 jam / ±40km</li>
            <li>Antar-Jemput (max 10 Km)</li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>

        </div>
      </div>
    </div>
  </div>

  <div><h4>Paket Mobil Automatic</h4></div>
  <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
          <h4 class="my-0 fw-normal">Suka-suka</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">IDR 95<small class="text-muted fw-light">  ribu</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Biaya per jam</li>
            <li>Cash sesuai pengambilan</li>
            <li>2 – 12 x Pertemuan</li>
            <li style="text-decoration: line-through;">Administrasi 20rb</li>
            <li style="text-decoration: line-through;">Antar jemput</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
          <h4 class="my-0 fw-normal">Private</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">IDR 730<small class="text-muted fw-light"> ribu</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Administrasi 20rb</li>
            <li>10 x Pertemuan</li>
            <li>max 1 jam / ±20km</li>
            <li style="text-decoration: line-through;">Antar-Jemput</li>
            <li> </li>
            <li> </li>
            <li> </li>
            <li> </li>
            <li> </li>
          </ul>
          
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm border-primary">
        <div class="card-header py-3 text-bg-primary border-primary">
          <h4 class="my-0 fw-normal">VIP</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">IDR 830<small class="text-muted fw-light"> ribu</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Administrasi 20rb</li>
            <li>12 x Pertemuan</li>
            <li>max 2 jam / ±40km</li>
            <li>Antar-Jemput (max 10 Km)</li>
            <li> </li>
            <li> </li>
            <li> </li>
            <li> </li>
          </ul>

        </div>
      </div>
    </div>
  </div>
  
@endsection