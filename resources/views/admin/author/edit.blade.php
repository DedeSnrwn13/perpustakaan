@extends('admin.templates.default')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Data Penulis</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.author.update', $author) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="name" class="form-control @error is-invalid @enderror" placeholder="Masukan nama penulis" value="{{ old('name') ?? $author->name }}">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
