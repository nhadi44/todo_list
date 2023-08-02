let deleteTaksBtn = $(".btn[data-bs-target='#deleteTaks']");
let deleteTaksModal = $("#deleteTaks");
let deleteTaksForm = $(deleteTaksModal).find("#deleteTaksForm");

$(deleteTaksBtn).on("click", function () {
  let id = $(this).data("id");
  let deleteTaksId = $(deleteTaksForm).find("#deleteTaksId");
  let deleteTaksname = $(deleteTaksForm).find("#deleteTaksname");
  let deleteTaksActivityId = $(deleteTaksForm).find("#deleteTaksActivityId");

  $.ajax({
    url: `http://localhost/todo_list/taks/getTaksId`,
    method: "POST",
    data: { id: id },
    dataType: "json",
    success: function (response) {
      $(deleteTaksId).val(id);
      $(deleteTaksname).html(response.name);
      $(deleteTaksActivityId).val(response.activity_id);
    },
    error: function (response) {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Something went wrong!",
      });
    },
  });
});
