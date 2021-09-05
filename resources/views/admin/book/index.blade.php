@extends('admin.templates.default')

@push('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Buku</h3>
                    <a href="{{ route('admin.book.create') }}" class="btn btn-primary ml-3">Tambah Buku</a>
                </div>

                <div class="card-body">
                    <table id="tableAuthor" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Jumlah Buku</th>
                                <th>Penulis</th>
                                <th>Sampul</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<form action="" method="POST" id="deleteForm" enctype="multipart/form-data">
    @csrf
    @method('DELETE')

    <input type="submit" value="Hapus" style="display: none;">
</form>
@endsection

@push('scripts')
    <!-- DataTables -->
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bs-notify.min.js') }}"></script>
    @include('admin.templates.partials.alerts')

    <script>
        $(function () {
            $('#tableAuthor').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.book.data') }}',
                columns: [
                    { data: 'DT_RowIndex', orderable: false, searchable: false },
                    { data: 'title' },
                    { data: 'description' },
                    { data: 'qty' },
                    { data: 'author' },
                    { data: 'cover' },
                    { data: 'action' }
                ]
            });
        });
    </script>
@endpush
