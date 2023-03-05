@extends('master.navbar')
@section('title', 'Takjil Gratis')
@section('content')
    <br><br><br><br><br><br><br>
    <h2 class="bg-dark text-center text-info p-4">Program berbagi takjil akan dilaksanakan setiap hari selasa dan jumat selama bulan puasa.
        Kami akan membagikan takjil gratis di depan resto kami berdiri. Bagi yang ingin mendapat
        takjil gratis silahkan mampir ke resto kami.
    </h2>
    <br><br><a href="{{ Route('program') }}" class="btn btn-secondary m-4">Kembali</a><br><br><br><br><br>
@endsection