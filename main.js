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

// for section hero (i)
// let next = document.querySelectorAll(".next");
// let prev = document.querySelectorAll(".prev");
// next.addEventListener("click", function () {
//   let items = document.querySelectorAll(".item");
//   document.querySelector(".slide").appendChild(items[0]);
// });


