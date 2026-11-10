@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card card-menu p-4">
                <h2 class="text-center mb-3">Login</h2>

                <form action="/dashboard" method="GET">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <button type="submit" class="btn btn-sage w-100">Masuk</button>
                </form>
            </div>
        </div>
    </div>
@endsection