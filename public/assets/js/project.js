$("#listProject tbody tr").click(function(){
    $.post("/modalProject", { id: this.id }, function(data) {
        let project = JSON.parse(data);
        for (property in project) {
            $("#modalCustomer #" + property).val(project[property]);
        }
    })
    $("#modalCustomer").modal("toggle");
})