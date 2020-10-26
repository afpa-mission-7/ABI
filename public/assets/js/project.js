$("#listProject tbody tr").click(function () {
    $.post("/modalProject", {id: this.id}, function (data) {
        let project = JSON.parse(data);
        console.log(project);
        for (property in project) {
                $("#modalProject #" + property).val(project[property]);
            }
    })
    $("#modalProject").modal("toggle");
})

$("#edit").click(function(){
    $("input").removeAttr('disabled');
})

$("#form_modal").submit(function(e){
    e.preventDefault();

})


