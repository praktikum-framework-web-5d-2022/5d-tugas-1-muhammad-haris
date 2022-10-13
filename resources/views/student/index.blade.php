@extends('layout.master')
@section('title', 'Mahasiswa')
@section('container')



<div class="container mt-4 text-center p-4 bg-white">
    <h1 class="display-4">Daftar Nama Mahasiswa</h1>
    <div class="row">
        <div class="col-sm-12 col-md-8 m-auto">
            <ol class="list-group">
                @forelse ($students as $student)
                    <li class="list-group-item">{{ $student }}</li>
                @empty
                    <div class="alert alert-danger">
                        Data tidak ditemukan
                    </div>
                @endforelse    
            </ol>    
        </div>    
    </div>    
</div>

@endsection