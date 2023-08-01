let btnGetData = $("#testGetData");

$(btnGetData).on("click", function () {
  $.ajax({
    url: "http://localhost/todo_list/dashboard/getData",
    type: "POST",
    data: {
      _token: $('meta[name="csrf-token"]').attr("content"),
      activity_name: "test",
      activity_description: "test",
    },
    dataType: "json",
    beforeSend: function () {
      btnGetData.attr("disabled", true);
      btnGetData.html("loading...");
    },
    success: function (data) {
      console.log(data);
    },
    error: function (err) {
      console.log(err);
    },
    complete: function () {
      btnGetData.attr("disabled", false);
      btnGetData.html("Get Data");
    },
  });
});
