@extends('layouts.peminjaman')

@section('content')

<h1>Profil</h1>
<hr>
@auth
<div class="profil">
    <div class="row">
        <div class="col-lg-2"> 
            <h6>Nama</h6>
            <h4>{{ Auth::user()->nama }}</h4>
            <br>
            <h6>NPM</h6>
            <h4>{{ Auth::user()->npm }}</h4>
            <br>
            <h6>Nomor HP</h6>
            <h4>{{ Auth::user()->no_hp }}</h4>
            <br>
            <h6>Email</h6>
            <h4>{{ Auth::user()->email }}</h4>
            <br>
            <h6>Prodi</h6>
            <h4>{{ Auth::user()->prodi }}</h4>
        </div>
    </div>
</div>
    
@endauth
@endsection