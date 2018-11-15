$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
})

$(document).ready(function(){
    $(".dropdown").hover(function(){
        $(".hover").css("display", "block");
        $(".hover").css("transition", ".3s");
    })

    $(".dropdown").mouseleave(function(){
        $(".hover").css("display", "none");
        $(".hover").css("transition", ".3s");
    });

    $("#menu-icon-phone").click(function() {
        $("#sidebar").css("width", "60%");
    })

    $("#sidebar").mouseleave(function() {
        $(this).css("width", "0");
    })
});