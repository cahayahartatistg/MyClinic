@extends('layout.boostrap1');
@include('components1/navbar');
@section('content');

    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">DATA KERANJANG</h4>
                                <a href="{{ url('tindakan/lanjuttindakan') }}" class="btn btn-warning float-left"> Tambah</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <tr>

                                                <th>No</th>
                                                <th>Nama Obat</th>
                                                <th>Qty</th>
                                                <th class="text-center">
                                                    Aksi
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no=1; @endphp

                                            @foreach ($keranjang as $data)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $data->obat->nama_obat }}</td>
                                                    <td>{{ $data->jumlah }}</td>
                                                    {{-- <td>{{ $data->total }}</td> --}}

                                                    {{-- <td class="d-flex justify-content-around">
                                                        <a class="btn btn-primary pull-right"
                                                            href="{{ route('keranjang.edit', $data->id) }}">Edit</a>
                                                        <form action="{{ route('keranjang.destroy',$data->id) }}"
                                                            method="post" onsubmit="return confirm('yakin hapus data?') ">
                                                            @csrf
                                                            @method('delete')

                                                            <button type="submit"
                                                                class="btn btn-danger pull-right mr-3">Hapus</button>
                                                        </form>
                                                    </td> --}}


                                                </tr>
                                            @endforeach;

                                    </table>

                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <a href="{{ route('tindakan.index') }}" class="btn btn-primary">Lanjutkan pembayaran</a>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="float-left">
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="https://creative-tim.com/presentation">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="https://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright float-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, made with <i class="material-icons">favorite</i> by
                    <a href="https://www.creative-tim.com" target="_blank">Cahaya Hartati Sitanggang</a>
                </div>
            </div>
        </footer>
    </div>

@stop
