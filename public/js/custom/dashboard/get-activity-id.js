let btnDetailActivity = $('.btn[data-bs-target="#updateActivity"]');

$(btnDetailActivity).on("click", function () {
  let id = $(this).data("id");
  let modal = $("#updateActivity");
  let activityId = $(modal).find("#updateActivityId");
  let activityName = $(modal).find("#updateActivityInput");
  let activityDescription = $(modal).find("#updateActivityDescription");

  $.ajax({
    url: `http://localhost/todo_list/dashboard/getActivityById/${id}`,
    method: "POST",
    dataType: "json",
    success: function (data) {
      $(activityId).val(data.id);
      $(activityName).val(data.name);
      $(activityDescription).val(data.description);
    },
    error: function (err) {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Something went wrong!",
      }).then((result) => {
        $(modal).modal("hide");
      });
    },
  });
});
