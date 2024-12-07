document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector("#contactForm");
  const statusTxt = form.querySelector(".button-area span");

  form.onsubmit = (e) => {

    e.preventDefault();
    if (!validateForm()) return;
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "./php/contact.php", true);
    xhr.onload = () => {
      if (xhr.readyState === 4 && xhr.status === 200) {
        let response = xhr.responseText;
        if (
          response.includes("Email and message field is required!") ||
          response.includes("Enter a valid email address!") ||
          response.includes("Sorry, failed to send your message!")
        ) {
          statusTxt.style.color = "red";
        } else {
          form.reset();
          setTimeout(() => {
            statusTxt.style.display = "none";
          }, 3000);
        }
        statusTxt.innerText = response;
        form.classList.remove("disabled");
      }
    };
    let formData = new FormData(form);
    xhr.send(formData);
  };

  function validateForm() {
    var FullName = document.getElementById("FullName").value;
    var Address = document.getElementById("Address").value;
    var Email = document.getElementById("Email").value;
    var TelNo = document.getElementById("TelNo").value;
    var Message = document.getElementById("Message").value;

    var nameError = document.getElementById("nameError");
    var addressError = document.getElementById("addressError");
    var emailError = document.getElementById("emailError");
    var phoneError = document.getElementById("phoneError");
    var messageError = document.getElementById("messageError");

    nameError.innerHTML = "";
    addressError.innerHTML = "";
    emailError.innerHTML = "";
    phoneError.innerHTML = "";
    messageError.innerHTML = "";

    if (FullName == "") {
      nameError.innerHTML = "Name is required.";
      return false;
    }

    if (Address == "") {
      addressError.innerHTML = "Address is required.";
      return false;
    }

    if (Email == "") {
      emailError.innerHTML = "Email is required.";
      return false;
    }

    if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(Email)) {
      emailError.innerHTML = "Invalid email format.";
      return false;
    }

    if (TelNo == "") {
      phoneError.innerHTML = "Phone is required.";
      return false;
    }

    if (!/^[0-9]{10}$/.test(TelNo)) {
      phoneError.innerHTML = "Invalid phone format. Must be 10 digits.";
      return false;
    }

    if (Message == "") {
      messageError.innerHTML = "Message is required.";
      return false;
    }

    return true;
  }

  form.addEventListener("submit", function (event) {
    if (!validateForm()) {
      event.preventDefault();
    } else {
      alert("Form submitted successfully!");
      form.reset();
    }
  });
});
