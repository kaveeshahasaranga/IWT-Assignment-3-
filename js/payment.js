let popup = document.getElementById("popup");
let form = document.getElementById("checkout-form");

function openpopup() {
  popup.classList.add("open-popup");
}

function closepopup() {
  popup.classList.remove("open-popup");
  resetForm();
  clearErrors();
}

function resetForm() {
  form.reset();
}

function clearErrors() {
  document.getElementById("error-message").textContent = "";
}

document.getElementById("submit-btn").addEventListener("click", function () {
  if (validateForm()) {
    sendData();
    openpopup();
  }
});

function sendData() {
  const formData = new FormData(form);
  fetch("./php/payment.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error("Network response was not ok");
      }
      return response.text();
    })
    .then((data) => {
      openpopup();
    })
    .catch((error) => {
      console.error("There was an error with your fetch operation:", error);
    });
}

function validateForm() {
  const fullname = document.getElementById("fullname").value;
  const email = document.getElementById("email").value;
  const address = document.getElementById("address").value;
  const city = document.getElementById("city").value;
  const zip = document.getElementById("zip").value;
  const cardName = document.getElementById("card-name").value;
  const cardNumber = document.getElementById("card-number").value;
  const expMonth = document.getElementById("exp-month").value;
  const expYear = document.getElementById("exp-year").value;
  const cvv = document.getElementById("cvv").value;

  if (
    fullname.trim() === "" ||
    email.trim() === "" ||
    address.trim() === "" ||
    city.trim() === "" ||
    zip.trim() === "" ||
    cardName.trim() === "" ||
    cardNumber.trim() === "" ||
    expMonth.trim() === "" ||
    expYear.trim() === "" ||
    cvv.trim() === ""
  ) {
    document.getElementById("error-message").textContent =
      "All fields are required!";
    return false;
  }

  if (!isValidEmail(email)) {
    document.getElementById("error-message").textContent =
      "Invalid email address!";
    return false;
  }

  if (!isValidZip(zip)) {
    document.getElementById("error-message").textContent = "Invalid zip code!";
    return false;
  }

  if (!isValidCardNumber(cardNumber)) {
    document.getElementById("error-message").textContent =
      "Invalid card number!";
    return false;
  }

  if (!isValidExpirationDate(expMonth, expYear)) {
    document.getElementById("error-message").textContent =
      "Invalid expiration date!";
    return false;
  }

  if (!isValidCVV(cvv)) {
    document.getElementById("error-message").textContent = "Invalid CVV!";
    return false;
  }
  return true;
}

function isValidEmail(email) {
  // Basic email validation
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}

function isValidZip(zip) {
  // Basic zip code validation (numeric with optional dash)
  const zipRegex = /^\d{5}(?:-\d{4})?$/;
  return zipRegex.test(zip);
}

function isValidCardNumber(cardNumber) {
  // Basic card number validation (numeric with optional dashes)
  const cardNumberRegex = /^\d{4}-?\d{4}-?\d{4}-?\d{4}$/;
  return cardNumberRegex.test(cardNumber);
}

function isValidExpirationDate(expMonth, expYear) {
  // Basic expiration date validation (check if month is between 1 and 12, and year is not in the past)
  const month = parseInt(expMonth, 10);
  const year = parseInt(expYear, 10);
  const currentYear = new Date().getFullYear();
  return month >= 1 && month <= 12 && year >= currentYear;
}

function isValidCVV(cvv) {
  // Basic CVV validation (3 or 4 digits)
  const cvvRegex = /^\d{3,4}$/;
  return cvvRegex.test(cvv);
}
