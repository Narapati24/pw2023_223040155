const keyword = document.querySelector('.keyword');
const container = document.querySelector('.articleContainer');

// event
keyword.addEventListener('keyup', function() {
  // ajax
  fetch('../../_backend/ajax/articleUser.php?keyword=' + keyword.value)
  .then((Response) => Response.text())
  .then((Response) => (container.innerHTML = Response));
})