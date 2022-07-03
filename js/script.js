
/*--------------------------------------------------------------------------------------------------------------------------
                                                    SCRIPT - HEADER
--------------------------------------------------------------------------------------------------------------------------*/





function jquery(){
    function updateSuggetion(e){
                let serachVal = e.val();

                if(serachVal != ''){
                    $.ajax({
                        url: "sho_search_suggetion_list.php",
                        type: "POST",
                        data: { v:serachVal },
                        success: function(data){
                        }
                    });
                }
    }

    $(document).ready(function(){
        $('#search_box').keyup(function(){
            if(!$(this).val() == ''){
                $('.clear-sr').show();
            }else{
                $('.clear-sr').hide();
            }
            updateSuggetion($(this));
        });

        $('.clear-sr').click(function(){
            $('#search_box').val('');
            $('#search_box').focus();
            $('#autocomplete-box').hide();
            $(this).hide();
        });
        
        $('#search_box').focus(function(){
            // $('#autocomplete-box').show();
            $('#autocomplete-box').addClass('autocomplete-box-active');
        });
        $('#search_box').blur(function(){
            // $('#autocomplete-box').hide();
            $('#autocomplete-box').removeClass('autocomplete-box-active');
        });

        $('#autocomplete-list i').click(function(){
            $('#search_box').val($(this).parent().text());
            $('.clear-sr').show();
        });
    });
}



/*--------------------------------------------------------------------------------------------------------------------------
                                                    SCRIPT - CART PAGE
--------------------------------------------------------------------------------------------------------------------------*/





/*--------------------------------------------------------------------------------------------------------------------------
                                                    SCRIPT - PRODUCTS PAGE
--------------------------------------------------------------------------------------------------------------------------*/




function qty_box_open(qty_box_id){

    $("#"+qty_box_id).slideToggle(60);
}

function close_alert(clos_id){

    $("#"+clos_id).parent().hide();
}

function rate_box_op(rtb){

    $("#"+rtb).slideToggle(40);
}

function star_colors(s_id,s_no){
    let list = document.querySelectorAll(".star"+s_id);
    // console.log(list,s_no);
    
    for(let i=0; i<list.length; i++){
        let s_el = list[i];
        s_el.style.color = "silver";
        // $(s_el).removeClass('s_col');
        // console.log(s_el);
    }
    for(let i=0; i<s_no; i++){
        let s_el = list[i];
        s_el.style.color = "blue";
        // $(s_el).addClass('s_col');
        // console.log(s_el);
    }

    document.getElementById('rate_val'+s_id).value = s_no;
    document.getElementById('rate_val_sub'+s_id).classList.add('allow_rating');
    document.getElementById('rate_val_sub'+s_id).style.opacity = "1";
}




/*--------------------------------------------------------------------------------------------------------------------------
                                                    SCRIPT - CART PAGE
--------------------------------------------------------------------------------------------------------------------------*/





// function total_price(p_pr, p_qt, cart_p_id){
    
//     var total_qt_value = p_pr*p_qt;
//     // console.log(cart_p_id);

//     document.getElementById('p_quantity'+cart_p_id).value = total_qt_value;

//     $.ajax({
//         url: "update_cart_quantity.php",
//         type: "POST",
//         data: {p_i:cart_p_id, p_q:p_qt, p_q_t:total_qt_value},
//         success: function(data){
//             if(data==1){
//                 console.log('updated');
//             }
//         }
//     });
// }


