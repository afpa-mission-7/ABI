'use strict';

 /**
  * @returns id du collaborateur dans "input hidden" du formulaire au moment de la selection du collaborateur 
  * @author Yann BOYER
  */
let persons = document.getElementById('persons');
persons.onchange = function () {
    let collaborator_id = document.getElementById('collaborator_id');
    collaborator_id.value = persons.value;
}

/*
function getIdCollaborator(waitId){
    if (waitId == "") {
        document.getElementById('collaborator_id');
        return;
    } else {
        let xmlHttp = new XMLHttpRequest();
        xmlHttp.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('collaborator_id').value = this.responseText;
            }
        };
        xmlHttp.open("POST", "postCollaboratorId.php", true);
        xmlHttp.send();
    }
}
*/
// CREER PHP POUR RECUP ID