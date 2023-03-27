const wrapper = document.querySelector(".sliderWrapper");
const menuItems = document.querySelectorAll(".menuItem");

const products = [
  {
    id: 1,
    title: "shirt",
    price: 119,
    colors: [
      {
        code: "darkblue",
        img: "/images/shirt_product1.png"
      },
      {
        code: "black",
        img: "/images/shirt_product2.png"
      }
    ]
  },
  {
    id: 2,
    title: "shorts",
    price: 149,
    colors: [
      {
        code: "black",
        img: "/images/shorts-product1.jpg"
      },
      {
        code: "white",
        img: "/images/shorts-product2.png"
      }
    ]
  },
  {
    id: 3,
    title: "gear",
    price: 109,
    colors: [
      {
        code: "red",
        img: "/images/gymgears_product1.png"
      },
      {
        code: "black",
        img: "/images/gymgears_product2.png"
      }
    ]
  },
  {
    id: 4,
    title: "supplement",
    price: 129,
    colors: [
      {
        code: "red",
        img: "/images/supplements-product1.png"
      },
      {
        code: "gold",
        img: "/images/supplements-product2.png"
      }
    ]
  }
//  {
//    id: 5,
//    title: "Hippie",
//    price: 99,
//    colors: [
//      {
//        code: "gray",
//        img: "./img/hippie.png",
//      },
//      {
//        code: "black",
//        img: "./img/hippie2.png",
//      },
//    ],
//  },
];

let choosenProduct = products[0];

const currentProductImg = document.querySelector(".productImg");
const currentProductTitle = document.querySelector(".productTitle");
const currentProductPrice = document.querySelector(".productPrice");
const currentProductColors = document.querySelectorAll(".color");
const currentProductSizes = document.querySelectorAll(".size");

menuItems.forEach((item, index) => {
  item.addEventListener("click", () => {
    //change the current slide to item name being clicked on
    wrapper.style.transform = `translateX(${-100 * index}vw)`;

    //change the choosen product
    choosenProduct = products[index];

    //change texts of currentProduct
    currentProductTitle.textContent = choosenProduct.title;
    currentProductPrice.textContent = "$" + choosenProduct.price;
    currentProductImg.src = choosenProduct.colors[0].img;

    //assing new colors
    currentProductColors.forEach((color, index) => {
      color.style.backgroundColor = choosenProduct.colors[index].code;
    });
  });
});

//currentProductColors.forEach((color, index) => {
//  color.addEventListener("click", () => {
//    currentProductImg.src = choosenProduct.colors[index].img;
//  });
//});
//
//currentProductSizes.forEach((size, index) => {
//  size.addEventListener("click", () => {
//    currentProductSizes.forEach((size) => {
//      size.style.backgroundColor = "white";
//      size.style.color = "black";
//    });
//    size.style.backgroundColor = "black";
//    size.style.color = "white";
//  });
//});

//const productButton = document.querySelector(".productButton");
//const payment = document.querySelector(".payment");
//const close = document.querySelector(".close");
//
//productButton.addEventListener("click", () => {
//  payment.style.display = "flex";
//});
//
//close.addEventListener("click", () => {
//  payment.style.display = "none";
//});