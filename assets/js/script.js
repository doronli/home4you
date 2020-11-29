"use strict";

$("#submit-btn").click(function (e) {
  e.preventDefault();
  const isValid = isFormValid();

  if (isValid) {
    // send data to server
    $("#loading-gif").removeClass("d-none");
    $.ajax({
      //   data: returnFormData(),
      data: $("#form-lp").serialize(),
      url: "../contactform/submit-lp.php",
      type: "POST",
      success: function (result) {
        window.location.href  += "/thanks";
      },
    });
  }
});

function isFormValid() {
  let isValid = true;

  const name = $("#name");
  const phone = $("#phone");

  if (name.val() === "" || name.val() === undefined) {
    isValid = false;
    name.addClass("error");
  } else {
    name.removeClass("error");
  }

  if (phone.val() === "" || phone.val() === undefined) {
    isValid = false;
    phone.addClass("error");
  } else {
    phone.removeClass("error");
  }

  return isValid;
}
