const keywordArticle = document.querySelector('.keywordArticle');
const container = document.querySelector('.articleContainer');

// event
keywordArticle.addEventListener('keyup', function() {
  // ajax
  fetch('../../_backend/ajax/articleUser.php?keyword=' + keywordArticle.value)
  .then((Response) => Response.text())
  .then((Response) => (container.innerHTML = Response));
})