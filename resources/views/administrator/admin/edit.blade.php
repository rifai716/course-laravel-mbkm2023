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
                                Form Edit Admin
                            </h3>
                        </div>
                        <div>
                            <a href="{{ route('administrator.admin') }}" class="btn btn-white"><span
                                    class="mdi mdi-arrow-left"></span> Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="offset-md-3 col-md-6">
                <div class="card">
                    <form action="{{ route('administrator.admin.edit.process', ['id' => $id]) }}" method="POST">
                        @csrf
                        <div class="card-body">
                           @include('administrator.admin.form')
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
