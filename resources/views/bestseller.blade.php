@extends('master.navbar')

@section('bestseller')

<h1 class="p-4 text-primary">Best Seller Food</h1>
<div class="d-flex justify-content-around">
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
</div>

@endsection