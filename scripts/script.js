// Get the signup modal
var modal = document.getElementById("signupModal");

// Get the button that opens the signup modal
var btn = document.getElementById("signupBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the signup modal
btn.onclick = function () {
  modal.style.display = "block";
  // modal.style.border = "5px solid red";
};

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modal.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};

// // Handle form submission
// var form = document.getElementById("signupForm");
// form.addEventListener("submit", function (event) {
//   // Prevent default form submission
//   event.preventDefault();
//   // You can add your form submission logic here, such as sending data to a server
//   console.log("Form submitted!");
//   // Close the modal after form submission
//   modal.style.display = "none";
// });
