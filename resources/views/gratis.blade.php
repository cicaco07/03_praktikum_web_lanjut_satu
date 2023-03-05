@extends('master.navbar')
@section('title', 'Makan Gratis')
@section('content')
<h1 class="text-center text-info">Program makan gratis untuk yang membutuhkan tanpa syarat</h1>
<div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col p-4">
      <div class="card">
        <img src="{{asset('img/gratis2.jpg')}}" class="card-img-top"
          alt="Hollywood Sign on The Hill" />
        <div class="card-body">
          <h5 class="card-title">Makan gratis</h5>
          <p class="card-text">
            Setiap hari jum'at pagi di jalan WR Supratman. Datanglah bagi kalian yang membutuhkan untuk makan atau ikut berdonasi agar program ini dapat terus berjalan
          </p>
          <a href="#" class="btn btn-primary">Lihat lokasi..</a>
        </div>
      </div>
    </div>
    <div class="col p-4">
      <div class="card">
        <img src="{{asset('img/gratis1.jpg')}}" class="card-img-top"
          alt="Palm Springs Road" />
        <div class="card-body">
          <h5 class="card-title">Makan gratis</h5>
          <p class="card-text">
            Setiap hari Sabtu sore di resto Pak Dani. Datanglah bagi kalian yang membutuhkan untuk makan atau ikut berdonasi agar program ini dapat terus berjalan
          </p>
          <a href="#" class="btn btn-primary">Lihat lokasi..</a>
        </div>
      </div>
    </div>
  </div>
  <a href="{{ Route('program') }}" class="btn btn-secondary m-4">Kembali</a>
@endsection