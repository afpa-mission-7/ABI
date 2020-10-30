/**
 * Affichage du volet de connexion au clic sur le bouton Connexion
 * @author Aymeric
 * 23/10/20
 */
$("#connect").click(function (e) {
  e.preventDefault();
  $("#login").toggleClass("d-none");
});

$("body").click(function (e) {
  if (e.target.id == "login") return;
  if ($(e.target).closest("#login").length) return;
  if (e.target.id == "connect") return;
  $("#login").addClass("d-none");
});

/**
 * Fonction Recherche
 * @author Simon
 * 21/10/20
 */
$(document).ready(function () {
  $("#tableSearch").on("keyup", function () {
    var value = $(this).val().toLowerCase();
    $("#tableCustomer tbody tr").filter(function () {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    });
  });
});
