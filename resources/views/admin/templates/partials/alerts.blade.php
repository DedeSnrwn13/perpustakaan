<script>
    @if (session('success'))
        $.notify({
            // options
            message: '{{ session('success') }}'
        },{
            // settings
            type: 'success',
            placement: {
                from: "top",
                align: "right"
            },
            offset: 70,
            spacing: 5,
            z_index: 1031,
            timer: 1000,
            animate: {
                enter: 'animated fadeInDown',
                exit: 'animated fadeOutUp'
            },
        });
    @elseif (session('info'))
        $.notify({
            // options
            message: '{{ session('info') }}'
        },{
            // settings
            type: 'info',
            placement: {
                from: "top",
                align: "right"
            },
            offset: 70,
            spacing: 5,
            z_index: 1031,
            timer: 1000,
            animate: {
                enter: 'animated fadeInDown',
                exit: 'animated fadeOutUp'
            },
        });
    @elseif (session('danger'))
        $.notify({
            // options
            message: '{{ session('danger') }}'
        },{
            // settings
            type: 'danger',
            placement: {
                from: "top",
                align: "right"
            },
            offset: 70,
            spacing: 5,
            z_index: 1031,
            timer: 1000,
            animate: {
                enter: 'animated fadeInDown',
                exit: 'animated fadeOutUp'
            },
        });
    @endif
</script>
