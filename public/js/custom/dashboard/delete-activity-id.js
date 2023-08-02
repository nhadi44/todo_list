let button = $(".btn[data-bs-target='#deleteActivity']");
let modalDeleteActivity = $("#deleteActivity");
let formDeleteActivity = $(modalDeleteActivity).find("#formDeleteActivity");
let deleteActivityButton = $(formDeleteActivity).find("#deleteActivityButton");

$(button).on("click", function () {
  let id = $(this).data("id");
  let name = $(this).data("name");

  let activityId = $(modalDeleteActivity).find("#deleteActivityId");
  let activityName = $(modalDeleteActivity).find("#deleteActivityName");

  // delete whitespace on id
  id = id.replace(/\s/g, "");

  $(activityId).val(id);
  $(activityName).html(name);
});

$(deleteActivityButton).on("click", function () {
  let id = $(formDeleteActivity).find("#deleteActivityId").val();

  $.ajax({
    url: "http://localhost/todo_list/dashboard/deleteActivity",
    type: "POST",
    data: { id: id },
    dataType: "json",
    beforeSend: function () {
      $(deleteActivityButton).attr("disabled", true);
      $(deleteActivityButton).html("Deleting activity...");
    },
    success: function (response) {
      Swal.fire({
        icon: "success",
        title: "Success",
        text: "Activity has been deleted!",
      }).then((result) => {
        if (result.isConfirmed) {
          modalDeleteActivity.modal("hide");
          location.reload();
        }
      });
    },
    error: function (response) {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Something went wrong!",
      });
    },
    complete: function () {
      $(deleteActivityButton).attr("disabled", false);
      $(deleteActivityButton).html("Delete");
    },
  });
});
