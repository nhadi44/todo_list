let modal = $("#createActivity");
let formCreateActivity = $(modal).find("#createActivityForm");

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
    beforeSend: function () {},
    success: function (response) {
      console.log("success", response);
    },
    error: function (response) {
      console.log("error", response);
    },
    complete: function () {},
  });
});
