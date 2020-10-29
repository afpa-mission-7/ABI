console.log(location.pathname);
let uri = location.pathname;
if(uri === '/gestionclients' || uri === '/gestionprojets'){
    $('head').append('<script src="assets/js/project.js" defer></script>');
    $('head').append('<script src="assets/js/alertJs.js" defer></script>');
    $('head').append('<script src="assets/js/modal.js" defer></script>');
} else if (uri === '/gestioncollaborateurs' || uri === '/nouveaucollaborateur' || uri === '/nouveaucontrat' || uri === '/infocollaborateur') {
    $('head').append('<script src="assets/js/alertJs.js" defer></script>');
    $('head').append('<script src="assets/js/nouveauContrat.js" defer></script>');
    $('head').append('<script src="assets/js/infocollaborateur.js" defer></script>');
}