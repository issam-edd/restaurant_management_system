

$(document).ready(function(){
    function calculate_total() {
        var price=0;
        $('.order-list .meal-price').each(function (index) {
            price+=parseInt($(this).html());
        })
        $(".total-price").html(price+' '+'DH');
    }
    $('body').on('key change','.meal-quantity',function () {
        var quantity=parseInt($(this).val());
        var unitPrice=$(this).data('price');
        $(this).closest('tr').find('.meal-price').html(unitPrice*quantity+' '+'DH');
        calculate_total();
    })//quantity*price
    
//     $('.remove-meal-btn').click(function(){
//         $(this).closest('tr').remove();
//         calculate_total();
//   });
});