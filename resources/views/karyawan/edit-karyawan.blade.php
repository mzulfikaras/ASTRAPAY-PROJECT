@extends('master')

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{route('karyawan.update', $user->id)}}" method="POST">
                
                @csrf
                @method('PUT')


                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{old('name', $user->name)}}">
                </div>

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{old('email', $user->email)}}">
                </div>

                @error('email')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
                

                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="text" class="form-control" id="nip" name="nip" value="{{old('nip', $user->nip)}}">
                </div>

                @error('nip')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

                <div class="form-group">
                    <label for="departement">Departement</label>
                    <input type="text" class="form-control"  name="departement" id="departement" value="{{old('departement', $user->departement)}}">
                </div>

                @error('departement')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
                
                <div class="form-group"><br>
                    <label for="password">Password</label>
                    <input type="text" class="form-control"  name="password" id="password" value="{{old('password', $user->password)}}">
                </div>

                @error('password')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror


                <div class="form-group" style="margin-top:20px;">
                    <button type="submit" class="btn btn-md btn-primary">EDIT</button>
                    <a href="{{route('karyawan.index')}}" class="btn btn-secondary">BACK</a>
                </div>

            </form>
        </div>
    </div>
@endsection