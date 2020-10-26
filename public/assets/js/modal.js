/**
 * @author Doryan
 * @author Aymeric
 * @author Simon
 * 22/10/20
 * Permet d'ouvrir un modal client avec toutes les info de la BDD et du php
 */
<<<<<<< HEAD

$(".row_customer").click(function(e) {
    let target = e.currentTarget;
    let id = target.id;
    console.log(target, id);
    $.post("/modalCustomer", {id:id}, function(data){
=======
$(".row_customer").click(function() {
    $.post("/modalCustomer", { id: this.id }, function(data) {
>>>>>>> Doryan
        let customer = JSON.parse(data);
        for (property in customer) {
            $("#modalCustomer #" + property).val(customer[property]);
        }
    })
    if($('.delete').click(function(){
        $.post("/deleteCustomer", {id:id});
        $("#modalCustomer").modal("toggle");
    }));
    $("#modalCustomer").modal("toggle");

})


/**
 * @author Simon 
 * @author Doryan 
 * @author Aymeric 
 * 26/10/20
 * Permet lors du submit de modifier les clients
 */
$("#form_customer").submit(function(e) {
    e.preventDefault();
    let inputs = $('#modalCustomer input:not([type = radio]:not(:checked))');
    let customer = {};
    $(inputs).each(function(index, element) {
        let value = element.value;
        let key = element.id;
        customer[key] = value;
    })
    $.post("/addCustomer", customer, function() { //requete AJAX lors de /addCustomer
        let row = $('#' + customer.id); // Récupération du customer.id de la ligne
        for (property in customer) { // Pour les propriéters du client
            $(row).find("." + property).text(customer[property]); // récuperation de la ligne td En recherchant sa property et on y ajoute du texte avec la valeur customer[property]
        }
    });
    $("#modalCustomer").modal("toggle");
})


/**
 * @author Simon 
 * 26/10/20
 * Permet de vidé le modal pour ajouter un client
 */
$("#addCustomer").click(function() {
    let inputs = $('#modalCustomer input:not([type = radio])');
    $(inputs).each(function(index, element) {
        $(element).val("");
    })
    $("#modalCustomer").modal("toggle");
})

<<<<<<< HEAD
=======

/**
 * @author Simon 
 * @author Doryan
 * 26/10/20
 * Permet de Supprimer un client.
 */
$('.delete').click(function() {
    let id = $(this).siblings("#id").val();
    $.post("/deleteCustomer", { id: id }, function() {
        location.reload();
    });




    $("#modalCustomer").modal("toggle");

})
>>>>>>> Doryan
