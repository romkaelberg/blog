$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
    $('select').material_select();
});
$(".button-collapse").on('click', function (e) {
        $(".button-collapse").sideNav({
            edge: 'left', // Choose the horizontal origin
            closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
            draggable: true
        });
    });
$("#pages_modal").on('click',function (e) {
    $('#modal1').modal('open');
});
$("#add_modal").on('click',function (e) {
    $('#modal1').modal('open');
});
// $("#load").on('click',function () {
//     $("#content").load("../directory.php");
//
// });
// var i=0;

// function test()
// {
//
//     i++;
//     timeR=setTimeout("test()", 100);
//
//
//     if(i>=52){return;}
//     if(i >= 51) {
//         document.getElementById('dir_status').innerHTML=" ";
//
//     }
// }
// test();