$(".delete-product-image").on('click', function () {
    let deleteProductImageContainer = $(this).closest('.delete-product-image-container')
    if ($(this).data('id')) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: deleteProductImageUrl,
            method: 'POST',
            dataType: 'json',
            data: {
                id: $(this).data('id'),
                product_id: $(this).data('product_id')
            },
            success: function (res) {
                deleteProductImageContainer.remove();
            }
        });
    }
});
