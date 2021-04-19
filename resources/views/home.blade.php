@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h3>Selamat Datang {{Auth::user()->name}} <br> di PPDB SMK Merdeka Belajar</h3> <br>
                    Klik <a  href="{{ route('daftar.create') }}">Daftar Baru</a> untuk mendaftar <br>
                    Klik <a  href="{{ route('daftar.index') }}">Pendaftar</a> untuk melihat data pendaftar <br>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection