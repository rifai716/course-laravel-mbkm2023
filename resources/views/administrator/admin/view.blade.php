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
                            <a href="{{ route('administrator.admin.create') }}" class="btn btn-white"><span class="mdi mdi-plus"></span> Tambah</a>
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
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Jabatan</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td class="align-middle">
                                            <div class="lh-1">
                                                <h5 class="mb-0"> <a href="#"
                                                        class="text-inherit">{{ $item->name }}</a>
                                                </h5>
                                            </div>
                                        </td>
                                        <td class="align-middle">{{ $item->email }}</td>
                                        <td class="align-middle"><span
                                                class="badge bg-secondary">{{ $item->admin?->position }}</span>
                                        </td>
                                        <td class="align-middle text-dark">
                                            <a href="{{ route('administrator.admin.edit', ['id' => $item->id]) }}" class="btn btn-sm btn-warning rounded-5" title="Edit">
                                                <span class="mdi mdi-circle-edit-outline"></span>
                                            </a>
                                            <button class="btn btn-sm btn-danger rounded-5" title="Delete">
                                                <span class="mdi mdi-delete-outline"></span>
                                            </button>
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
@endsection
