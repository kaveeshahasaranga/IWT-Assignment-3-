let openShopping = document.querySelector(".shopping");
let closeShopping = document.querySelector(".closeShopping");
let list = document.querySelector(".list");
let listCard = document.querySelector(".listCard");
let body = document.querySelector("body");
let total = document.querySelector(".total");
let quantity = document.querySelector(".quantity");

openShopping.addEventListener("click", () => {
  body.classList.add("active");
});
closeShopping.addEventListener("click", () => {
  body.classList.remove("active");
});

let products = [
  {
    id: 1,
    name: "Cook book1",
    image: "img_1.jpg",
    price: 12,
  },
  {
    id: 2,
    name: "Cook book 2",
    image: "img_2.jpg",
    price: 18,
  },
  {
    id: 3,
    name: "Cook book 3",
    image: "img_3.jpg",
    price: 12,
  },
  {
    id: 4,
    name: "Cook book 4",
    image: "img_4.jpg",
    price: 12,
  },
  {
    id: 5,
    name: "Cook book 5",
    image: "img_5.jpg",
    price: 32,
  },
  {
    id: 6,
    name: "Cook book 6",
    image: "img_6.jpg",
    price: 12,
  },

  {
    id: 7,
    name: "Cook book 7",
    image: "img_7.jpg",
    price: 20,
  },

  {
    id: 8,
    name: "Cook book 8",
    image: "img_8.jpg",
    price: 23,
  },

  {
    id: 9,
    name: "Cook book 9",
    image: "img_9.jpg",
    price: 21,
  },
];

let listCards = [];

function addToCard(key) {
  if (listCards[key] == null) {
    listCards[key] = JSON.parse(JSON.stringify(products[key]));
    listCards[key].quantity = 1;
  }
  reloadCard();
}

function reloadCard() {
  listCard.innerHTML = "";
  let count = 0;
  let totalPrice = 0;
  listCards.forEach((value, key) => {
    totalPrice = totalPrice + value.price;
    count = count + value.quantity;
    if (value != null) {
      let newDiv = document.createElement("li");
      newDiv.innerHTML = `
                <div><img src="images/${value.image}"/></div>
                <div>${value.name}</div>
                <div>${value.price.toLocaleString()}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${
        value.quantity - 1
      })">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${
        value.quantity + 1
      })">+</button>
                </div>`;
      listCard.appendChild(newDiv);
    }
  });
  total.innerText = totalPrice.toLocaleString();
  quantity.innerText = count;
}

function changeQuantity(key, quantity) {
  if (quantity == 0) {
    delete listCards[key];
  } else {
    listCards[key].quantity = quantity;
    listCards[key].price = quantity * products[key].price;
  }
  reloadCard();
}

function redirectToPayment() {
  if (Object.keys(listCards).length === 0) {
    alert("Your cart is empty! Please add items to proceed.");
  } else {
    window.location.href = "payment.html";
  }
}
