@extends('layout/main')

@section('title', 'Add Residence')

@section('container',)

    <div class="container" style="margin-top: 20px;">
        <div class="row mt-5">
            <h1 class="mt-5">Tambah Baru Penyanyi</h1>
        </div>

        <div class="row mb-5">
            <div class="col">
                <form action="{{ route('penyanyi.store') }}" method = "post">
                    @csrf
                    <div class="form-group">
                        <label>Nama:</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama">
                        @error('nama')<div class="invalid-feedback">
                            {{ $message }}
                        </div>@enderror
                    </div>
                    <div class="form-group">
                        <label>Genre:</label>
                        <input type="genre" class="form-control @error('genre') is-invalid @enderror" name="genre">
                        @error('genre')<div class="invalid-feedback">
                            {{ $message }}
                        </div>@enderror
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
