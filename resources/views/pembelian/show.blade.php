@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data pembelian
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Nama pembeli</label>
                            <input type="text" class="form-control " name="nama_pembeli" value="{{ $pembelian->nama_pembeli }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal pembelian</label>
                            <input type="text" class="form-control " name="tanggal_pembelian" value="{{ $pembelian->tanggal_pembelian }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Barang</label>
                            <input type="text" class="form-control " name="nama_barang" value="{{ $pembelian->nama_barang }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">harga Satuan</label>
                            <input type="text" class="form-control " name="harga_satuan" value="{{ $pembelian->harga_satuan }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jumlah Barang</label>
                            <input type="text" class="form-control" name="jumlah_barang" value="{{ $pembelian->jumlah_barang }}"
                                readonly>

                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('pembelian.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection