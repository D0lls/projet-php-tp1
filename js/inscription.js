$(function() {
    var reg = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');
    $("#inscription").submit(function(e) {
        // récupérations des différents champs.
        var firstName = document.getElementById("nom");
        var lastName = document.getElementById("prenom");
        var mail = document.getElementById("email");
        var firstPass = document.getElementById("password");
        var scondPass = document.getElementById("vpassword");
        var alert = document.getElementById("alert");


        if (firstName.value == "" || lastName.value == "" || mail.value == "" || firstPass.value == "" || scondPass.value == "") {
            console.log("ici");
            // les champs ne sont pas tous renseigné.
            e.preventDefault();
            alert.style.display = "block";
            alert.innerHTML = "<center>Veuillez renseigner les champs ci-dessous.</center>"

            // changement bordure des inputs.

            firstName.style.border = "red 1px solid";
            lastName.style.border = "red 1px solid";
            mail.style.border = "red 1px solid";
            firstPass.style.border = "red 1px solid";
            scondPass.style.border = "red 1px solid";


        } else if (reg.test(mail.value)) {
            // l'adresse mail est au bon format.
            if (firstPass.value == scondPass.value) {
                
                return true;
            } else {
                e.preventDefault();
                alert.style.display = "block";
                alert.innerHTML = "<center>Mots de passes différents.</center>"

                // changement bordure des inputs.

                firstPass.style.border = "red 1px solid";
                scondPass.style.border = "red 1px solid";
            }


        } else {
            e.preventDefault();
            alert.style.display = "block";
            alert.innerHTML = "<center>Adresse mail au mauvais format.</center>"

            // changement bordure des inputs.

            mail.style.border = "red 1px solid";
        }



    });

    $("input").click(function() {
        $("#alert").fadeOut();
        $(this).css('border', '1px solid #ccc');
    });
});