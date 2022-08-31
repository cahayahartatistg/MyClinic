@extends('layout.boostrap1');
@include('components/navbar');
@section('content');

    <div class="main-panel">
        <div class="content">
            <h2>Daftar Obat</h2>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="row">
                        <?php
                    foreach($obat as $key) :
                  ?>

                        <div class="col-3">
                            <div class="card">
                                <div class="card-body" style="background-color: rgb(107, 220, 255); padding: 10px">
                                    <h5 class="card-title"><?= $key['nama_obat'] ?></h5>
                                    <h6 class="card-title">Stok : <?= $key['stok_obat'] ?></h6>
                                    <h6 class="card-subtitle mb-2 text-muted">
                                        Rp.<?= number_format($key['harga'], 2, ',', '.') ?></h6>
                                    <a class="btn btn-primary pull-right"
                                        href="{{ route('tambah-keranjang', ['id_obat' => $key->id]) }}">troli</a>

                                </div>
                            </div>
                        </div>

                        <?php
                    endforeach;
                  ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
@stop
