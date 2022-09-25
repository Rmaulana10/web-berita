<link rel="shortcut icon" href={{ asset('admin/img/svg/logo.svg') }} type="image/x-icon">
<!-- Custom styles -->
<link rel="stylesheet" href={{ asset('admin/css/style.min.css') }}>
<link rel="stylesheet" href={{ asset('admin/css/style.css') }}>
@extends('Template.admin')

@section('konten')
    <div class="col-md-11 mt-5">
        <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                Tambah
            </button>
        </div>
        <div class="d-flex justify-content-center">
            <div class="card-body shadow mt-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nama Kategori</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>mdo</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- modal creat --}}
    <div class="modal" id="createModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Wilayah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Wilayah</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tasikmalaya">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Kode Wilayah</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="32.2">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
