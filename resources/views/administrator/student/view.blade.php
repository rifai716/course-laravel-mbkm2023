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
                                Data Mahasiswa
                            </h3>
                        </div>
                        <div>
                            <a href="{{ route('administrator.student.create') }}" class="btn btn-white"><span
                                    class="mdi mdi-plus"></span> Tambah</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            @if (Session::has('message'))
                <div class="col-12">
                    <div class="alert alert-success">{{ Session::get('message') }}</div>
                </div>
            @endif
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
                                @foreach ($data as $item)
                                    <tr>
                                        <td class="align-middle">{{ $item->student?->nim }}</td>
                                        <td class="align-middle">
                                            <div class="lh-1">
                                                <h5 class="mb-0"> <a href="#"
                                                        class="text-inherit">{{ $item->name }}</a>
                                                </h5>
                                            </div>
                                        </td>
                                        <td class="align-middle">{{ $item->email }}</td>
                                        <td class="align-middle">{{ $item->student->department }}</td>
                                        <td class="align-middle">{{ $item->student->class }}</td>
                                        </td>
                                        <td class="align-middle text-dark">
                                            <a href="{{ route('administrator.student.edit', ['id' => $item->id]) }}"
                                                class="btn btn-sm btn-warning rounded-5" title="Edit">
                                                <span class="mdi mdi-circle-edit-outline"></span>
                                            </a>
                                            <button onclick="confirmDelete('{{ $item->id }}')" class="btn btn-sm btn-danger rounded-5" title="Delete">
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

@push('assets-footer')
    <script src="{{ asset('assets/libs/sweetalert2.js') }}"></script>
    <script>
        const confirmDelete = (id) => {
            Swal.fire({
                title: '<strong>Apakah anda yakin ?</strong>',
                icon: 'info',
                html: "Hapus data mahasiswa",
                showCloseButton: true,
                showCancelButton: true,
                focusConfirm: false,
                confirmButtonText: 'Ya, Hapus',
                cancelButtonText: 'Batal',
            }).then(result => {
                if (result.isConfirmed) {
                    let link = '{{ route('administrator.student.delete.process', ['id' => ':id']) }}'
                    link = link.replace(':id', id)
                    fetch(link, {
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            method: 'DELETE'
                        }).then(res => res.json())
                        .then(res => {
                            Swal.fire({
                                title: res.message,
                                icon: 'success',
                                confirmButtonText: 'Oke',
                            }).then(result => {
                                window.location.href = window.location.href
                            })
                        })
                        .catch(error => {
                            console.log('error', error)
                        })
                }
            })
        }
    </script>
@endpush