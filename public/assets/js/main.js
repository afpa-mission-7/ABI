$("#connect").click(function (e) {
    e.preventDefault();
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

$(document).ready(function(){
    $("#tableSearch").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#tableCustomer tbody tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
