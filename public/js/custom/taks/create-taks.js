let modalTaks = $("#createTaks");
let createFormTaks = $(modalTaks).find("#createFormTaks");
let createTaksBtn = $(modalTaks).find("#createTaksBtn");

createFormTaks.on("submit", function (e) {
  e.preventDefault();

  let taks = $(createFormTaks).find("#taks").val();
  let description = $(createFormTaks).find("#description").val();
  let priority = $(createFormTaks).find("#priority").val();
  let activityId = $(createFormTaks).find("#activityId").val();

  let data = {
    taks: taks,
    description: description,
    priority: priority,
    activityId: activityId,
  };

  if (!taks || !description || !priority) {
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "All fields are required!",
    });
    return false;
  }

  $.ajax({
    url: "http://localhost/todo_list/taks/create",
    type: "POST",
    data: data,
    dataType: "json",
    beforeSend: function () {
      $(createTaksBtn).attr("disabled", true);
      $(createTaksBtn).html("Taks is creating...");
    },
    success: function (response) {
      Swal.fire({
        icon: "success",
        title: "Success!",
        text: "Taks created successfully!",
      }).then((result) => {
        if (result.isConfirmed) {
          $(modalTaks).modal("hide");
          $(createFormTaks).trigger("reset");
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
      $(createTaksBtn).attr("disabled", false);
      $(createTaksBtn).html("Save");
    },
  });
});
