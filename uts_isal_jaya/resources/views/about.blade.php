@extends('layouts.layout2')

@section('title', 'About')

@section('content')
    <div class="container mt-4">
    <div class="row g-4">

        <!-- Card 1 -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <img src="{{  asset('images/carte.png')}}" class="card-img-top" alt="Foto Profile">
                <div class="card-body">
                    <h5 class="card-title fw-bold">isal</h5>
                    <p class="card-text">KALO GUA PEGANG NEGEV MENDING LU LARI DAH😎</p>
                    <p class="text-muted small mb-0">2301010084</p>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <img src="{{  asset('images/jaya.jpg')}}" class="card-img-top" alt="Foto Profile">
                <div class="card-body">
                    <h5 class="card-title fw-bold">I KETUT BAGUS PURNAJAYA</h5>
                    <p class="card-text">PENIKAT ANIME(WIBUUU)</p>
                    <p class="text-muted small mb-0">2301010082</p>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection