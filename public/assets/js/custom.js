$(document).ready(function(){
    $("body").on("click","#readMore", function(e){
        e.preventDefault();
        $("#homeModal").modal("show");
    });

    $("body").on("click", ".close", function(e){
        e.preventDefault();
        $(".modal").modal("hide");
    });

    $("body").on("click","#btnSubmitContact",function(e){
        e.preventDefault();
        var formElement = $("#contact-form")[0]; 
        var formData = new FormData(formElement);
        $.ajax({
            url: "/NovaBalance/home/contact/",
            data: formData,
            processData: false,  // Prevent jQuery from processing FormData
            contentType: false,  // Prevent jQuery from setting contentType    
            method: "post",
            success:function(data){
                console.log(data);
                $("#contactModal").modal("show");
            },
            error: function(xhr, status, error) {
                console.error("AJAX Error:", status, error);
                console.error("Response Text:", xhr.responseText);
            }
        })
    });
});