@extends('master.navbar')
@section('title', 'Program')
@section('content')
<div class="list-group list-group-dark">
    <a href="{{ Route('puasa') }}" class="list-group-item list-group-item-action p-4 m-2 border-0 bg-primary">Promo Puasa</a>
    <a href="{{ Route('gratis') }}" class="list-group-item list-group-item-action p-4 m-2 border-0 bg-info">Makan gratis</a>
    <a href="{{ Route('takjil') }}" class="list-group-item list-group-item-action p-4 m-2 border-0 bg-secondary">Berbagi takjil</a>
  </div>
@endsection