

jQuery('#qbfSearch').submit(function(){

            event.preventDefault();

            var form = jQuery('#qbfSearch').serialize();
            var formData = new FormData;
            formData.append('action','qbf_search');
            formData.append('qbf_search',form); 

            jQuery.ajax({
                url: qbf_search.ajaxurl,
                data: formData,
                processData:false,
                contentType:false,
                type: "post",
                success: function(res) {
                    console.log("success");
                    jQuery('#qbfSearch')[0].reset();
                    // alert(res);
                },
            });
            
});