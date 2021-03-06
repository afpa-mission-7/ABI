/**
 * @author Aymeric
 * Permet d'ouvrir un modal qui va chercher les infos d'un projet en Ajax.
 */
$("#listProject tbody tr").click(function () {
    $("input").attr("disabled", true);
    $.post("/modalProject", {id: this.id}, function (data) {
        let project = JSON.parse(data);
        for (property in project) {
            $("#modalProject #" + property).val(project[property]);
        }
        $("#customers").empty();
        $("#collaborators").empty();
        $(project.customers).each(function (key, customer) {
            $("#customers").prepend('<li class="list-group-item d-flex justify-content-between align-items-center">' + customer.company_name + '</li>');
        });
        $(project.collaborators).each(function (key, collaborator) {
            $("#collaborators").prepend('<li class="list-group-item d-flex justify-content-between align-items-center">' + collaborator.firstname + " " + collaborator.lastname + '</li>');
        });
    })

    $("#modalProject").modal("toggle");
})

/**
 * @author Aymeric
 * Permet de passer en mode édition pour pouvoir modifier les infos d'un projet
 */
$("#edit").click(function () {
    $("input").removeAttr('disabled');
})

/**
 * @author Aymeric
 * Permet de soumettre les formulaire pour ajouter ou modifier un projet dans la BDD
 */
$("#form_modal").submit(function (e) {
    e.preventDefault();
    let inputs = $('#modalProject input:not([type = radio])');
    let project = {};
    $(inputs).each(function (index, element) {
        let value = element.value;
        let key = element.id;
        project[key] = value;
    })
    $.post("/addProject", project, function (data) { //requete AJAX lors de /addCustomer
        let failed;
        let inputs = $('#modalProject input');
        if (!$.isEmptyObject(data)) {
            failed = JSON.parse(data);
            $(inputs).each(function (key, input) {
                if ($.inArray(input.id, failed) !== -1) {
                    $(input).removeClass('is-valid');
                    $(input).addClass('is-invalid');
                } else {
                    $(input).removeClass('is-invalid');
                    $(input).addClass('is-valid');
                }
                ;
            });
        } else {
            location.reload();
        }
    });
})

/**
 * @author Aymeric
 * Permet d'ouvrir un modal qui permet d'ajouter un nouveau projet
 */
$("#addProject").click(function () {
    let inputs = $('#modalProject input');
    $(inputs).each(function (index, element) {
        $(element).val("");
    })
    $("#customers").empty();
    $("#collaborators").empty();
    $("#edit").addClass("d-none");
    $("input").removeAttr('disabled');
    $("#modalProject").modal("toggle");
})

/**
 * @author Aymeric
 * Permet de faire apparaitre un select HTML qui permettra d'ajouter un nouveau client à un projet
 */
$("#addCustomer").click(function (e) {
    e.preventDefault();
    let select = $(".newCustomer").clone()[0];
    $(select).removeClass("d-none");
    $("#customers").append(select);
})

/**
 * @author Aymeric
 * Permet de faire apparaitre un select HTML qui permettra d'ajouter un nouveau client à un projet
 */
$("#addCollaborator").click(function (e) {
    e.preventDefault();
    let select = $(".newCollaborator").clone()[0];
    $(select).removeClass("d-none");
    $("#collaborators").append(select);
})

$(".delete").click(function (e) {
    e.preventDefault();
    let id = $(this).siblings("#id").val();
    $.post("/deleteProject", {id: id}, function () {
        location.reload();
    });
})