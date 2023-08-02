let form = $("#signupForm");

$(form).on("submit", function (e) {
  e.preventDefault();
  let email = $("#email").val();
  let password = $("#password").val();
  let signupBtn = $("#btnSignUp");

  let data = {
    email: email,
    password: password,
  };

  if (email == "" || password == "") {
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "Please fill all the fields!",
    });

    // add is-invalid class to the input

    if (email == "") {
      $("#email").addClass("is-invalid");
    } else {
      $("#email").removeClass("is-invalid");
    }

    if (password == "") {
      $("#password").addClass("is-invalid");
    } else {
      $("#password").removeClass("is-invalid");
    }

    return false;
  }

  $.ajax({
    url: "http://localhost/todo_list/signup/store",
    type: "POST",
    data: data,
    dataType: "json",
    beforeSend: function () {
      signupBtn.attr("disabled", true);
      signupBtn.html("Please wait...");
    },

    success: function (response) {
      Swal.fire({
        icon: "success",
        title: "Success",
        text: "You have successfully registered! Please signin to continue.",
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = "http://localhost/todo_list/signin";
        }
      });

      $("#email").val("");
      $("#password").val("");
    },
    error: function (response) {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Something went wrong!",
      });
    },

    complete: function () {
      signupBtn.attr("disabled", false);
      signupBtn.html("Sign Up");
    },
  });
});
