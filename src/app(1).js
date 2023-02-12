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

// DISPLAY
function display() {

  let Display = new XMLHttpRequest;
  let url = "Dashboard.php";

  Display.open("POST", url, true);

  Display.setRequestHeader("Content-Type", "application/json");

  Display.onreadystatechange = function () {
    if (Display.readyState === 4 && Display.status === 200) {
      document.getElementById("test").innerHTML = this.responseText;
      console.log("AJAX REQUEST SENT DISPLAY FUNCTION RAN");
    }
  };

  var data = JSON.stringify({
    access: "granted"
  });
  Display.send(data);
  console.log(data);
}
window.onload = display();

// SEND FORM DATA 
var Send = document
  .getElementById("btn_Login")
  .addEventListener("click", function sendData(e) {
    e.preventDefault();
    var formData = {
      Name: document.getElementById("user-name").value,
      Email: document.getElementById("user-email").value,
      Phone: document.getElementById("user-phone").value,
      Address: document.getElementById("text_area-Add").value,
    };

    var display = document.getElementById("record_Content");

    let xhr = new XMLHttpRequest();
    let url = "Dashboard.php";

    xhr.open("POST", url, true);

    xhr.setRequestHeader("Content-Type", "application/json");

    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        console.log("AJAX REQUEST SEND");
        display();
      }
    };

    var data = JSON.stringify({
      name: formData.Name,
      email: formData.Email,
      phone: formData.Phone,
      address: formData.Address,
    });
    xhr.send(data);
    
    console.log(data);
  });
