@extends('admin.templates.default')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
@endpush

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tambah Data Buku</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.book.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="">Judul</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Masukan judul buku" value="{{ old('title') }}">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <textarea name="description" rows="3" class="form-control  @error('title') is-invalid @enderror" placeholder="Masukan deskripsi buku">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Penulis</label>
                            <select name="author_id" class="form-control select2 @error('author_id') is-invalid @enderror" multiple>
                                @foreach ($authors as $author)
                                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                                @endforeach
                            </select>
                            @error('author_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Sampul Buku</label>
                            <input type="file" name="cover" class="form-control @error('cover') is-invalid @enderror">
                            @error('cover')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Jumlah</label>
                            <input type="number" name="qty" class="form-control @error('qty') is-invalid @enderror" placeholder="Masukan Jumlah buku" value="{{ old('qty') }}">
                            @error('qty')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Tambah">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
@endpush
