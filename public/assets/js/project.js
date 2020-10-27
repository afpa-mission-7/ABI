$("#listProject tbody tr").click(function () {
    $.post("/modalProject", {id: this.id}, function (data) {
        let project = JSON.parse(data);
        for (property in project) {
            $("#modalProject #" + property).val(project[property]);
        }
        $(project.customers).each(function (key, customer) {
            $("#customers").append('<li class="list-group-item d-flex justify-content-between align-items-center">' + customer.company_name + '</li>');
        });
        $(project.collaborators).each(function (key, collaborator) {
            $("#collaborators").append('<li class="list-group-item d-flex justify-content-between align-items-center">' + collaborator.firstname + " " + collaborator.lastname + '</li>');
        });
        $(".removeCollaborator").click(function(){
            let id = this.id.split("-")[1];
            $.post("/unjoin",{Project: project.id,Collaborator: id})
        })
    })

    $("#modalProject").modal("toggle");
})

$("#edit").click(function () {
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
    $.post("/addProject", project, function() {
        let row = $('#' + project.id);
        for (property in project) {
            $(row).find("." + property).text(project[property]);
        }
    });
    $("#modalCustomer").modal("toggle");
})


