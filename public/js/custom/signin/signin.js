let signinForm = $("#signinForm");

$(signinForm).on("submit", function (e) {
  e.preventDefault();

  let email = $(signinForm).find("#email").val();
  let password = $(signinForm).find("#password").val();
  let signinBtn = $(signinForm).find("#btnSignin");

  let data = {
    email: email,
    password: password,
  };

  if (email == "" || password == "") {
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "Please fill all fields!",
    });

    if (email == "") {
      $(signinForm).find("#email").addClass("is-invalid");
    } else {
      $(signinForm).find("#email").removeClass("is-invalid");
    }

    if (password == "") {
      $(signinForm).find("#password").addClass("is-invalid");
    } else {
      $(signinForm).find("#password").removeClass("is-invalid");
    }

    return false;
  }

  $.ajax({
    url: "http://localhost/todo_list/signin/authenticate",
    type: "POST",
    data: data,
    dataType: "json",
    beforeSend: function () {
      $(signinBtn).attr("disabled", true);
      $(signinBtn).html("Please wait...");
    },
    success: function (response) {
      Swal.fire({
        icon: "success",
        title: "Success",
        text: "You will be redirected to dashboard!",
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = "http://localhost/todo_list/dashboard";
        }
      });
    },
    error: function (response) {
      console.log("error", response);
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Invalid email or password!",
      });
    },
    complete: function () {
      $(signinBtn).attr("disabled", false);
      $(signinBtn).html("Sign In");
    },
  });
});
