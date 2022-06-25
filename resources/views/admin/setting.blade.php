@extends('admin.app')

@section('title', 'Settings')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Settings</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Ubah Password </h6>          
            </div>
            <div class="card-body">
                <div class="container">
                    <form action="{{ route('setting.update.password') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            
                            <div class="col">
                                <div class="mb-3">
                                    <label for="current_password" class="form-label">Password Saat ini</label>
                                    <input type="password" name="current_password" class="form-control @error('current_password') is-invalid @enderror" id="current_password" required>
                                        @error('current_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password Baru</label>
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

