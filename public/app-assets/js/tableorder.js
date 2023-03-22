$(document).ready(function(){
    
    $('.add-meal-btn').on('click',function(e){
        e.preventDefault();
        var name=$(this).data('name');
        var id=$(this).data('id');
        var price=$(this).data('price');
        $(this).removeClass('btn-success').addClass('disabled');
        // <a class="btn btn-danger waves-effect waves-float waves-light remove-meal-btn"data-id="${id}">
                //     <i data-feather='trash-2'></i>
                // </a>
        let html=
        `<tr>
            <td>
                ${name}
                <input type="hidden" value="${id}" name="meals[]">
            </td>
            <td>
                <input type="number" data-price="${price}" name="quantities[]" class="touchspin form-control meal-quantity" value="1" min="1" max="25">
            </td>
            <td class="meal-price">
                ${price}
            </td>
            <input type="hidden" value="${price}" name="prices[]">
            <td>
                <a class="btn btn-danger waves-effect waves-float waves-light remove-meal-btn" data-id="${id}">
                    <svg 
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"
                    >
                        <polyline points="3 6 5 6 21 6"></polyline>
                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                        </path>
                        <line x1="10" y1="11" x2="10" y2="17"></line>
                        <line x1="14" y1="11" x2="14" y2="17">
                        </line>
                    </svg>
                </a>
            </td>
        </tr>`;
        $('.order-list').append(html);
        
        //append=add;
        //to calculate
        calculate_total()
    })//end add item
    $('body').on('click','.disabled',function(e){
       e.preventDefault();
    })//disabled button
    $('body').on('click','.remove-meal-btn',function(e){
        e.preventDefault();
        var id=$(this).data('id');
        $(this).closest('tr').remove();
        $('#meal-'+id).removeClass('btn-danger disabled').addClass('btn-success');
        calculate_total();
    })//end delete
    function calculate_total() {
        var price=0;
        $('.order-list .meal-price').each(function (index) {
            price+=parseInt($(this).html());
        })
        $(".total-price").html(price+' '+'DH');

        if (price>0) {
            $("#add-order-btn").removeClass('disabled');
        }
        else
        {
            $("#add-order-btn").addClass('disabled');
        }
    }//end calculate total
    $('body').on('key change','.meal-quantity',function () {
        var quantity=parseInt($(this).val());
        var unitPrice=$(this).data('price');
        $(this).closest('tr').find('.meal-price').html(unitPrice*quantity);
        calculate_total();
    })//quantity*price
    
});