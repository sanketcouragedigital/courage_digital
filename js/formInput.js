$(function(){
    $("#submit").click(function(event){
        var fname = $("#fname").val();
        var femail = $("#femail").val();
        var fenquiry = $("#fenquiry").val();
        var fcountry = $("#fcountry").val();
        var fphone = $("#fphone").val();
        var fsendmail = $("#fsendmail").val();
        var method = "send";
        var format = "json";
        $.post( "contactapi.php", { fname: fname, femail: femail, fenquiry: fenquiry, fcountry: fcountry, fphone: fphone, fsendmail: fsendmail, method: method, format: format })
            .done(function(data) {

                    window.location.href="thank_you.php";

            });
        event.preventDefault();
    });
});
