$("body").on('change', '#category_id', function () {
    let categoryId = $(this).val();
    if (categoryId !== '') {
        $.ajax({
            url: getSubcategoriesByCategoaryIdUrl,
            method: 'GET',
            dataType: 'json',
            data: {
                category_id: categoryId
            },
            success: function (res) {
                console.log(res);
                $("#subcategory_id option").remove();
                $('#subcategory_id').append($('<option>',{
                    value: '',
                    text: 'Choose',
                }));
                $.each( res, function( key, value ) {
                        $('#subcategory_id').append($('<option>',{
                        value: value.id,
                        text: (value.name ? value.name : ''),
                    }));
                });
            }
        });
    } else {
        $("#subcategory_id option").remove();
        $('#subcategory_id').append($('<option>',{
            value: '',
            text: 'Choose',
        }));
    }
});
