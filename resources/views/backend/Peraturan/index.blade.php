@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-1 me-1 w-full">
                <div class="card">
                    <div class="card-header">
                        Data Peraturans
                        <a class="btn btn-primary btn-sm float-end" href="{{ route('peraturans.create') }}"
                            role="button">Tambah
                            Peraturans</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Peraturan</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($peraturans as $peraturan)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $peraturan->nama }}</td>
                                        <td>{!! html_entity_decode($peraturan->keterangan) !!}</td>
                                        <td>
                                            <a class="btn btn-warning btn-sm m-2"
                                                href="/peraturans/{{ $peraturan->id }}/edit">Edit</a>
                                            <form action="/peraturans/{{ $peraturan->id }}" method="POST" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger btn-sm border-0"
                                                    onclick="return confirm('Are You Sure?')">Delete <span
                                                        data-feather="x-circle"></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
