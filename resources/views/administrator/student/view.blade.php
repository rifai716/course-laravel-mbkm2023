@extends('administrator.theme')
@section('content')
<div class="container-fluid mt-n22 px-6">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="mb-2 mb-lg-0 text-white">
                        <h3 class="mb-0  text-white">
                            <span class="mdi mdi-account-outline"></span>
                            {{ $header ?? 'Data Admin' }}
                        </h3>
                    </div>
                    <div>
                        <a href="#" class="btn btn-white"><span class="mdi mdi-plus"></span> Tambah</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="table-responsive rounded-2">
                    <table class="table text-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Jurusan</th>
                                <th>Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 10; $i++)
                                <tr>
                                    <td class="align-middle">1403004</td>
                                    <td class="align-middle">
                                        <div class="lh-1">
                                            <h5 class="mb-0"> <a href="#" class="text-inherit">Ahmad Rifa'i</a>
                                            </h5>
                                        </div>
                                    </td>
                                    <td class="align-middle">ahmadrifai716@gmail.com</td>
                                    <td class="align-middle">Teknik Informatika</td>
                                    <td class="align-middle">D3 TI 2A</td>
                                    </td>
                                    <td class="align-middle text-dark">
                                        <button class="btn btn-sm btn-warning rounded-5" title="Edit">
                                            <span class="mdi mdi-circle-edit-outline"></span>
                                        </button>
                                        <button class="btn btn-sm btn-danger rounded-5" title="Delete">
                                            <span class="mdi mdi-delete-outline"></span>
                                        </button>
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection