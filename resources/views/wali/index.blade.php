@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Wali
                    <a href="{{ route('wali.create') }}" class="btn btn-sm btn-outline-primary" style="float: right">
                Tambah Data
            </a>
                </div>
                <div class="card-body">
                    <div class="tale-responsive">
                        <table class="table" id="dataTable">
                            <thead>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Foto</th>
                                <th>Nama Siswa</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($wali as $data)
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>
                                    <img src="{{ $data->image() }}" style="width: 100px; height:100px;" alt="">
                                </td>
                                <td>{{$data->siswa->nama}}</td>
                                <td>
                                    <form action="{{route('wali.destroy', $data->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('wali.edit', $data->id)}}" class ="btn btn-secondary">
                                            Edit
                                        </a>
                                        <a href="{{route('wali.show', $data->id)}}" class ="btn btn-warning">
                                            Show
                                        </a>
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection