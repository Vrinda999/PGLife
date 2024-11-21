window.addEventListener("load", function () {
    var signup_form = document.getElementById("signup_form");
    signup_form.addEventListener("submit", function (event) {
        var XHR = XMLHttpRequest();
        var form_data = new FormData(signup_form);

        // On Success
        XHR.addEventListener("load", signup_success);

        // On Error
        XHR.addEventListener("error", on_error);

        // Set up Request
        XHR.open("POST", "api/signup_submit.php");

        // Form data is Sent w Request
        XHR.send(form_data);

        document.getElementById("loading").style.display = 'block';
        event.preventDefault();
    });

    var login_form = document.getElementById("login_form");
    login_form.addEventListener("submit", function (event) {
        var XHR = XMLHttpRequest();
        var form_data = new FormData(login_form);

        // On Success
        XHR.addEventListener("load", login_success);

        // On Error
        XHR.addEventListener("error", on_error);

        // Set up Request
        XHR.open("POST", "api/login_submit.php");

        // Form data is Sent w Request
        XHR.send(form_data);

        document.getElementById("loading").style.display = 'block';
        event.preventDefault();
    });
});

var signup_success = function (event) {
    document.getElementById("loading").style.display = 'none';

    var response = JSON.parse(event.target.responseText);
    if (response.success) {
        alert(response.message);
        window.location.href = "index.php";
    } else {
        alert(response.message);
    }
};

var login_success = function (event) {
    document.getElementById("loading").style.display = 'none';

    var response = JSON.parse(event.target.responseText);
    if (response.success) {
        location.reload();
    } else {
        alert(response.message);
    }
};

var on_error = function (event) {
    document.getElementById("loading").style.display = 'none';

    alert("Oops! Something Went Wrong!");
};