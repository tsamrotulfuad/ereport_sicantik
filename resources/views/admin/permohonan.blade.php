@extends('admin.app')

@section('title', 'Permohonan')

@section('content')
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">List Data Permohonan</h6>
                <a href="{{ route('permohonan.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-plus fa-sm text-white-50"></i> Tambah data
                </a>                
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No. Permohonan</th>
                                <th>Nama Pemohon</th>
                                <th>Jenis Izin</th>
                                <th>Link Izin</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <!-- <tfoot>
                            <tr>
                                <th>No</th>
                                <th>No. Permohonan</th>
                                <th>Nama Pemohon</th>
                                <th>Jenis Izin</th>
                                <th>Link Izin</th>
                                <th>Opsi</th>
                            </tr>
                        </tfoot> -->
                        <tbody>
                            @foreach($permohonan as $p)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $p->no_permohonan }}</td>
                                <td>{{ $p->nama_pemohon }}</td>
                                <td>{{ $p->jenis_izin }}</td>
                                <td>{{ $p->link_izin }}</td>
                                <td>
                                <form action="{{ route('permohonan.destroy',$p->id) }}" method="POST">

                                    <a class="btn btn-info btn-sm" href="{{ route('permohonan.show',$p->id) }}">Show</a>

                                    <a class="btn btn-primary btn-sm" href="{{ route('permohonan.edit',$p->id) }}">Edit</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection