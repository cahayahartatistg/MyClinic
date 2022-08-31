<div class="sidebar" data-color="orange" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
            ADMIN MYCLINIC
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item active  ">
                <a class="nav-link" href="{{ url('tampilan') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Menu</p>
                </a>
            </li>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ url('wilayah') }}">
                    <i class="material-icons">location_ons</i>
                    <p>Wilayah</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ url('pegawai') }}">
                    <i class="material-icons">person</i>
                    <p>Pegawai</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ url('datapasien') }}">
                    <i class="material-icons">group</i>
                    <p>Pasien</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ url('obat') }}">
                    <i class="material-icons">healing</i>
                    <p>Obat</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ url('datatindakan') }}">
                    <i class="material-icons">add_reaction</i>
                    <p>Tindakan</p>
                </a>

            <li class="nav-item ">
                <a class="nav-link" href="{{ url('datatransaksi') }}">
                    <i class="material-icons">point_of_sale</i>
                    <p>Transaksi</p>
                </a>
            </li>
            {{-- <li class="sidebar-item active">
                <a class="btn btn-danger pull-right mr-3" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                    onsubmit="return confirm('Anda yakin ingin keluar?')" class="d-none">
                    @csrf
                </form>
            </li> --}}
        </ul>
    </div>
</div>
