@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="card card-menu p-4">
        <h1>Halo, {{ $username }}!</h1>
        <p class="text-muted">Ini dashboard. Daftar menu ada di tombol ini.</p>
        <div>
            <a class="btn btn-sage" href="/pengelolaan?username={{ $username }}">Lihat Daftar Menu</a>
        </div>
    </div>
@endsection