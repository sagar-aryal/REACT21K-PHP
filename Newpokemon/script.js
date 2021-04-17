//Sticky header
window.onscroll = function () {
  stickyHeader();
};
let header = document.getElementById("myHeader");
let sticky = header.offsetTop;

function stickyHeader() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

//default page
let currentPageNumber = 0;
fetchData(currentPageNumber);
document.querySelector(".page-number").innerHTML = currentPageNumber;

//previous and next buttons for changing page number.
document.querySelector(".btn1").addEventListener("click", () => {
  document.querySelector(".btn2").disabled = false;
  if (currentPageNumber == 0) {
    document.querySelector(".btn1").disabled = true;
  } else {
    currentPageNumber--;
    document.querySelector(".page-number").innerHTML = currentPageNumber;
  }
  fetchData(currentPageNumber);
});

document.querySelector(".btn2").addEventListener("click", () => {
  document.querySelector(".btn1").disabled = false;
  if (currentPageNumber == 22) {
    document.querySelector(".btn2").disabled = true;
  } else {
    currentPageNumber++;
    document.querySelector(".page-number").innerHTML = currentPageNumber;
  }
  fetchData(currentPageNumber);
});

//fetching formatted_pokemon data
function fetchData(page) {
  fetch(`formatted_pokemon.php?page=${page}`)
    .then((resp) => resp.json())
    .then((data) => {
      console.log(data);
      const value = data
        .map((user) => {
          return `
        <div class="pokemon-details">
        <p>Name: ${user.name}</p>
        <p>URL: ${user.url} </p>
        </div>
        `;
        })
        .join("");
      console.log(value);
      document.querySelector(".pokemons").innerHTML = value;
    });
  //scroll top when previous or next button is clicked.
  window.scrollTo(0, 0);
}
