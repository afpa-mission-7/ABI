/**
 * @author Doryan
 * @author Aymeric
 * 22/10/20
 * Permet d'ouvrir un modal client avec toutes les info de la BDD et du php
 */

$(".row_customer").click(function(e) {
    let id = e.currentTarget.id;
    $.post('/modalCustomer', { id: id }, function(data) {
        var customer = JSON.parse(data); // json.parse() = transforme du json en objet JS.
        for (const property in customer) {
            $('#form_customer #' + property).val(customer[property]); //customer[property] = je récupere les property de customer.
            //#form_customer #' + property = selectionne les input du formulaire ayant l'id de la variable property
        }
    })
    $('#modalCustomer').modal('toggle')
})


$("#form_customer").submit(function(e) {
    e.preventDefault();
    let target = e.target;
    let inputs = $(target).find('input:not([type=radio]:not(:checked))');
    let customer = {};
    $(inputs).each(function(index, element) {
        let value = element.value;
        let key = element.id;
        customer[key] = value;
    })
    $.post('/addCustomerForm', customer);
    console.log(customer);
})