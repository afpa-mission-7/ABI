$("#loginForm").submit(function(e) {
    e.preventDefault();
    console.log(e);
    let username = e.target[0].value;
    let password = e.target[1].value;
    $.post('/login', { username: username, password: password }, function(data) {
        if (data === 'true') {
            window.location.replace("/");
        } else if (data === 'false') {
            $("#connectFailed").show();
        }
    });
})