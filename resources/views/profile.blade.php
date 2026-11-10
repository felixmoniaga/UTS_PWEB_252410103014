@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <div class="card card-menu p-4">
        <h1>Profil</h1>
        <p>Username: <strong>{{ $username }}</strong></p>
        <p>Peran: Pengelola Menu</p>
    </div>
@endsection