// const keywordArticle = document.querySelector('.keywordArticle');
// const keywordArticle2 = document.querySelector('.keywordArticle2');
// const container = document.querySelector('.articleContainer');

// // event
// keywordArticle.addEventListener('keyup', function() {
//   fetch('../../_backend/ajax/articleAdmin.php?keyword=' + keywordArticle.value)
//   .then((Response) => Response.text())
//   .then((Response) => (container.innerHTML = Response));
// })
// keywordArticle2.addEventListener('keyup', function() {
//   fetch('../../_backend/ajax/articleAdmin.php?keyword2=' + keywordArticle2.value)
//   .then((Response) => Response.text())
//   .then((Response) => (container.innerHTML = Response));
// })
let key = false;
      const container = document.querySelector('.articleContainer');

      const keywordArticle = document.querySelector(".keywordArticle");
      keywordArticle.addEventListener("keyup", function () {
        key = true;
        checkInputs();
      });

      const keywordArticle2 = document.querySelector(".keywordArticle2");
      keywordArticle2.addEventListener("keyup", function () {
        key = true;
        checkInputs();
      });

      function checkInputs() {
        const input1 = keywordArticle.value;
        const input2 = keywordArticle2.value;
        fetch(
          "../../_backend/ajax/articleAdmin.php?keyword=" +
            input1 +
            "&keyword2=" +
            input2
        )
          .then((Response) => Response.text())
          .then((Response) => (container.innerHTML = Response));
      }