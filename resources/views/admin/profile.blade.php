@extends('admin.app')

@section('title', 'Profile')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Profile</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data Profile </h6>          
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <img class="img-profile rounded-circle"
                                src="{{ asset('img/undraw_profile.svg') }}" width="170px" height="170px">
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="namapengguna" class="form-label">Nama Pengguna</label>
                                <input type="text" class="form-control" id="namapengguna" value="{{ Auth::user()->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" value="{{ Auth::user()->email }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

