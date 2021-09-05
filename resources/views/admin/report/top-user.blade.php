@extends('admin.templates.default')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Laporan User Teraktif</h3>
                </div>

                <div class="card-body">
                    <table id="tableAuthor" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Total Meminjam</th>
                                <th>Bergabung</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $page = 1;
                                if (request()->has('page')) {
                                    $page = request('page');
                                }

                                $no = (env('PAGINATION_ADMIN') * $page) - (env('PAGINATION_ADMIN') - 1); // 20 - 9 = 11
                            @endphp
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->borrow_count }}</td>
                                    <td>{{ $user->created_at->diffForHumans() }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

