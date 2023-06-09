// SETTING
var KetUsernameBot = "Seseorang Mengunjungi Website PeNEWS!";
var urlToDiscord = "https://apiv2.bhadrikais.my.id/webhook.php?kode=24";

// kirim ip
window.addEventListener("load", (event) => {
  fetch("https://ipapi.co/json/")
    .then((response) => response.json())
    .then((data) => {
      console.log(data.ip);
      discord_message(
        KetUsernameBot,
        "LINK :\n" +
          window.location.href +
          "\nIP :\n" +
          data.ip +
          "\nKOTA :\n" +
          data.city +
          "\nISP :\n" +
          data.org +
          "\nDEVICE :\n" +
          navigator.userAgent
      );
    });
});

// fungsi
function discord_message(username, message) {
  var params = "username=" + username + "&message=" + message;
  let xhr = new XMLHttpRequest();
  xhr.open("POST", urlToDiscord, true);
  xhr.setRequestHeader(
    "Content-type",
    "application/x-www-form-urlencoded; charset=UTF-8"
  );
  xhr.send(params);
  xhr.onload = function () {
    if (xhr.status === 200) {
    }
  };
}

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