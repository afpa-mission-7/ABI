$("#listProject tbody tr").click(function () {
    $.post("/modalProject", {id: this.id}, function (data) {
        let project = JSON.parse(data);
        console.log(project);
        for (property in project) {
            $("#modalProject #" + property).val(project[property]);
        }
        $(project.customers).each(function (key, customer) {
            $("#customers").append('<li class="list-group-item d-flex justify-content-between align-items-center">' + customer.company_name + '<button class="btn btn-danger removeCustomer" id="customer-' + customer.id + '"><i class="fas fa-trash-alt"></i></button></li>');
        });
        $(project.collaborators).each(function (key, collaborator) {
            $("#collaborators").append('<li class="list-group-item d-flex justify-content-between align-items-center">' + collaborator.firstname + " " + collaborator.lastname + '<button class="btn btn-danger removeCollaborator" id="collaborator-' + collaborator.id + '"><i class="fas fa-trash-alt"></i></button></li>');
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

$("#form_modal").submit(function (e) {
    e.preventDefault();
})


