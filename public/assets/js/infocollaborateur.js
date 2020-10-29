"use strict";

 /**
  * @returns id du collaborateur dans "input hidden" au moment de la selection du collaborateur 
  * @author Yann BOYER
  */
persons = document.getElementById('persons');

persons.onchange = function () {
    let collaborator_id = document.getElementById('collaborator_id');
    collaborator_id.value = persons.value;

    let username = document.getElementById('username');
    let phone = document.getElementById('phone');
    let email = document.getElementById('email');
    let status = document.getElementById('status');
    let qualification = document.getElementById('qualification');

    username.value = persons.value;

    console.log(username.value);
}


let xmlHttp = new XMLHttpRequest();
        xmlHttp.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('nameResult').innerHTML = this.responseText;
            }
        }
        xmlHttp.open("POST", "contactDB.php", true);
        xmlHttp.send();