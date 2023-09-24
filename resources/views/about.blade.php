@extends('layouts.main')

@section('container')
<!-- Konten About -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <img src="img/{{ $about["img"] }}" alt="Foto Profil" class="img-fluid rounded-circle">
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">{{ $about["name"] }}</h2>
                    <p class="card-text">{{ $about["email"] }}</p>
                    <p class="card-text">{{ $about["about"] }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection