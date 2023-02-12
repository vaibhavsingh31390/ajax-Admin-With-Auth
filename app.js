// MODAL
var modal = document
  .getElementById("modal_id")
  .addEventListener("click", () => {
    var container = (document.getElementById("modal").style.display = "block");
  });
var modal_Close = document
  .getElementById("close_Modal")
  .addEventListener("click", () => {
    var container = (document.getElementById("modal").style.display = "none");
  });

//  ADD AND SHOW
$(document).ready(function () {
  $("#form_add").submit(function (event) {
    event.preventDefault();
    var formData = {
      name: $("#user-name").val(),
      email: $("#user-email").val(),
      phone: $("#user-phone").val(),
      address: $("#text_area-Add").val(),
    };
    // console.log(formData);
    if (
      formData.name == "" ||
      formData.email == "" ||
      formData.phone == "" ||
      formData.address == ""
    ) {
      alert("Please Fill All The Field's");
      return false;
    } else {
      $.ajax({
        type: "POST",
        url: "process.php",
        data: formData,
        success: function (data) {
          console.log("ADD ajax");
          $("#close_Modal").click();
          $(".container:last").after(data);
          return false;
        },
        error: function (err) {
          console.log(err);
        },
      });
    }
  });
});

// DELETE
$(document).on("click", ".delete_Btn", function (elem) {
  elem.preventDefault();
  var elementID = $(this).data("id");

  $.ajax({
    type: "POST",
    url: "process.php",
    data: { id: elementID },
    success: function (data) {
      console.log("DELETE ajax");
      var deleteID = '"' + elementID + '"';
      $('.container[data-id ="' + elementID + '"]').remove();
    },
  });
});

// FETCH AND ADD DATA
$(function () {
  $("#close_Modal_edit").click(function () {
    $("#modal-edit").css({ display: "none" });
  });
});

$(document).on("click", "#edit_Btn_Id", function (elem) {
  elem.preventDefault();
  $("#modal-edit").css({ display: "block" });
  var editElementID = $(this).data("id");
  $.ajax({
    type: "POST",
    url: "process.php",
    data: { delete_id: editElementID },
    success: function (data) {
      console.log("UPDATE BUTTON ajax");
      $("#form-update").html(data);
    },
  });
  return false;
});

// UPDATE DATA
$(document).on("click", "#btn_Update", function (event){
    event.preventDefault();
    var updateFormData = {
      ID: $("#Uuser-ID").val(),
      nameNew: $("#Uuser-name").val(),
      emailNew: $("#Uuser-email").val(),
      phoneNew: $("#Uuser-phone").val(),
      addressNew: $("#Utext_area-Add").val(),
    };
      console.log(updateFormData);
    if (
      updateFormData.nameNew == "" ||
      updateFormData.emailNew == "" ||
      updateFormData.phoneNew == "" ||
      updateFormData.addressNew == ""
    ) {
      alert("Please Fill All The Field's");
      return false;
    } else {
      $.ajax({
        type: "POST",
        url: "process.php",
        data: updateFormData,
        success: function (response) {
          elementID = updateFormData.ID;
          $("#close_Modal_edit").click();
          $('.container[data-id ='+elementID+']').html(response);
          console.log("UPDATE DONE ajax");
        },
        error: function (err) {
          console.log(err);
        },
      });
    }
  });



