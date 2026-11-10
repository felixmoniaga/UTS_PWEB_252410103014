@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('content')
    <h1 class="mb-4">Daftar Menu</h1>

    <div class="row g-3">
        @foreach($menus as $menu)
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card card-menu h-100">
                    <img src="{{ asset('images/menu/' . $menu['gambar']) }}" class="card-img-top card-img-menu" alt="{{ $menu['nama'] }}">
                    <div class="card-body">
                        <span class="badge badge-sage mb-2">{{ $menu['kategori'] }}</span>
                        <h5 class="card-title">{{ $menu['nama'] }}</h5>
                        <p class="card-text fw-bold">Rp {{ number_format($menu['harga'], 0, ',', '.') }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection