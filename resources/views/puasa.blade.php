@extends('master.navbar')
@section('title', 'Promo Puasa')
@section('content')
<h1>Promo spesial puasa akan segera datang</h1>
<div class="d-flex justify-content-around">
    <div class="card m-4" style="width: 18rem;">
        <div class="card-body">
          <h4 class="card-text">Tahu sumedang beli 1 dapet 1</h4>
          <img src="{{asset('img/comingsoon.png')}}" alt="" class="img-fluid">
          <h5 class="card-title mt-4">Tahu Sumedang</h5>
          <p class="card-text">Tahu rasa kaki lima harga bintang lima. Bukan gratis 1, tapi dapet 1</p>
        </div>
    </div>
    <div class="card m-4" style="width: 18rem;">
        <div class="card-body">
          <h4 class="card-text">Tahu sumedang beli 1 dapet 1</h4>
          <img src="{{asset('img/comingsoon.png')}}" alt="" class="img-fluid">
          <h5 class="card-title mt-4">Tahu Sumedang</h5>
          <p class="card-text">Tahu rasa kaki lima harga bintang lima. Bukan gratis 1, tapi dapet 1</p>
        </div>
    </div>
    <div class="card m-4" style="width: 18rem;">
        <div class="card-body">
          <h4 class="card-text">Tahu sumedang beli 1 dapet 1</h4>
          <img src="{{asset('img/comingsoon.png')}}" alt="" class="img-fluid">
          <h5 class="card-title mt-4">Tahu Sumedang</h5>
          <p class="card-text">Tahu rasa kaki lima harga bintang lima. Bukan gratis 1, tapi dapet 1</p>
        </div>
    </div>
</div>
<a href="{{ Route('program') }}" class="btn btn-secondary m-4">Kembali</a>
@endsection