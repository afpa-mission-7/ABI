$("#connect").click(function () {
    $("#login").toggleClass("d-none");
})

$("body").click(function(e){
    if(e.target.id == "login")
        return;
    if($(e.target).closest('#login').length)
        return;
    if(e.target.id == "connect")
        return;
    $("#login").addClass("d-none");
})
