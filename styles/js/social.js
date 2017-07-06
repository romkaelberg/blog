$( document ).ready(function btn() {
    $(".lst").click(
        function(){
            sendAjaxForm1('test2', 'actios_form','modules/out_social.php');
            return false;
        }
    );
});
function sendAjaxForm1(test2, ajax_form, url) {
    jQuery.ajax({
        url:     url, //url страницы (action_ajax_form.php)
        type:     "POST", //метод отправки
        dataType: "html", //формат данных
        data: jQuery("#"+ajax_form).serialize(),  // Сеарилизуем объекt
        success: function(response1) { //Данные отправлены успешно
            resultat = jQuery.parseJSON(response1);
            //document.getElementById(modalka).innerHTML = result;
            var a;
            document.getElementById("test2").innerText = "dccd";

            for (i = 0;i<resultat.length;i++) {
                a = "<a class = 'item' href="+resultat[i].name+">"+resultat[i].name+"</a><p></p>";
                document.getElementById('test2').innerHTML += a;
            }
            ("</div>");
        },
    });
}