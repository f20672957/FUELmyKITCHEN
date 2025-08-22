/* navigation bar script */

window.addEventListener("scroll", function () {
  const header = document.querySelector("header");
  header.classList.toggle("sticky", window.scrollY > 0);
});

/* search bar script */

function search() {
  const input = document.getElementById("searchinput").value.toUpperCase();
  const boxContainer = document.getElementById("content");
  const box = boxContainer.getElementsByClassName("box");

  for (let i = 0; i < box.length; i++) {
    let title = box[i].querySelector(".boxtext h4");

    if (title.innerText.toUpperCase().indexOf(input) > -1) {
      box[i].style.display = "";
    } else {
      box[i].style.display = "none";
    }
  }
}
