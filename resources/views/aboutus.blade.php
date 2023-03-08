@extends('master.navbar')
@section('title', 'About Us')
@section('content')

<h1 class="p-4 text-primary">About Us</h1>
<div class="d-flex justify-content-around">
    <div class="card m-4" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title mt-3">Tempat Berdagang</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam veniam delectus quos doloremque necessitatibus minus?</p>
        <a href="#" class="btn btn-primary">Pergi ke.....</a>
      </div>
    </div>
    <div class="card m-4" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title mt-3">Deskripsi toko</h5>
          <p class="card-text">Tahu rasa kaki lima harga bintang lima</p>
          <a href="#" class="btn btn-primary">Pergi ke....</a>
        </div>
    </div>
</div>
@endsection