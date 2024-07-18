@extends('layout.app')
@section('title', 'Tambah Data Mahasiswa')

@section('content')
    <h1>Tambah Data Mahasiswa</h1>
    <x-form action="/students" buttonText="Tambah">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
    </x-form>
@endsection