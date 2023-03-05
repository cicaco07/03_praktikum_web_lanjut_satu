@extends('master.navbar')
@section('title', 'Food List')
@section('content')

    <h1 class="p-4 text-primary">Halaman penjualan makanan</h1>
    <div class="d-flex justify-content-around">
        @yield('card')
        <div class="card m-4" style="width: 18rem;">
          <div class="card-body">
            <img src="{{asset('img/tahugejrot.jfif')}}" alt="" class="img-fluid">
            <h5 class="card-title">Tahu Gejrot</h5>
            <p class="card-text">Tahu gejrot enak maknyus nyoiii</p>
            <a href="#" class="btn btn-primary">Beli</a>
          </div>
        </div>
        <div class="card m-4" style="width: 18rem;">
            <div class="card-body">
              <img src="{{asset('img/tahusumedang.jfif')}}" alt="" class="img-fluid">
              <h5 class="card-title">Tahu Sumedang</h5>
              <p class="card-text">Tahu rasa kaki lima harga bintang lima</p>
              <a href="#" class="btn btn-primary">Beli</a>
            </div>
        </div>
        <div class="card m-4" style="width: 18rem;">
          <div class="card-body">
            <img src="{{asset('img/Ayam_geprek.png')}}" alt="" class="img-fluid">
            <h5 class="card-title">Ayam Geprek</h5>
            <p class="card-text">Ayam geprek pedas nikmat, porsi jumbo</p>
            <a href="#" class="btn btn-primary">Beli</a>
          </div>
      </div>
    </div>

    <div class="d-flex justify-content-around">
      <div class="card m-4" style="width: 18rem;">
        <div class="card-body">
          <img src="{{asset('img/mieayam.jpg')}}" alt="" class="img-fluid">
          <h5 class="card-title">Mie Ayam</h5>
          <p class="card-text">Mie ayam enak dengan extra ayam yang banyak</p>
          <a href="#" class="btn btn-primary">Beli</a>
        </div>
    </div>
    <div class="card m-4" style="width: 18rem;">
      <div class="card-body">
        <img src="{{asset('img/mieayam.jpg')}}" alt="" class="img-fluid">
        <h5 class="card-title">Mie Ayam</h5>
        <p class="card-text">Mie ayam enak dengan extra ayam yang banyak</p>
        <a href="#" class="btn btn-primary">Beli</a>
      </div>
  </div>
    </div>

    <div class="d-flex justify-content-around">
      @yield('card')
      <div class="card m-4" style="width: 18rem;">
        <div class="card-body">
          <img src="{{asset('img/tahugejrot.jfif')}}" alt="" class="img-fluid">
          <h5 class="card-title">Tahu Gejrot</h5>
          <p class="card-text">Tahu gejrot enak maknyus nyoiii</p>
          <a href="#" class="btn btn-primary">Beli</a>
        </div>
      </div>
      <div class="card m-4" style="width: 18rem;">
          <div class="card-body">
            <img src="{{asset('img/tahusumedang.jfif')}}" alt="" class="img-fluid">
            <h5 class="card-title">Tahu Sumedang</h5>
            <p class="card-text">Tahu rasa kaki lima harga bintang lima</p>
            <a href="#" class="btn btn-primary">Beli</a>
          </div>
      </div>
      <div class="card m-4" style="width: 18rem;">
        <div class="card-body">
          <img src="{{asset('img/Ayam_geprek.png')}}" alt="" class="img-fluid">
          <h5 class="card-title">Ayam Geprek</h5>
          <p class="card-text">Ayam geprek pedas nikmat, porsi jumbo</p>
          <a href="#" class="btn btn-primary">Beli</a>
        </div>
    </div>
  </div>
  <a href="{{ Route('product') }}" class="btn btn-secondary m-4">Kembali</a>
@endsection

