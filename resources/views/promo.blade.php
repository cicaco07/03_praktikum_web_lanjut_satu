@extends('master.navbar')
@section('title', 'Promo Makanan')
@section('content')
<h1 class="p-4 text-primary">Temukan promo menaik disini</h1>
<div class="d-flex justify-content-around">
<div class="card m-4" style="width: 18rem;">
    <div class="card-body">
    <h4 class="card-text">Tahu gejrot diskon 50%</h4>
      <img src="{{asset('img/tahugejrot.jfif')}}" alt="" class="img-fluid">
      <h5 class="card-title mt-4">Tahu Gejrot</h5>
      <p class="card-text">Tahu gejrot enak maknyus nyoiii</p>
      <a href="#" class="btn btn-primary">Beli</a>
    </div>
  </div>
  <div class="card m-4" style="width: 18rem;">
      <div class="card-body">
        <h4 class="card-text">Tahu sumedang beli 1 dapet 1</h4>
        <img src="{{asset('img/tahusumedang.jfif')}}" alt="" class="img-fluid">
        <h5 class="card-title mt-4">Tahu Sumedang</h5>
        <p class="card-text">Tahu rasa kaki lima harga bintang lima. Bukan gratis 1, tapi dapet 1</p>
        <a href="#" class="btn btn-primary">Beli</a>
      </div>
  </div>
  <div class="card m-4" style="width: 18rem;">
    <div class="card-body">
      <h4 class="card-text">Ayam diskon 30%</h4>
      <img src="{{asset('img/Ayam_geprek.png')}}" alt="" class="img-fluid">
      <h5 class="card-title mt-4">Ayam Geprek</h5>
      <p class="card-text">Ayam geprek pedas nikmat, porsi jumbo</p>
      <a href="#" class="btn btn-primary">Beli</a>
    </div>
</div>
</div>
<a href="{{ Route('product') }}" class="btn btn-secondary m-4">Kembali</a>
@endsection