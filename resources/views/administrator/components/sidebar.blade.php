<!-- Sidebar -->
<nav class="navbar-vertical navbar">
    <div class="nav-scroller">
        <!-- Brand logo -->
        <a class="navbar-brand text-white" href="{{ route('administrator.dashboard') }}">
            <b>SISLAB POLINDRA</b>
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <li class="nav-item">
                <a class="nav-link has-arrow  active " href="{{ route('administrator.dashboard') }}">
                    <i data-feather="home" class="nav-icon icon-xs me-2"></i> Dashboard
                </a>

            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <div class="navbar-heading">Master Data</div>
            </li>


            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                    data-bs-target="#navPages" aria-expanded="false" aria-controls="navPages">
                    <i data-feather="users" class="nav-icon icon-xs me-2">
                    </i> Pengguna
                </a>

                <div id="navPages" class="collapse " data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('administrator.admin') }}">
                                Admin
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link has-arrow" href="{{ route('administrator.student') }}">
                                Mahasiswa
                            </a>
                        </li>
                    </ul>
                </div>

            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('administrator.item.index') }}">
                    <i data-feather="box" class="nav-icon icon-xs me-2">
                    </i>
                    Barang
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('administrator.applicant') }}">
                    <i data-feather="book-open" class="nav-icon icon-xs me-2">
                    </i>
                    Peminjaman
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('administrator.return') }}">
                    <i data-feather="book" class="nav-icon icon-xs me-2">
                    </i>
                    Pengembalian
                </a>
            </li>
        </ul>
    </div>
</nav>
