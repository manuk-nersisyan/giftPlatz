<script>
    $(function () {
        @if(Session::has('message'))
        Swal.fire({
            icon: 'success',
            title: '{{ session::get('message') }}',
            showConfirmButton: true,
        })
        @elseif(Session::has('error'))
        Swal.fire({
            icon: 'error',
            title: '{{ session::get('error') }}',
            showConfirmButton: true,
        })
        @endif
    });
    $('body').on('click', '.btn-danger, .edit_journal', function (e) {
        let title = 'Are you sure?';
        let confirmButtonText = 'Yes, delete it!';
        e.preventDefault();
        let form = $(this).parents('form');
        Swal.fire({
            title: title,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: confirmButtonText
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        })
    });
</script>
