@extends('admin.app')

@section('title', 'Detail Permohonan')

@section('content')
    <div class="container-fluid">
        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
                <div class="card shadow mb-4">

                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Detail data</h6>
                        
                    </div>

                     <!-- Card Body -->
                     <div class="card-body">
                        
                            <div class="mb-3">
                                <label for="no_permohonan" class="form-label">No. Permohonan</label>
                                <input type="text" class="form-control" name="no_permohonan" id="no_permohonan" value="{{ $permohonan->no_permohonan }}">
                            </div>
                            <div class="mb-3">
                                <label for="nama_pemohon" class="form-label">Nama Pemohon</label>
                                <input type="text" class="form-control" name="nama_pemohon" id="nama_pemohon" value="{{ $permohonan->nama_pemohon }}">
                            </div>
                            <div class="mb-3">
                                <label for="jenis_izin" class="form-label">Jenis Izin</label>
                                <input type="text" class="form-control" name="jenis_izin" id="jenis_izin" value="{{ $permohonan->jenis_izin }}">
                            </div>
                            <div class="mb-3">
                                <label for="link_izin" class="form-label">Link</label>
                                <input type="text" class="form-control" name="link_izin" id="link_izin" value="{{ $permohonan->link_izin }}">
                            </div>
                            <a class="btn btn-primary" href="{{ route('permohonan.index') }}">Kembali</a>
                        
                        </div>
                </div>
            </div>

    </div>
@endsection