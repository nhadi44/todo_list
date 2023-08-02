let modal = $("#createActivity");
let formCreateActivity = $(modal).find("#createActivityForm");
let btnCreateActivity = $(formCreateActivity).find("#btnCreateActivity");

// modal close clear form
$(modal).on("hidden.bs.modal", function () {
  $(formCreateActivity).trigger("reset");
});

$(formCreateActivity).submit(function (e) {
  e.preventDefault();
  let activity = $(formCreateActivity).find("#activity").val();
  let description = $(formCreateActivity).find("#description").val();

  let data = {
    activity: activity,
    description: description,
  };

  if (activity == "" || description == "") {
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "Please fill all the fields!",
    });

    return false;
  }

  $.ajax({
    url: "http://localhost/todo_list/dashboard/createActivity",
    type: "POST",
    data: data,
    dataType: "json",
    beforeSend: function () {
      $(btnCreateActivity).attr("disabled", true);
      $(btnCreateActivity).html("Activity creating");
    },
    success: function (response) {
      Swal.fire({
        icon: "success",
        title: "Success",
        text: "Activity created successfully!",
      }).then((result) => {
        if (result.isConfirmed) {
          $(modal).modal("hide");
          $(formCreateActivity).trigger("reset");
          window.location.reload();
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
      $(btnCreateActivity).attr("disabled", false);
      $(btnCreateActivity).html("Save");
    },
  });
});
