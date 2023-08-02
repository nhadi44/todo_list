let editTaksBtn = $(".btn[data-bs-target='#updateTaks']");
let updateModalTaks = $("#updateTaks");
let updateTaksForm = $(updateModalTaks).find("#updateTaksForm");

$(editTaksBtn).on("click", function () {
  let id = $(this).data("id");
  let taksId = $(updateTaksForm).find("#updateTaksId");
  let updateTaksActivityId = $(updateTaksForm).find("#updateTaksActivityId");
  let updateTaksInput = $(updateTaksForm).find("#updateTaksInput");
  let updateTaksDescription = $(updateTaksForm).find("#updateTaksDescription");
  let updateTaksPriority = $(updateTaksForm).find("#updateTaksPriority");

  $.ajax({
    url: `http://localhost/todo_list/taks/getTaksId`,
    method: "POST",
    data: { id: id },
    dataType: "json",
    success: function (response) {
      $(taksId).val(response.id);
      $(updateTaksActivityId).val(response.activity_id);
      $(updateTaksInput).val(response.name);
      $(updateTaksDescription).val(response.description);
      $(updateTaksPriority).val(response.priority);
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

$(updateTaksForm).on("submit", function (e) {
  e.preventDefault();

  let id = $(this).find("#updateTaksId").val();
  let activityId = $(this).find("#updateTaksActivityId").val();
  let name = $(this).find("#updateTaksInput").val();
  let description = $(this).find("#updateTaksDescription").val();
  let priority = $(this).find("#updateTaksPriority").val();

  let data = {
    id: id,
    activityId: activityId,
    name: name,
    description: description,
    priority: priority,
  };

  if (!name || !description || !priority) {
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "All fields are required!",
    });
    return false;
  }

  $.ajax({
    url: `http://localhost/todo_list/taks/update`,
    method: "POST",
    data: data,
    dataType: "json",
    success: function (response) {
      Swal.fire({
        icon: "success",
        title: "Success!",
        text: "Taks updated!",
      }).then((result) => {
        if (result.isConfirmed) {
          $(updateModalTaks).modal("hide");
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
  });
});
