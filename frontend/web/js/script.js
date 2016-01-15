var baseUrl = $('#baseUrl').val();

$('.add-to-cart, .buy-now').on('click', function () {
    
    var csrfToken = $('input[name="_csrf"]').val();
    var prod_id = $(this).data('prod');

    $.post(baseUrl + '/cart/add-to-cart', {_csrf: csrfToken, prod_id: prod_id})
    
    alert('product add to cart');
    return false;
})