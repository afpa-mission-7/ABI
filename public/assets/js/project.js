$("#listProject tbody tr").click(function() {
    $("input").attr("disabled", true);
    $.post("/modalProject", { id: this.id }, function(data) {
        let project = JSON.parse(data);
        for (property in project) {
            $("#modalProject #" + property).val(project[property]);
        }
        $("#customers").empty();
        $("#collaborators").empty();
        $(project.customers).each(function(key, customer) {
            $("#customers").prepend('<li class="list-group-item d-flex justify-content-between align-items-center">' + customer.company_name + '</li>');
        });
        $(project.collaborators).each(function(key, collaborator) {
            $("#collaborators").prepend('<li class="list-group-item d-flex justify-content-between align-items-center">' + collaborator.firstname + " " + collaborator.lastname + '</li>');
        });
    })

    $("#modalProject").modal("toggle");
})

$("#edit").click(function() {
    $("input").removeAttr('disabled');
})

$("#form_modal").submit(function(e) {
    e.preventDefault();
    let inputs = $('#modalProject input');
    let project = {};
    $(inputs).each(function(index, element) {
        let value = element.value;
        let key = element.id;
        project[key] = value;
    })
    console.log(project)
    $.post("/addProject", project, function() {
        let row = $('#' + project.id);
        for (property in project) {
            $(row).find("." + property).text(project[property]);
        }
    });
    $("#modalCustomer").modal("toggle");
})

$("#addProject").click(function() {
    let inputs = $('#modalProject input');
    $(inputs).each(function(index, element) {
        $(element).val("");
    })
    $("#customers").empty();
    $("#collaborators").empty();
    $("#edit").addClass("d-none");
    $("input").removeAttr('disabled');
    $("#modalProject").modal("toggle");
})

$("#addCustomer").click(function() {
    let select = $(".newCustomer").clone()[0];
    $(select).removeClass("d-none");
    $("#customers").append(select);
})

$("#addCollaborator").click(function() {
    let select = $(".newCollaborator").clone()[0];
    $(select).removeClass("d-none");
    $("#collaborators").append(select);
})