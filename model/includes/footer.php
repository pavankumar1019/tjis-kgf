  <!-- ======= Footer ======= -->
  <footer id="footer">
      <div class="container">
          <h3>THE JAIN INTERNATIONAL SCHOOL</h3>
          <p>KRISHNAPURAM, KGF-563121</p>
          <div class="social-links">

              <a href="https://www.facebook.com/thejaininternationalschoolkgf/" class="facebook"><i
                      class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/tjis.kgf/?hl=en" class="instagram"><i class="bx bxl-instagram"></i></a>

              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
          <div class="copyright">
              &copy; Copyright <strong><span>pkwebdev</span></strong>. All Rights Reserved
          </div>
          <div class="credits">

              Designed by <a href="https://pkwebdev.com/">pkwebdev</a>
          </div>
      </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
          class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
function previewFile() {
    var preview = document.getElementById('preview_image');
    var file = document.querySelector('input[type=file]').files[0];
    var reader = new FileReader();

    reader.onloadend = function() {
        preview.src = reader.result;
        preview.style.display = 'block';
    }

    if (file) {
        reader.readAsDataURL(file);
    } else {
        preview.src = '';
        preview.style.display = 'none';
    }
}
  </script>
  <script>
$(document).on("submit", "#applynow", function(e) {
    e.preventDefault();
    $("#butsave").attr("disabled", "disabled");
    $("#butsave").html(
        '<span class="spinner-grow spinner-grow-sm" id="spinner" role="status" aria-hidden="true"></span>Loading...'
    );
    $.ajax({
        data: new FormData(this),
        type: "POST",
        url: "./api/main.php",
        contentType: false,
        processData: false,
        success: function(dataResult) {
            console.log(dataResult);
            if (dataResult[0].statusCode == 200) {
                swal({
                        title: "Thank You!",
                        text: "Your application has been submitted successfully. Our administrative office team will contact you soon.",
                        icon: "success",
                        button: "OK",
                    })
                    .then((value) => {
                        if (value) {
                          location.href = "<?=base()?>home";
                        }
                    });
            } else {
                // Display an error alert
                swal({
                        title: "Error",
                        text: "An error occurred while submitting the application. Please retry again.",
                        icon: "error",
                        buttons: {
                            retry: {
                                text: "Retry",
                                value: "retry",
                            },
                            cancel: "Cancel",
                        },
                    })
                    .then((value) => {
                        if (value === "retry") {
                            // Retry logic here, for example:
                            // Call a function to submit the application again
                            // Or reload the page
                            location.reload();
                        } else {
                            // Handle cancel or other actions if needed
                        }
                    });

            }
        },
    });

});
  </script>
  </body>

  </html>