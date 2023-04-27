const keywordArticle = document.querySelector('.keywordArticle');
const container = document.querySelector('.articleContainer');

// event
keyword.addEventListener('keyup', function() {
  // ajax
  fetch('../../_backend/ajax/articleAdmin.php?keyword=' + keywordArticle.value)
  .then((Response) => Response.text())
  .then((Response) => (container.innerHTML = Response));
})