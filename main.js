// for page signUp select and checkbox

let exd = false;
function showCheckboxes() {
  let checkboxes = document.getElementById("checkboxes");
//   if exd true
  if (!exd) {
    checkboxes.style.display = "block";
    exd = true;
  } else {
    checkboxes.style.display = "none";
    exd = false;
  }
}




// const products = [
//   { id: 1, name: "Product 1", price: "129$", imageUrl: "picture/men.svg" },
//   { id: 2, name: "Product 21", price: "99$", imageUrl: "picture/men.svg" },
//   { id: 2, name: "Product 22", price: "29$", imageUrl: "picture/men.svg" },
//   { id: 2, name: "Product 21", price: "09$", imageUrl: "picture/men.svg" },
  
// ];

// // console.log(products.name);

// // Function to create and display products
// function displayProducts(products) {
//     var container = document.getElementById("productsContainer");
//     container.innerHTML = " ";
//     let html = "";
//     let product;
//     products.forEach(function(products) {
//       // console.log("hi im here bro");
//         html += `<a href="viewProduct.html">
//                     <img id="pic_prd" src="${products.imageUrl}" alt="image_product">
//                     <div class="price_title">
//                         <p id="title">${products.name}</p>
//                         <p id="price">${products.price}</p>
//                     </div>
//                 </a>`;});
//     container.innerHTML = html;
// }
// displayProducts(products);

