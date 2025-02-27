$(document).ready(function(){
    $("body").on("click","#readMore", function(e){
        e.preventDefault();
        $("#homeModal").modal("show");
    })
});