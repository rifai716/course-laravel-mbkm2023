@extends('administrator.theme')
@section('content')
    <div class="container-fluid mt-n22 px-6">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mb-2 mb-lg-0 text-white">
                            <h3 class="mb-0  text-white">
                                <span class="mdi mdi-chart-areaspline-variant"></span>
                                Statistik
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                <!-- card -->
                <div class="card ">
                    <!-- card body -->
                    <div class="card-body">
                        <!-- heading -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <h4 class="mb-0">Total Peminjaman</h4>
                            </div>
                            <div class="icon-shape icon-md bg-light-primary text-primary rounded-2">
                                <i class="bi bi-briefcase fs-4"></i>
                            </div>
                        </div>
                        <!-- project number -->
                        <div>
                            <h1 class="fw-bold">18</h1>
                            <p class="mb-0"><span class="text-dark me-2">2</span>Telah dikembalikan</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                <!-- card -->
                <div class="card ">
                    <!-- card body -->
                    <div class="card-body">
                        <!-- heading -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <h4 class="mb-0">Total Barang</h4>
                            </div>
                            <div class="icon-shape icon-md bg-light-primary text-primary rounded-2">
                                <i class="bi bi-list-task fs-4"></i>
                            </div>
                        </div>
                        <!-- project number -->
                        <div>
                            <h1 class="fw-bold">132</h1>
                            <p class="mb-0"><span class="text-dark me-2">28</span>Habis pakai</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                <!-- card -->
                <div class="card ">
                    <!-- card body -->
                    <div class="card-body">
                        <!-- heading -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <h4 class="mb-0">Admin (LAB)</h4>
                            </div>
                            <div class="icon-shape icon-md bg-light-primary text-primary rounded-2">
                                <i class="bi bi-people fs-4"></i>
                            </div>
                        </div>
                        <!-- project number -->
                        <div>
                            <h1 class="fw-bold">12</h1>
                            <p class="mb-0"><span class="text-dark me-2">1</span>Online</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                <!-- card -->
                <div class="card ">
                    <!-- card body -->
                    <div class="card-body">
                        <!-- heading -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <h4 class="mb-0">Aktifitas</h4>
                            </div>
                            <div class="icon-shape icon-md bg-light-primary text-primary rounded-2">
                                <i class="bi bi-bullseye fs-4"></i>
                            </div>
                        </div>
                        <!-- project number -->
                        <div>
                            <h1 class="fw-bold">76%</h1>
                            <p class="mb-0"><span class="text-success me-2">5%</span>Naik</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row  -->
        <div class="row mt-6">
            <div class="col-md-12 col-12">
                <!-- card  -->
                <div class="card">
                    <!-- card header  -->
                    <div class="card-header bg-white  py-4">
                        <h4 class="mb-0">Permohonan Peminjaman</h4>
                    </div>
                    <!-- table  -->
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Nama barang</th>
                                    <th>Waktu</th>
                                    <th>Jenis</th>
                                    <th>Mahasiswa</th>
                                    <th>Progress</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 0; $i < 10; $i++)
                                    <tr>
                                        <td class="align-middle">
                                            <div class="lh-1">
                                                <h5 class="mb-0"> <a href="#" class="text-inherit">Arduino UNO</a>
                                                </h5>
                                            </div>
                                        </td>
                                        <td class="align-middle">34 menit lalu</td>
                                        <td class="align-middle"><span class="badge bg-{{ $i%2 == 0 ? 'success' : 'danger' }}">{{ $i%2 == 0 ? 'Tidak Habis Pakai' : 'Habis Pakai' }}</span>
                                        </td>
                                        <td class="align-middle">
                                            <div class="lh-1">
                                                <h5 class="mb-0"> <a href="#" class="text-inherit">Ahmad Rifa'i</a>
                                                </h5>
                                            </div>
                                        </td>
                                        <td class="align-middle text-dark">
                                            Diterima
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                    <!-- card footer  -->
                    <div class="card-footer bg-white text-center">
                        <a href="#" class="link-primary">Lihat semua</a>

                    </div>
                </div>

            </div>
        </div>
        <!-- row  -->
        <div class="row my-6">
            <div class="col-xl-4 col-lg-12 col-md-12 col-12 mb-6 mb-xl-0">
                <!-- card  -->
                <div class="card h-100">
                    <!-- card body  -->
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h4 class="mb-0">Statistik</h4>
                            </div>
                            <!-- dropdown  -->
                            <div class="dropdown dropstart">
                                <a class="text-muted text-primary-hover" href="#" role="button" id="dropdownTask"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-xxs" data-feather="more-vertical"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownTask">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <!-- chart  -->
                        <div class="mb-8">
                            <div id="perfomanceChart"></div>
                        </div>
                        <!-- icon with content  -->
                        <div class="d-flex align-items-center justify-content-around">
                            <div class="text-center">
                                <i class="icon-sm text-success" data-feather="check-circle"></i>
                                <h1 class="mt-3  mb-1 fw-bold">76%</h1>
                                <p>Completed</p>
                            </div>
                            <div class="text-center">
                                <i class="icon-sm text-warning" data-feather="trending-up"></i>
                                <h1 class="mt-3  mb-1 fw-bold">32%</h1>
                                <p>In-Progress</p>
                            </div>
                            <div class="text-center">
                                <i class="icon-sm text-danger" data-feather="trending-down"></i>
                                <h1 class="mt-3  mb-1 fw-bold">13%</h1>
                                <p>Behind</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card  -->
            <div class="col-xl-8 col-lg-12 col-md-12 col-12">
                <div class="card h-100">
                    <!-- card header  -->
                    <div class="card-header bg-white py-4">
                        <h4 class="mb-0">Users</h4>
                    </div>
                    <!-- table  -->
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead class="table-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Aktifitas terakhir</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex align-items-center">
                                            <div class="lh-1">
                                                <h5 class=" mb-1">Anita Parmar</h5>
                                                <p class="mb-0">anita@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">Mahasiswa</td>
                                    <td class="align-middle">3 May, 2023</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
