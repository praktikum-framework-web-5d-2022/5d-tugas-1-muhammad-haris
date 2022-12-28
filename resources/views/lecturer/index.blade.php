@extends('layout.master')
@section('title', 'Dosen')
@section('container')    
    
    
    <div class="container mt-4 text-center p-4 bg-white">
        <h1 class="display-4">Daftar Nama Dosen</h1>
        <div class="row">
            <div class="col-sm-12 col-md-8 m-auto">
                <ol class="list-group">
                    @forelse ($lecturers as $lecture)
                        <li class="list-group-item">{{ $lecture }}</li>
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
</body>
</html>