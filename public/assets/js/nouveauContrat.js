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


let hiring_reason = document.getElementById('hiring_reason');
console.log(hiring_reason.value);
hiring_reason.addEventListener("click", function () {
    let regex = /[&~"#_@¤£*-+<>$€]/gi
    hiring_reason.value =  hiring_reason.replace(regex, '');
    console.log(hiring_reason.value);
});
