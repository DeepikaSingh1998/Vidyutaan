function reg() {
    var x = document.getElementById("Registerid");
    x.style.visibility = "visible";
}

$(document).ready(function() {
    $('#sidebar_btn').click(function() {
        $('#sidemenu').toggleClass('visible');
    });
});