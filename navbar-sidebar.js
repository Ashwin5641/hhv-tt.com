// function for hamburger and cross icon

const hamburger = document.querySelector('.sidebar-hamburger');
const defaultmenuItems = document.querySelector('.sidebar-menu-items');
const xmark = document.querySelector('.sidebar-xmark');

defaultmenuItems.style.display = "none";
xmark.style.display = "none";

hamburger.addEventListener("click", () => {
    defaultmenuItems.style.display = "block";
    hamburger.style.display = "none";
    xmark.style.display = "block";
});

xmark.addEventListener("click", () => {
    defaultmenuItems.style.display = "none";
    hamburger.style.display = "block";
    xmark.style.display = "none";
});


// function for the products and products lists
const productsPlus = document.querySelector('.products-plus');
const productsCross = document.querySelector('.products-cross');
const defaultProductsList = document.querySelector('.sidebar-products-list');

defaultProductsList.style.display = "none";
productsCross.style.display = "none";

productsPlus.addEventListener("click", () => {
    defaultProductsList.style.display = "block";
    productsPlus.style.display = "none";
    productsCross.style.display = "block";
});

productsCross.addEventListener("click", () => {
    defaultProductsList.style.display = "none";
    productsPlus.style.display = "block";
    productsCross.style.display = "none";
});