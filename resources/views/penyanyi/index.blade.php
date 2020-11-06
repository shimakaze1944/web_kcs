@extends('layout/main')

@section('title', 'penyanyi')

@section('container',)

    <link rel="stylesheet" href="{{asset('css/style3/style.min.css')}}">

<div class="container py-5 mt-5">

    <div class="row" style="text-align: center; padding: 0;margin-bottom: 20px;">
        <div class="col">
            <h1>List Data Penyanyi</h1>
        </div>
    </div>

    @auth()
    <div class="row mb-3" style="margin: auto; width: 100%;" >
        <div class="col-md-2 offset-md-5">
            <a href="{{ route('penyanyi.create') }}" class="btn btn-info btn-block" role="button" aria-pressed="true">Tambah</a>
        </div>
    </div>
    @endauth

    <div class="row">
        <div class="mx-auto bg-white rounded shadow">

            <!-- Fixed header table-->
            <div class="table-responsive">
                <table class="table table-fixed">
                    <thead>
                    <tr>
                        <th scope="col" class="">Nama</th>
                        <th scope="col" class="">Genre</th>
                        <th scope="col" class="">Lagu</th>
                        <th scope="col" class="">Created</th>
                        <th scope="col" class="">Updated</th>
                        @auth()
                        <th scope="col" class="">Action</th>
                        @endauth
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($penyanyi as $residence)

                    <tr>
                        <th scope="row" class="">{{ $residence->nama }}</th>
                        <td class="">{{ $residence->genre }}</td>
                        
                        <td>

                            <select name="residential_area" class="custom-select">
                                @foreach($residence->lagus as $house)
                                    <option value="{{ $house->id }}">{{ $house->block }}</option>
                                @endforeach
                            </select>

                        </td>
                        <td class="">{{ $residence->created_at }}</td>
                        <td class="">{{ $residence->updated_at }}</td>
                        @auth()
                        <td>
                            <a href="{{ route('penyanyi.edit', $residence) }}" class="btn btn-primary" style="width: 100px;">Edit</a>
                            <form action="{{ route('penyanyi.destroy', $residence) }}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" style="width: 100px;">Delete</button>
                            </form>
                        </td>
                        @endauth
                    </tr>

                    @endforeach

                    </tbody>
                </table>
            </div><!-- End -->

        </div>
    </div>
</div>

    <script src="{{asset('js/jquery2.min.js')}}"></script>

@endsection
