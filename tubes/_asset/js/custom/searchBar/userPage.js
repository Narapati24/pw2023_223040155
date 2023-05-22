const containerArticle = document.querySelector('.articleContainer');

const keywordArticle = document.querySelector('.keywordArticle');
keywordArticle.addEventListener("input", function() {
  checkInputsArticle();
});

const keywordArticle2 = document.querySelector('.keywordArticle2');
keywordArticle2.addEventListener("keyup", function() {
  checkInputsArticle();
});

let pageArticle;

function pageClick(data) {
  checkInputsArticle(data);
}

function checkInputsArticle(data) {
  const input1 = keywordArticle.value;
  const input2 = keywordArticle2.value;
  let input3 = 1;
  if (!data) {
    false;
  } else {
    input3 = data;
  }
  fetch(
    "../../_backend/ajax/articleUser.php ?keyword=" +
      input1 +
      "&keyword2=" +
      input2 + 
      "&page=" +
      input3
  )
    .then((Response) => Response.text())
    .then((Response) => (containerArticle.innerHTML = Response));
};