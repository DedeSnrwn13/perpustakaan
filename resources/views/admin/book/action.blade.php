<div class="d-flex justify-content-between">
    <a href="{{ route('admin.book.edit', $model) }}" class="btn btn-warning">Edit</a>
    <button href="{{ route('admin.book.destroy', $model) }}" id="buttonDelete" class="btn btn-danger">Hapus</button>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $('button#buttonDelete').on('click', function (e){
        e.preventDefault();

        var href = $(this).attr('href');

        Swal.fire({
            title: 'Apakah Anda yakin hapus data ini?',
            text: "Data yang sudah dihapus tidak bisa dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus saja!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('deleteForm').action = href;
                document.getElementById('deleteForm').submit();

                Swal.fire(
                    'Terhapus!',
                    'Data kamu berhasil di hapus.',
                    'success'
                )
            }
        });
    });
</script>
