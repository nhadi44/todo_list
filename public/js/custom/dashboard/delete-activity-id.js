let button = $(".btn[data-bs-target='#deleteActivity']");

$(button).on("click", function () {
  let id = $(this).data("id");
  let name = $(this).data("name");
  let modal = $("#deleteActivity");

  let activityId = $(modal).find("#deleteActivityId");
  let activityName = $(modal).find("#deleteActivityName");

  $(activityId).val(id);
  $(activityName).html(name);
});
