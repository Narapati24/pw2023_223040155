$(document).ready(function () {
  $("#capture-btn").click(function () {
    var screenWidth = window.innerWidth;
    var screenHeight = window.innerHeight;

    html2canvas(document.body, {
      useCORS: true,
      width: screenWidth,
      height: screenHeight,
    }).then(function (canvas) {
      var screenshotData = canvas.toDataURL("image/png");
      uploadScreenshot(screenshotData);
    });
  });

  function uploadScreenshot(data) {
    $.ajax({
      type: "POST",
      url: "../_backend/screenshot/detailArticle.php",
      data: { screenshot: data },
      success: function (response) {
        if (response !== "failed") {
          $("#livePreview").html(
            '<img src="../_asset/img/reporting/' +
              response +
              '" class="img-fluid" alt="..."><input type="hidden" class="d-none" name="img" value="' +
              response +
              '" required>'
          );
        } else {
        }
      },
      error: function () {
        alert("An error occurred while uploading the screenshot.");
      },
    });
  }
});