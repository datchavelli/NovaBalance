$(document).ready(function () {
    $("body").on("click", "#readMore", function (e) {
        e.preventDefault();
        $("#homeModal").modal("show");
    });

    $("body").on("click", ".close", function (e) {
        e.preventDefault();
        $(".modal").modal("hide");
    });

    $("body").on("click", "#usluge-query", function (e) {
        e.preventDefault();
        $("#uslugeModal").modal("show");
    });

    $("body").on("click", "#btnSubmitContact", function (e) {
        e.preventDefault();
        var formElement = $("#contact-form")[0];
        var formData = new FormData(formElement);
        $.ajax({
            url: "/NovaBalance/home/contact/",
            data: formData,
            processData: false, // Prevent jQuery from processing FormData
            contentType: false, // Prevent jQuery from setting contentType
            method: "post",
            success: function (data) {
                console.log(data);
                $("#contactModal").modal("show");
            },
            error: function (xhr, status, error) {
                console.error("AJAX Error:", status, error);
                console.error("Response Text:", xhr.responseText);
            },
        });
    });

    $("body").on("click", ".function-card", function (e) {
        switch ($(this).data("id")) {
            case "automatizovani":
                $("#homeModal .modal-body").html(
                    'Automatizacija u <b><span class="logo-style nova">Nova</span><span class="logo-style forma">Forma</span></b>  softveru znači da više ne morate provoditi sate ručno unoseći podatke ili proveravajući da li su sve stavke tačne. Naš sistem automatski prepoznaje i obrađuje dokumente, generiše izveštaje i omogućava vam da se posvetite važnijim aspektima poslovanja. Upoznajte se sa svim pametnim funkcijama koje vam olakšavaju rad.',
                );
                $("#homeModal").modal("show");
                break;
            case "docloop":
                $("#homeModal .modal-body").html(
                    'Od automatskog obračuna zarada do kreiranja Arhivske knjige i slanja elektronskih faktura putem DoCloop sistema – svaki alat u <b><span class="logo-style nova">Nova</span><span class="logo-style forma">Forma</span></b> softveru dizajniran je da vam uštedi vreme i smanji stres. Pogledajte kompletan spisak funkcionalnosti koje menjaju način na koji vodite računovodstvo.',
                );
                $("#homeModal").modal("show");
                break;
            case "autoucitavanje":
                $("#homeModal .modal-body").html("");
                break;
            default:
                $("#homeModal .modal-body").html("");
                break;
        }
    });
});
