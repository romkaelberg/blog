function show()
{
    $.ajax({
        url: "modules/out_social.php",
        cache: false,
        success: function(html){
            $(".list_networks").html(html);
        }
    });
}

$(document).ready(function(){
    show();
    setInterval('show()',5000);
});