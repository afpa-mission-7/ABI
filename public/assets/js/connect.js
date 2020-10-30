/**
 * Récupération de l'identifiant de l'utilisateur et du mots de passe lors du clic sur se connecter
 * @author Doryan
 * @author Aymeric
 * 23/10/20
 */
$("#loginForm").submit(function (e) {
  e.preventDefault();
  console.log(e);
  let username = e.target[0].value;
  let password = e.target[1].value;
  $.post("/login", { username: username, password: password }, function (data) {
    if (data === "true") {
      window.location.replace("/");
    } else if (data === "false") {
      $("#connectFailed").show();
    }
  });
});
