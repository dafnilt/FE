@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Selamat Datang {{ $name }} di Aplikasi Manajemen Mahasiswa!</h1>
        <p class="lead">Ini adalah halaman utama aplikasi Anda.</p>
        <hr class="my-4">
        <p>Gunakan menu di samping untuk menavigasi aplikasi.</p>
    </div>
@endsection