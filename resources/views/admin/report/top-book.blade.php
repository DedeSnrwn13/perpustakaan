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
                    <h3 class="card-title">Laporan Buku Terlaris</h3>
                </div>

                <div class="card-body">
                    <table id="tableAuthor" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Jumlah Buku</th>
                                <th>Total Dipinjam</th>
                                <th>Penulis</th>
                                <th>Sampul</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr>
                                    <td>1</td>
                                    <td>{{ $book->title }}</td>
                                    <td>{{ $book->description }}</td>
                                    <td>{{ $book->qty }}</td>
                                    <td>{{ $book->borrowed_count }}</td>
                                    <td>{{ $book->author->name }}</td>
                                    <td>
                                        <img src="{{ $book->getCover() }}" alt="{{ $book->title }}" height="150" class="img-fluid">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $books->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
