@extends('layout.boostrap1');
@include('components1.sidebar');
@include('components1/navbar');
@section('content');

    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6"style="padding-top: 50px">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">TABEL PENJUALAN OBAT</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('keranjang.store') }}">
                                @csrf

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Nama Obat</label>
                                            <input type="text" class="form-control" name="nama_obat"
                                                value="{{ $obat->nama_obat }}" readonly>
                                            <input type="hidden" class="form-control" name="id_obat"
                                                value="{{ $obat->id }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Jumlah Beli</label>
                                            <input type="text" class="form-control" name="jumlah">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Harga </label>
                                            <input type="text" class="form-control" name="harga"
                                                value="{{ $obat->harga }}" readonly>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary pull-right" name="masuk">Jual</button>
                                <a href="{{ url('tindakan') }}" class="btn btn-danger pull-right mr-3">Kembali</a>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
