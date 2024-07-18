@extends('layout.app')
@section('title', 'Lihat Daftar Mahasiswa')

@section('content')
    <h1>Daftar Mahasiswa</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $errors }}</li>
            </ul>
        </div>
    @endif
    <x-table :headers="['ID', 'Nama', 'Email']">
        @foreach ($students as $student)
        <tr>
            <td>{{ $student['id'] }}</td>
            <td>{{ $student['name'] }}</td>
            <td>{{ $student['email'] }}</td>
        </tr>
        @endforeach
    </x-table>
@endsection