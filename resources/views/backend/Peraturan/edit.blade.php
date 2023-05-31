@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-1 m-1">
                <div class="card">
                    <div class="card-header">
                        Edit Peraturans
                        <a class="btn btn-primary float-end" href="{{ route('peraturans.index') }}" role="button">back
                            Peraturans</a>
                    </div>
                    <div class="card-body">
                        <form action="/peraturans/{{ $peraturan->id }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" id="exampleFormControlInput1"
                                    value="{{ old('nama', $peraturan->nama) }}">
                                @error('nama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
                                <textarea name="keterangan" id="keterangan" cols="30" rows="10">{!! html_entity_decode($peraturan->keterangan) !!}</textarea>
                                @error('keterangan')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        ClassicEditor
            .create(document.querySelector('#keterangan'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
