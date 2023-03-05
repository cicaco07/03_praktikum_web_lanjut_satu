@extends('master.navbar')
@section('title', 'Product')
@section('content')
<div class="list-group list-group-dark">
    <a href="{{ Route('food') }}" class="list-group-item list-group-item-action p-4 m-2 border-0 bg-primary">List Makanan</a>
    <a href="{{ Route('bestseller') }}" class="list-group-item list-group-item-action p-4 m-2 border-0 bg-info">Best Seller Food</a>
    <a href="{{ Route('promo') }}" class="list-group-item list-group-item-action p-4 m-2 border-0 bg-secondary">Promo Makanan</a>
  </div>
@endsection