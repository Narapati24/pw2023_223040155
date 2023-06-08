var keyword = document.getElementById('keyword');
var container = document.getElementById('container');

keyword.onkeyup = function () {
  fetch("ajax/search.php?keyword=" + keyword.value)
  .then((response) => response.text())
  .then((text) => (container.innerHTML = text));
}