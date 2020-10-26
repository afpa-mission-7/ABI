/**
 * @author Doryan
 * @author Aymeric
 * 22/10/20
 * Permet d'ouvrir un modal client avec toutes les info de la BDD et du php
 */

$(".row_customer").click(function(e) {
    let target = e.currentTarget;
    let id = target.id;
    $.post("/modalCustomer", {id:id}, function(data){
        let customer = JSON.parse(data);
        for(property in customer){
            $("#modalCustomer #" + property).val(customer[property]);
        }
    })
    $("#modalCustomer").modal("toggle");
})

$("#form_customer").submit(function(e){
    e.preventDefault();
    let inputs = $('#modalCustomer input:not([type = radio]:not(:checked))');
    let customer = {};
    $(inputs).each(function(index, element){
        let value = element.value;
        let key = element.id;
        customer[key] = value;
    })
    $.post("/addCustomer", customer, function() {
        let row = $('#' + customer.id);
        for(property in customer){
            $(row).find("." + property).text(customer[property]);
        }
    });
    $("#modalCustomer").modal("toggle");
})

$("#addCustomer").click(function(){
    let inputs = $('#modalCustomer input:not([type = radio])');
    $(inputs).each(function(index, element){
        $(element).val("");
    })
    $("#modalCustomer").modal("toggle");
})