<link rel="shortcut icon" href={{ asset('admin/img/svg/logo.svg') }} type="image/x-icon">
<!-- Custom styles -->
<link rel="stylesheet" href={{ asset('admin/css/style.min.css') }}>
<link rel="stylesheet" href={{ asset('admin/css/style.css') }}>
@extends('Template.admin')

@section('konten')
    <div class="col-md-11 mt-5">
        <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal">
                Tambah
            </button>
        </div>
        <div class="d-flex justify-content-center">
            <div class="card-body shadow mt-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nama Wilayah</th>
                            <th scope="col">Kode Wilayah</th>
                            <th scope="col" colspan="2">
                                <center>Action</center>
                            </th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($wilayah as $w)
                            <tr>
                                <td>{{ $w['nama'] }}</td>
                                <td>{{ $w['kode'] }}</td>
                                <td class="text-center">
                                    <form action="wilayah/hapus/{{ $w['id'] }}" method="get">
                                        @csrf
                                        <button class="badge bg-danger border-0 text-white" onclick="return confirm('Are You Sure?')" > Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Create Modal -->
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel">Tambahkan Wilayah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="wilayah/tam">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Wilayah</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                placeholder="Nama Wilayah">
                        </div>
                        <div class="form-group">
                            <label for="kode">Kode Wilayah</label>
                            <input type="text" class="form-control" id="kode" name="kode"
                                placeholder="Isikan Kode wilayah">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    </form>
@endsection
