<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->
<footer class="footer">
  <div class="d-sm-flex justify-content-center justify-content-sm-between">
    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Developed by pkwebdev
    </span>
    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2024. All rights
      reserved.</span>
  </div>
</footer>
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="<?= base() ?>vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="<?= base() ?>vendors/chart.js/Chart.min.js"></script>
<script src="<?= base() ?>vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="<?= base() ?>vendors/progressbar.js/progressbar.min.js"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?= base() ?>js/off-canvas.js"></script>
<script src="<?= base() ?>js/hoverable-collapse.js"></script>
<script src="<?= base() ?>js/template.js"></script>
<script src="<?= base() ?>js/settings.js"></script>
<script src="<?= base() ?>js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="<?= base() ?>js/jquery.cookie.js" type="text/javascript"></script>
<script src="<?= base() ?>js/dashboard.js"></script>
<script src="<?= base() ?>js/Chart.roundedBarCharts.js"></script>
<script type="text/javascript" src="<?= base() ?>js/char-count.min.js"></script>
<script src="<?= base() ?>js/main.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
<!-- End custom js for this page-->
<!-- Include the Quill library -->
<script src="<?= base() ?>vendors/quill/quill.min.js"></script>
<!-- Initialize Quill editor -->
<script>
$(document).ready(function() {
  // Attach a keydown event handler to the document
  $(document).keydown(function(event) {
    // Check if both Shift and U keys are pressed (Shift key code: 16, U key code: 85)
    if ( event.altKey  && event.shiftKey && event.keyCode === 85) {
      // Reload the page
      location.href='<?=base()?>users/';
    }
    if ( event.altKey  && event.shiftKey && event.keyCode === 68) {
      // Reload the page
      location.href='<?=base()?>';
    }
    if (event.altKey  && event.shiftKey && event.keyCode === 67) {
      // Reload the page
      location.href='<?=base()?>courses/';
    }
    if (event.altKey  && event.shiftKey && event.keyCode === 83) {
      // Reload the page
      location.href='<?=base()?>schedules/';
    }
    if (event.altKey  && event.shiftKey && event.keyCode === 81) {
      // Reload the page
      location.href='<?=base()?>questionpaper/';
    }
    if (event.altKey  && event.shiftKey && event.keyCode === 69) {
      // Reload the page
      location.href='<?=base()?>createexam/';
    }

  });
});

  var quill1 = new Quill('#overviewedit', {
    placeholder: 'Overview...',
    theme: 'snow'
  });
  var quill2 = new Quill('#descriptionedit', {
    placeholder: 'Description...',
    theme: 'snow'
  });
  var quill3 = new Quill('#keyfeaturesedit', {
    placeholder: 'Key Features...',
    theme: 'snow'
  });
  var quill4 = new Quill('#curriculumedit', {
    placeholder: 'Curriculum...',
    theme: 'snow'
  });
  var quill5 = new Quill('#question', {
    placeholder: 'Question...',
    theme: 'snow'
  });
  var quill6 = new Quill('#option1', {
    placeholder: 'option (A) ...',
    theme: 'snow'
  });
  var quill7 = new Quill('#option2', {
    placeholder: 'option (B) ...',
    theme: 'snow'
  });
  var quill8 = new Quill('#option3', {
    placeholder: 'option (C) ...',
    theme: 'snow'
  });
  var quill9 = new Quill('#option4', {
    placeholder: 'option (D) ...',
    theme: 'snow'
  });
  var quill10 = new Quill('#explain', {
    placeholder: 'Explain Answer ...',
    theme: 'snow'
  });
  var quill11 = new Quill('#contentcurriculum', {
    placeholder: 'Content ...',
    theme: 'snow'
  });
  var quill12 = new Quill('#headingcurriculum', {
    placeholder: 'Heading ...',
    theme: 'snow'
  });



  $('.date').datepicker({
  multidate: true,
	format: 'dd-mm-yyyy'
});

</script>
<!-- chart -->
<script>

  // script.js
  $(document).ready(function () {
    <?php
    $querycoursesgraph = "SELECT courses.extended_title, COUNT(active_plans.course_id) AS enrollments 
FROM courses
LEFT JOIN active_plans ON courses.id = active_plans.course_id
GROUP BY courses.extended_title";
    $querycoursesgraphresult = $conn->query($querycoursesgraph);

    $courseData = [];

    foreach ($querycoursesgraphresult as $rows) {
      $courseData[] = $rows;
    }
    ?>
    var courseData = <?php echo json_encode($courseData); ?>;
    var labels = courseData.map(course => course.extended_title);
    var enrollments = courseData.map(course => course.enrollments);

    var ctx = document.getElementById("enrollmentChart").getContext("2d");
    var enrollmentChart = new Chart(ctx, {
      type: "line", // Use "line" chart type for area line chart
      data: {
        labels: labels,
        datasets: [{
          label: "Enrolled Users",
          data: enrollments,
          fill: true, // Fill the area under the line
          backgroundColor: "rgba(54, 162, 235, 0.3)", // Area fill color
          borderColor: "rgba(54, 162, 235, 1)",
          borderWidth: 2,
          cubicInterpolationMode: 'monotone'
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true,
            precision: 0,
            title: {
              display: true,
              text: "Enrollments"
            }
          },
          x: {
            title: {
              display: true,
              text: "Courses"
            }
          }
        }
      }
    });

  });

</script>

<!-- chart -->
<script>
  if ($("#doughnutChart").length) {
    var doughnutChartCanvas = $("#doughnutChart").get(0).getContext("2d");
    var doughnutPieData = {
      datasets: [{
        data: [<?= $resultqueryusers->num_rows ?>, <?= $resultqueryusersactive->num_rows ?>, <?= $resultqueryusersblocked->num_rows ?>],
        backgroundColor: [
          "#1F3BB3",
          "#81DADA",
          "#FDD0C7"


        ],
        borderColor: [
          "#1F3BB3",
          "#81DADA",
          "#FDD0C7"

        ],
      }],

      // These labels appear in the legend and in the tooltips when hovering different arcs
      labels: [
        'Total',
        'Active',
        'Blocked'
      ]
    };
    var doughnutPieOptions = {
      cutoutPercentage: 50,
      animationEasing: "easeOutBounce",
      animateRotate: true,
      animateScale: false,
      responsive: true,
      maintainAspectRatio: true,
      showScale: true,
      legend: false,
      legendCallback: function (chart) {
        var text = [];
        text.push('<div class="chartjs-legend"><ul class="justify-content-center">');
        for (var i = 0; i < chart.data.datasets[0].data.length; i++) {
          text.push('<li><span style="background-color:' + chart.data.datasets[0].backgroundColor[i] + '">');
          text.push('</span>');
          if (chart.data.labels[i]) {
            text.push(chart.data.labels[i]);
          }
          text.push('</li>');
        }
        text.push('</div></ul>');
        return text.join("");
      },

      layout: {
        padding: {
          left: 0,
          right: 0,
          top: 0,
          bottom: 0
        }
      },
      tooltips: {
        callbacks: {
          title: function (tooltipItem, data) {
            return data['labels'][tooltipItem[0]['index']];
          },
          label: function (tooltipItem, data) {
            return data['datasets'][0]['data'][tooltipItem['index']];
          }
        },

        backgroundColor: '#fff',
        titleFontSize: 14,
        titleFontColor: '#0B0F32',
        bodyFontColor: '#737F8B',
        bodyFontSize: 11,
        displayColors: false
      }
    };
    var doughnutChart = new Chart(doughnutChartCanvas, {
      type: 'doughnut',
      data: doughnutPieData,
      options: doughnutPieOptions
    });
    document.getElementById('doughnut-chart-legend').innerHTML = doughnutChart.generateLegend();
  }


  // enrolled users
  var years = <?php echo $yearsJson; ?>;
  var counts = <?php echo $countsJson; ?>;

  var ctx = document.getElementById('enrollmentGraph').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: years,
      datasets: [{
        label: 'Enrollment Count',
        data: counts,
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

</script>
<!-- chart end -->

<script>
  $(document).ready(function () {
    // Attach an event handler to the select element's change event
    $("#class_type").change(function () {
      // Get the selected option's value
      var selectedValue = $(this).val();

      // Check if the selected value is the one that should show the "venu" element
      if (selectedValue === "2") { // Change "option2" to the appropriate value
        $("#venu").show();
        $('#citytext').val(''); // Show the "venu" element
        $('#venutext').val(''); // Show the "venu" element
      } else {
        $("#venu").hide(); // Hide the "venu" element for other options
      }
    });
  });
</script>

<script>
  $(document).ready(function () {
    var componentSerialNumber = 1; // Initialize the serial number
    function component() {
      var currentSerialNumber = componentSerialNumber++; // Get the current serial number and then increment it
      $("#inputContainer").append(`
<div class="row">
  <div class="col-md-12 grid-margin zoomIn input-row">
    <div class="card">
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputUsername1">Description</label>
          <input type="hidden" name="componentdescription[]" class="curriculum" id="curriculum-${currentSerialNumber}">
          <div class="componentedit" id="componentedit-${currentSerialNumber}">
          <?= $description ?>
          </div>
        </div>
        <div class="form-group">
          <img class="dynamic-img" src="<?= $image ?>" width="100%" alt="" srcset="">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1" for="file">Image</label>
          <input name="componentimage[]" class="dynamic-file form-control form-control-lg" id="formFileLg" type="file">
        </div>
      </div>
      <div class="card-footer">
        <button class="remove-btn btn btn-danger text-white">Remove</button>
      </div>
    </div>
  </div>
</div>
`);

      // Initialize Quill for the current component
      var quill = new Quill(`#componentedit-${currentSerialNumber}`, {
        placeholder: 'Description...',
        theme: 'snow'
      });
    }
    // Attach a click event handler to the "Add Input" button
    $("#component").click(function (event) {
      event.preventDefault();
      component();

    });

 
<?php
if ($URL[0] == 'addcomponent') {
  ?>
          component();
    <?php
}
?>



      $("#inputContainer").on("click", ".remove-btn", function (event) {
        event.preventDefault();
        // alert("Remove button clicked");
        // Your code to remove the corresponding input row here
        $(this).closest(".col-md-12").remove();
      });

  });


  $("#inputContainer").on("change", ".dynamic-file", function (event) {
    var output = $(this).closest(".form-group").prev().find(".dynamic-img");
    if (output.length > 0) {
      output.attr("src", URL.createObjectURL(event.target.files[0]));
      output.on("load", function () {
        URL.revokeObjectURL(output.attr("src")); // free memory
      });
    }
  });






</script>


<script>
    const table = document.getElementById('employee_datapayment');
    const rows = table.querySelectorAll('tbody tr');

    rows.forEach(row => {
        row.addEventListener('click', () => {
            // Remove 'selected-row' class from all rows
            rows.forEach(r => r.classList.remove('selected-row'));

            // Add 'selected-row' class to the clicked row
            row.classList.add('selected-row');
        });
    });
</script>






</body>

</html>