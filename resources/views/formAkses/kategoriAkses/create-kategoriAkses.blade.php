@extends('master')

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{route('kategori.store')}}" method="post">
                @csrf

                <div class="form-group">
                    <label for="pic">Kategori Akses</label>
                    <input type="text" class="form-control @error('kategori_akses') is-invalid @enderror" id="kategori_akses" name="kategori_akses" value="{{old('kategori_akses')}}">
                    
                    @error('kategori_akses')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Upload</button>
                <a href="{{route('kategori.index')}}" class="btn btn-danger">BACK</a>
            </form>
        </div>
    </div>
@endsection