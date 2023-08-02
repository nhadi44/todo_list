let finishTaksBtn = $(".btn[data-bs-target='#finishedTaks']");
let finishTaksModal = $("#finishedTaks");
let finishedTaksForm = $(finishTaksModal).find("#finishedTaksForm");

$(finishTaksBtn).on("click", function () {
  let id = $(this).data("id");
  let finishedTaksId = $(finishedTaksForm).find("#finishedTaksId");
  let finishedTaksActivityId = $(finishedTaksForm).find("#finishedTaksActivityId");
  let finishedTaksname = $(finishedTaksForm).find("#finishedTaksname");

  $.ajax({
    url: `http://localhost/todo_list/taks/getTaksId`,
    method: "POST",
    data: { id: id },
    dataType: "json",
    success: function (response) {
      $(finishedTaksId).val(id);
      $(finishedTaksActivityId).val(response.activity_id);
      $(finishedTaksname).html(response.name);
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

$(finishedTaksForm).on("submit", function (e) {
  e.preventDefault();
  let finishedTaksId = $(finishedTaksForm).find("#finishedTaksId");
  let finishedTaksActivityId = $(finishedTaksForm).find("#finishedTaksActivityId");

  let data = {
    id: $(finishedTaksId).val(),
    activity_id: $(finishedTaksActivityId).val(),
  };

  $.ajax({
    url: `http://localhost/todo_list/taks/finishTask`,
    method: "POST",
    data: data,
    dataType: "json",
    success: function (response) {
      Swal.fire({
        icon: "success",
        title: "Success",
        text: "Task finished!",
      }).then((result) => {
        if (result.isConfirmed) {
          $(finishTaksModal).modal("hide");
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
  });
});
