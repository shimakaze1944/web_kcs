@extends('layout/main')

@section('title', 'Add House')

@section('container',)

    <div class="container" style="margin-top: 20px;">
        <div class="row mt-5">
            <h1 class="mt-5">Tambah Baru Lagu</h1>
        </div>

        <div class="row mb-5">
            <div class="col">
                <form action="{{ route('lagu.store') }}" method = "post">
                    @csrf
                    <div class="form-group">
                        <label>Lagu:</label>
                        <input type="text" class="form-control @error('lagu') is-invalid @enderror" name="lagu">
                        @error('lagu')<div class="invalid-feedback">
                            {{ $message }}
                        </div>@enderror
                    </div>
                    
                    <div class="form-group">
                        <label>Tanggal Rilis</label>
                        <input type="date" class="form-control @error('tanggal_rilis') is-invalid @enderror" name="tanggal_rilis">
                        @error('tanggal_rilis')<div class="invalid-feedback">
                            {{ $message }}
                        </div>@enderror
                    </div>
                    <div class="form-group">
                        <label>Penyanyi:</label>
                        <select name="residential_area" class="custom-select">
                        @foreach($penyanyi as $residence)
                            <option value="{{ $residence->id }}">{{ $residence->nama . '(' . $residence->genre . ')' }}</option>
                        @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
