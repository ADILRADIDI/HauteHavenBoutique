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


