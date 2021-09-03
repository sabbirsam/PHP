jQuery(document).ready(function(){
    jQuery('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
        localStorage.setItem('activeTab', jQuery(e.target).attr('href'));
    });
    var activeTab = localStorage.getItem('activeTab');
    if(activeTab){
        jQuery('#myTab a[href="' + activeTab + '"]').tab('show');
    }
});


// URL Copy JQUERY
/*
<!--url copy url-->
<input id="btn" type="button" value="Copy Link" />*/

/*jQuery(document).ready(function(){
    var jQuerytemp = jQuery("<input>");
    var jQueryurl = jQuery(location).attr('href');
    jQuery('#btn').click(function() {
        jQuery("body").append(jQuerytemp);
        jQuerytemp.val(jQueryurl).select();
        document.execCommand("copy");
        jQuerytemp.remove();
        jQuery("p").text("URL copied!");
    });
});*/

// End

// Copy shortcode on click

/*<p id="p1"> inside ja thakbe copy</p>
<button onClick="copyToClipboard('#p1')">Copy</button>*/

/*
function copyToClipboard(element) {
    var jQuerytemp = jQuery("<input>");
    jQuery("body").append(jQuerytemp);
    jQuerytemp.val(jQuery(element).text()).select();
    document.execCommand("copy");
    jQuerytemp.remove();
}*/
