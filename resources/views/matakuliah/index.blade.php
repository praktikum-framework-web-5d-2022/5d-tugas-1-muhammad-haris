@extends('layout.master')
@section('title', 'Mata Kuliah')
@section('container')



<div class="container mt-4 text-center p-4 bg-white">
    <h1 class="display-4">Daftar Mata Kuliah</h1>
    <div class="row">
        <div class="col-sm-12 col-md-8 m-auto">
            <ol class="list-group">
                @forelse ($matakuliahs as $matakuliah)
                    <li class="list-group-item">{{ $matakuliah }}</li>
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