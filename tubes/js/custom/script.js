// Menjalankan animasi skeleton loading setelah halaman selesai dimuat
window.addEventListener('load', function() {
  var elements1 = document.getElementsByClassName('pl-wave');
  var elements2 = document.getElementsByClassName('pl');
  var elements3 = document.querySelectorAll('img');
  for (var i = 0; i < elements1.length; i++) {
    elements1[i].classList.add('placeholder-wave');
  }
  for (var i = 0; i < elements2.length; i++) {
    elements2[i].classList.add('placeholder');
  }
  elements3.forEach((image) => {
    if (!image.closest("nav")) {
      image.classList.add("opacity-0");
    }
  });
});

// Simulasi waktu loading (contoh: 3 detik)
setTimeout(function() {
  var elementsTimeout = document.getElementsByClassName('pl-wave');
  var elementsTimeout2 = document.getElementsByClassName('pl');
  var elementsTimeout3 = document.querySelectorAll('img');
  for (var i = 0; i < elementsTimeout.length; i++) {
    elementsTimeout[i].classList.remove('placeholder-wave');
  }
  for (var i = 0; i < elementsTimeout2.length; i++) {
    elementsTimeout2[i].classList.remove('placeholder');
  }
  for (var i = 0; i < elementsTimeout3.length; i++) {
    elementsTimeout3[i].classList.remove('opacity-0');
  }
}, 1000);