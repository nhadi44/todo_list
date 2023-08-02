let modalUpdateActivity = $("#updateActivity");
let formUpdateActivity = $(modalUpdateActivity).find("#updateActivityForm");

$(formUpdateActivity).on("submit", function (e) {
  e.preventDefault();
  let id = $(formUpdateActivity).find("#updateActivityId").val();
  let updateActivity = $(formUpdateActivity).find("#updateActivityInput").val();
  let updateDescription = $(formUpdateActivity).find("#updateActivityDescription").val();

  let data = {
    id: id,
    activity: updateActivity,
    description: updateDescription,
  };

  if (updateActivity == "" || updateDescription == "") {
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "Please fill all the fields!",
    });

    return false;
  }

  $.ajax({
    url: "http://localhost/todo_list/dashboard/updateActivity",
    type: "POST",
    data: data,
    dataType: "json",
    beforeSend: function () {},
    success: function (response) {
      Swal.fire({
        icon: "success",
        title: "Success",
        text: "Activity updated successfully!",
      }).then((result) => {
        if (result.isConfirmed) {
          $(modal).modal("hide");
          window.location.reload();
        }
      });
    },
    error: function (response) {
      console.log("error", response);
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Something went wrong!",
      });
    },
    complete: function () {},
  });
});
