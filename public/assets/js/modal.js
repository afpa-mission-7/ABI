/**
 * @author Doryan
 * @author Aymeric
 * @author Simon
 * 22/10/20
 * Permet d'ouvrir un modal client avec toutes les info de la BDD et du php
 */
$(".row_customer").click(function () {
    $('#modalCustomer input').removeClass(["is-valid", "is-invalid"]);
    $.post("/modalCustomer", { id: this.id }, function (data) {
        let customer = JSON.parse(data);
        for (property in customer) {
            $("#modalCustomer #" + property).val(customer[property]);
        }
        $('#modalCustomer input[name=sector_activity][value=' + customer.sector_activity + ']').prop("checked", true);
        $('#projects').empty();
        $('#collaborators').empty();
        $(customer.projects).each(function (key, project) {
            $('#projects').append('<li class="list-group-item d-flex justify-content-between align-items-center">' + project.name + '</li>');
            $(project.collaborators).each(function (key, collaborator) {
                $('#collaborators').append('<li class="list-group-item d-flex justify-content-between align-item-center">' + collaborator.firstname + " " + collaborator.lastname + '</li>');
            });
        });
    });
    $("#modalCustomer").modal("toggle");

})


/**
 * @author Simon 
 * @author Doryan 
 * @author Aymeric 
 * 26/10/20
 * Permet lors du submit de modifier les clients
 */
$("#form_customer").submit(function (e) {
    e.preventDefault();
    let inputs = $('#modalCustomer input:not([type = radio])');
    let customer = {};
    $(inputs).each(function (index, element) {
        let value = element.value;
        let key = element.id;
        customer[key] = value;
    })
    customer['sector_activity'] = $('#modalCustomer input[name=sector_activity]:checked').val();
    $.post("/addCustomer", customer, function (data) { //requete AJAX lors de /addCustomer
        let failed;
        let inputs = $('#modalCustomer input:not([type = radio])');
        inputs['sector_activity'] = $;
        console.log(inputs);
        if (!$.isEmptyObject(data)) {
            failed = JSON.parse(data);
            $(inputs).each(function (key, input) {
                if ($.inArray(input.id, failed) !== -1) {
                    $(input).addClass('is-invalid');
                } else {
                    $(input).addClass('is-valid');
                };
            });
        } else {
            $("#modalCustomer").modal("toggle");
        }
    });
})


/**
 * @author Simon 
 * 26/10/20
 * Permet de vidé le modal pour ajouter un client
 */
$("#addCustomer").click(function () {
    let inputs = $('#modalCustomer input:not([type = radio])');
    $(inputs).each(function (index, element) {
        $(element).val("");
    })
    $("#modalCustomer").modal("toggle");
})

/**
 * @author Simon 
 * @author Doryan
 * @author Aymeric
 * 26/10/20
 * Permet de Supprimer un client.
 */
$('.delete').click(function () {
    let id = $(this).siblings("#id").val();
    $.post("/deleteCustomer", { id: id }, function () {
        location.reload();
    });
    $("#modalCustomer").modal("toggle");

})