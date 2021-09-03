;(function ($) {
    $(document).ready(function (){
        $("#qbf-submit").on('click',function (){

            console.log(" Hello ");


            $.post(qbf_contact.ajaxurl,{
                action:'qbf_contact', //its given

                cn:$('#qbf_contact').val(), // nonce id

                number:$('#qbf_num').val(), // those are field ID

                input:$('#qbf_text_input_field').val(),

                textarea:$('#qbf_text_area').val(),

                select:$("#qbf_select :selected").val(),

                radio:$('#qbf_radio_group[type=radio]:checked').val(),

                date:$('#qbf_date').val(),

                checkbox:$('#qbf_checkbox[type=checkbox]:checked').val(),

                myfile:$('#qbf_myFile').val(), //do not remove fakepath
                // myfile:$('#qbf_myFile').val().substring(12), //work to remove fakepath
                
            }, function (data){
                console.log(data);
                if('Successful' == data){
                    alert("Thanks for your information");
                }else if('Duplicate' == data){
                    alert("Same data already inserted");
                }
            });
            return false;
        })
    });
})(jQuery);