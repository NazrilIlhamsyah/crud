@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Siswa
                    <a href="{{route('pembelian.create')}}" class ="btn btn-sm btn-primary" style="float : right">
                    Tambah Data</a>
                </div>

                <div class="card-body">
                <div class="table-responsive">
                <table class="table align-middle" id="dataTable">
                 <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pembeli</th>
                        <th>Tanggal Pembelian</th>
                        <th>Nama Barang</th>
                        <th>Harga Satuan</th>
                        <th>Jumlah barang</th>
                        <th>Total barang</th>
                        <th>Aksi</th>
                    </tr>
                 </thead>
                 <tbody>
                    @php $no = 1; @endphp
                    @foreach ($pembelian as $data)
                    @php $total = $data->harga_satuan * $data->jumlah_barang @endphp
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$data->nama_pembeli}}</td>
                        <td>{{date('d M Y', strtotime($data->tanggal_pembelian))}}</td>
                        <td>{{$data->nama_barang}}</td>
                        <td>{{$data->harga_satuan}}</td>
                        <td>{{$data->jumlah_barang}}</td>
                        <td>{{$total}}</td>
                        <td>
                            <form action="{{route('pembelian.destroy', $data->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <a href="{{route('pembelian.edit', $data->id)}}" class ="btn btn-secondary">
                                    Edit
                                </a>
                                <a href="{{route('pembelian.show', $data->id)}}" class ="btn btn-warning">
                                    Show
                                </a>
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">
                                    Delete
                                </button>
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
</div>
@endsection