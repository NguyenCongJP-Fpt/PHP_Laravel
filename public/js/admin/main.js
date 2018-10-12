$(document).ready(function () {

    // img review
    function readURL(input){
        if (input.files && input.files[0]){
            var reader = new FileReader();
            reader.onload = function (e) {
                var img = e.target.result;
                $('#imgEdit').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $('.btn-edit').click(function () {
        var id = $(this).attr('id').replace('rowItem-', '');
        $.ajax({
            url: '/admin/bakery/edit/' + id,
            method: 'GET',
            data: $('meta[name="csrf-token"]').attr('content'),
            success: function (resp) {
                $('#formEdit input[name="nameEdit"]').val(resp.item.name);
                $('#formEdit input[name="priceEdit"]').val(resp.item.price);
                $('#formEdit input[name="descriptionEdit"]').val(resp.item.description);
                $('#formEdit input[name="noteEdit"]').val(resp.item.note);
                $('#formEdit textarea[name="contentEdit"]').val(resp.item.content);
                $('#imgEdit').attr('src', resp.item.images);

                var categoryId = resp.item.categoryId;

                $('#categoryIdEdit[name="categoryIdEdit"] option').each(function () {
                    if ($(this).val() == categoryId) {
                        $(this).attr('selected', 'selected');
                    }
                })

                $('#formEdit').attr('action', '/admin/bakery/update/' + id);

                // thay doi anh img review
                $('input[type="file"]').change(function () {
                    readURL(this);
                });
            },
            error: function () {
                alert('loi roi');
            }
        });
        $('#modalEdit').modal('show');
    });


    $('.btn-delete').click(function () {
        var id = $(this).parent().find('.btn-edit').attr('id').replace('rowItem-', '');
        $('#formDestroy').attr('action', '/admin/bakery/destroy/' + id);
        $('#modalDelete').modal();

        $('#accept').click(function () {
            $('#formDestroy').submit();
        });
    });
});