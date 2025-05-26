$(document).ready(function () {
  $("#pages-dataTable").dataTable();

  function sanityCheck(message) {
    alert(message);
  }
  $("body").on("click", ".action-button", function (e) {
    var actionType = $(this).data("type");
    var page_id = $(this).data("id");
    switch (actionType) {
      case "edit":
        window.location.href = "/admin/page?page_id=" + page_id;
        break;
      case "delete":
        let potvrda = confirm(
          "Da li ste sigurni da želite da obrišete stranicu?",
        );
        if (potvrda) {
          alert("Obrisano");
        }
        break;
      default:
        sanityCheck("edit");
        break;
    }
  });
});
