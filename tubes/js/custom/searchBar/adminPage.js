// Article SearchBar
const containerArticle = document.querySelector('.articleContainer');

const keywordArticle = document.querySelector(".keywordArticle");
keywordArticle.addEventListener("input", function () {
  checkInputsArticle();
});

const keywordArticle2 = document.querySelector(".keywordArticle2");
keywordArticle2.addEventListener("keyup", function () {
  checkInputsArticle();
});

const keywordArticle3 = document.querySelector(".keywordArticle3");
keywordArticle3.addEventListener("keyup", function () {
  checkInputsArticle();
});

let pageArticle;

function pageClick(data) {
  checkInputsArticle(data);
}

function checkInputsArticle(data) {
  const input1 = keywordArticle.value;
  const input2 = keywordArticle2.value;
  const input3 = keywordArticle3.value;
  let input4 = 1;
  if (!data) {
    false;
  } else {
    input4 = data;
  }
  fetch(
  "../../_backend/ajax/adminPage/article.php ?keyword=" +
    input1 +
    "&keyword2=" +
    input2 +
    "&keyword3=" +
    input3 +
    "&page=" +
    input4
  )
    .then((Response) => Response.text())
    .then((Response) => (containerArticle.innerHTML = Response));
};

// Users SearchBar
const containerUsers = document.querySelector('.usersContainer');

const keywordUsers = document.querySelector(".keywordUsers");
keywordUsers.addEventListener("keyup", function () {
  checkInputsUsers();
});

const keywordUsers2 = document.querySelector(".keywordUsers2");
keywordUsers2.addEventListener("input", function () {
  checkInputsUsers();
});

function checkInputsUsers() {
  const input1 = keywordUsers.value;
  const input2 = keywordUsers2.value;
  fetch(
    "../../_backend/ajax/adminPage/user.php?keyword=" +
      input1 +
      "&keyword2=" +
      input2
  )
    .then((Response) => Response.text())
    .then((Response) => (containerUsers.innerHTML = Response));
};