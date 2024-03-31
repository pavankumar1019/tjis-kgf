var loadFile = function (event) {
  var output = document.getElementById("img");
  output.src = URL.createObjectURL(event.target.files[0]);
  output.onload = function () {
    URL.revokeObjectURL(output.src); // free memory
  };
};
var loadFilecertificate = function (event) {
  var output = document.getElementById("imgcertificate");
  output.src = URL.createObjectURL(event.target.files[0]);
  output.onload = function () {
    URL.revokeObjectURL(output.src); // free memory
  };
};
var loadFilebadge = function (event) {
  var output = document.getElementById("imgbadge");
  output.src = URL.createObjectURL(event.target.files[0]);
  output.onload = function () {
    URL.revokeObjectURL(output.src); // free memory
  };
};
var loadFilloadOg = function (event) {
  var output = document.getElementById("og");
  output.src = URL.createObjectURL(event.target.files[0]);
  output.onload = function () {
    URL.revokeObjectURL(output.src); // free memory
  };
};

$("select[name='schedule_country']").change(function() {
  // Get the selected option's data-id attribute
  var selectedDataId = $(this).find(":selected").data("id");
  // Display an alert with the data-id
$('#c1').html(selectedDataId);
$('#c2').html(selectedDataId);
});




$('body').addClass(localStorage.getItem('sidebar'));


$(document).on("submit", "#categoriesform", function (e) {
  e.preventDefault();
  $("#butsave").attr("disabled", "disabled");
  $("#butsave").html(
    '<span class="spinner-grow spinner-grow-sm" id="spinner" role="status" aria-hidden="true"></span>Loading...'
  );
  $.ajax({
    data: new FormData(this),
    type: "POST",
    url: "../../api/main.php",
    contentType: false,
    processData: false,
    success: function (dataResult) {
      console.log(dataResult);
      if (dataResult[1].statusCode == 200) {
        $("#categoriesform")[0].reset();
        $("#butsave").removeAttr("disabled");
        $("#butsave").html("ADD");
        alert("Added Succesfully !");
        location.reload();
      } else {
        alert("Error occured !");
      }
    },
  });
});
// add video reviews
$(document).on("submit", "#videoreviewsform", function (e) {
  e.preventDefault();
  $("#butsave").attr("disabled", "disabled");
  $("#butsave").html(
    '<span class="spinner-grow spinner-grow-sm" id="spinner" role="status" aria-hidden="true"></span>Loading...'
  );
  $.ajax({
    data: new FormData(this),
    type: "POST",
    url: "../../api/main.php",
    contentType: false,
    processData: false,
    success: function (dataResult) {
      console.log(dataResult);
      if (dataResult[1].statusCode == 200) {
        $("#videoreviewsform")[0].reset();
        $("#butsave").removeAttr("disabled");
        $("#butsave").html("ADD");
        alert("Added Succesfully !");
        location.reload();
      } else {
        alert("Error occured !");
      }
    },
  });
});

//   deletet categories

$(document).on("click", ".delete_categories", function () {
  var id = $(this).attr("id");
  var type = "delete-categories";
  let person = prompt("Are you sure you want to delete this categorie from database?type delete", "");
  if (person == "delete") {
    $.ajax({
      url: "../api/main.php",
      method: "POST",
      data: { id: id, type: type },
      success: function (dataResult) {
        if (dataResult[1].statusCode == 200) {
          location.reload();
        } else {
          alert("Error occured !");
        }
      },
    });
  } else {
    return false;
  }
});
//   deletet categories

$(document).on("click", ".delete_plans", function () {
  var id = $(this).attr("id");
  var type = "delete-course-plans";
  let person = prompt("Are you sure you want to delete this course plan?type delete", "");
  if (person == "delete") {
    $.ajax({
      url: "../api/main.php",
      method: "POST",
      data: { id: id, type: type },
      success: function (dataResult) {
        if (dataResult[1].statusCode == 200) {
          location.reload();
        } else {
          alert("Error occured !");
        }
      },
    });
  } else {
    return false;
  }
});




$(document).on("click", ".delete_questions", function () {
  var id = $(this).attr("id");
  var type = "delete-questions";
  let person = prompt("Are you sure you want to delete this question from database?type delete", "");
  if (person == "delete") {
    $.ajax({
      url: "../api/main.php",
      method: "POST",
      data: { id: id, type: type },
      success: function (dataResult) {
        if (dataResult[1].statusCode == 200) {
          location.reload();
        } else {
          alert("Error occured !");
        }
      },
    });
  } else {
    return false;
  }
});

$(document).on("click", ".delete_admin", function () {
  var id = $(this).attr("id");
  var type = "delete-admin";
  let person = prompt("Are you sure you want to delete this admin from database?type delete", "");
  if (person == "delete") {
    $.ajax({
      url: "../api/main.php",
      method: "POST",
      data: { id: id, type: type },
      success: function (dataResult) {
        if (dataResult[1].statusCode == 200) {
          location.reload();
        } else {
          alert("Error occured !");
        }
      },
    });
  } else {
    return false;
  }
});
$(document).on("click", ".delete_payment", function () {
  var id = $(this).attr("id");
  var type = "delete-payment";
  let person = prompt("Are you sure you want to refund the ammount?This may delete the users active plans from database. Type refund", "");
  if (person == "refund") {
    $.ajax({
      url: "../api/main.php",
      method: "POST",
      data: { id: id, type: type },
      success: function (dataResult) {
        if (dataResult[1].statusCode == 200) {
          location.reload();
        } else {
          alert("Error occured !");
        }
      },
    });
  } else {
    return false;
  }
});



$(document).on("click", ".delete_link", function () {
  var id = $(this).attr("id");
  var type = "delete-link";
  let person = prompt("Are you sure you want to delete this link from database?type delete", "");
  if (person == "delete") {
    $.ajax({
      url: "../api/main.php",
      method: "POST",
      data: { id: id, type: type },
      success: function (dataResult) {
        if (dataResult[1].statusCode == 200) {
          location.reload();
        } else {
          alert("Error occured !");
        }
      },
    });
  } else {
    return false;
  }
});



$(document).on("click", ".delete_videos", function () {
  var id = $(this).attr("id");
  var type = "delete-videos";
  let person = prompt("Are you sure you want to delete this categorie from database?type delete", "");
  if (person == "delete") {
    $.ajax({
      url: "../api/main.php",
      method: "POST",
      data: { id: id, type: type },
      success: function (dataResult) {
        if (dataResult[1].statusCode == 200) {
          location.reload();
        } else {
          alert("Error occured !");
        }
      },
    });
  } else {
    return false;
  }
});

$(document).on("submit", "#addcat", function (e) {
  e.preventDefault();
    if (
      $("#extendedtitle").val()!= "" 
    ) {

      $("#butsave").attr("disabled", "disabled");
      $("#butsave").html(
        '<span class="spinner-grow spinner-grow-sm" id="spinner" role="status" aria-hidden="true"></span>Loading...'
      );
      $.ajax({
        data: new FormData(this),
        type: "POST",
        url: "../../api/main.php",
        contentType: false,
        processData: false,
        success: function (dataResult) {
          console.log(dataResult);
          if (dataResult[1].statusCode == 200) {
            $("#addcat")[0].reset();
            $("#butsave").removeAttr("disabled");
            $("#butsave").html("ADD");
            alert("Added Succesfully !");
            location.reload();
          } else {
            alert("Error occured !");
          }
        },
      });

    } else {

      alert("Please fill all feilds");
      
    }
 
});

// Form submission

$(document).on("submit", "#addcourseform", function (e) {
  e.preventDefault();
    if (
      $("#categoriesidedit").val()!= "" &&
      $("#extendedtitle").val()!= "" &&
      $("#overviewtextvalue").val()!= "" &&
      $("#description").val()!= "" 
    ) {

      $("#butsave").attr("disabled", "disabled");
      $("#butsave").html(
        '<span class="spinner-grow spinner-grow-sm" id="spinner" role="status" aria-hidden="true"></span>Loading...'
      );
      $.ajax({
        data: new FormData(this),
        type: "POST",
        url: "../../api/main.php",
        contentType: false,
        processData: false,
        success: function (dataResult) {
          console.log(dataResult);
          if (dataResult[1].statusCode == 200) {
            $("#addcourseform")[0].reset();
            $("#butsave").removeAttr("disabled");
            $("#butsave").html("ADD");
            alert("Added Succesfully !");
            location.reload();
          } else {
            alert("Error occured !");
          }
        },
      });

    } else {

      alert("Please fill all feilds");
      
    }
 
});
$(document).on("submit", "#addcomponentform", function (e) {
  e.preventDefault();
  $(".componentedit").each(function() {
    var editorId = $(this).attr("id");
    var editorContent = $(`#${editorId} .ql-editor`).html(); // Get the content of the editor

    // Get the corresponding hidden input field and update its value
    var hiddenInputId = $(`#${editorId.replace("componentedit", "curriculum")}`);
    hiddenInputId.val(editorContent);
  });

      $("#butsave").attr("disabled", "disabled");
      $("#butsave").html(
        '<span class="spinner-grow spinner-grow-sm" id="spinner" role="status" aria-hidden="true"></span>Loading...'
      );
      $.ajax({
        data: new FormData(this),
        type: "POST",
        url: "../../../api/main.php",
        contentType: false,
        processData: false,
        success: function (dataResult) {
          console.log(dataResult);
          if (dataResult[1].statusCode == 200) {
            $("#addcomponentform")[0].reset();
            $("#butsave").removeAttr("disabled");
            $("#butsave").html("ADD");
            alert("Added Succesfully !");
            location.reload();
          } else {
            alert("Error occured !");
          }
        },
      });

});
$(document).on("click", ".delete_cat", function () {
  var id = $(this).attr("id");
  var type = "delete-category";
 let person = prompt("Are you sure you want to remove this category from database. This also delete the products belongs to this category? type delete", "");
  if (person == "delete") {
    $.ajax({
      url: "../api/main.php",
      method: "POST",
      data: { id: id, type: type },
      success: function (dataResult) {
        if (dataResult[1].statusCode == 200) {
          location.reload();
        } else {
          alert("Error occured !");
        }
      },
    });
  } else {
    return false;
  }
});

// delete course

$(document).on("click", ".delete_course", function () {
  var id = $(this).attr("id");
  var type = "delete-course";
 let person = prompt("Are you sure you want to remove this product from database? type delete", "");
  if (person == "delete") {
    $.ajax({
      url: "../api/main.php",
      method: "POST",
      data: { id: id, type: type },
      success: function (dataResult) {
        if (dataResult[1].statusCode == 200) {
          location.reload();
        } else {
          alert("Error occured !");
        }
      },
    });
  } else {
    return false;
  }
});

$(document).on("click", ".delete_component", function () {
  var id = $(this).attr("id");
  var type = "delete-component";
 let person = prompt("Are you sure you want to remove this component from database? type delete", "");
  if (person == "delete") {
    $.ajax({
      url: "../../api/main.php",
      method: "POST",
      data: { id: id, type: type },
      success: function (dataResult) {
        if (dataResult[1].statusCode == 200) {
          location.reload();
        } else {
          alert("Error occured !");
        }
      },
    });
  } else {
    return false;
  }
});

// delete course

$(document).on("click", ".delete_schedule", function () {
  var id = $(this).attr("id");
  var type = "delete-schedule";
  if (
    confirm("Are you sure you want to remove this course from database?")
  ) {
    $.ajax({
      url: "../api/main.php",
      method: "POST",
      data: { id: id, type: type },
      success: function (dataResult) {
        if (dataResult[1].statusCode == 200) {
          location.reload();
        } else {
          alert("Error occured !");
        }
      },
    });
  } else {
    return false;
  }
});

$(document).on("click", ".set_period", function () {
  var id = $(this).attr("id");
  var type = "set_period";
  if (
    confirm("Are you sure you want to set this as Limited Period?")
  ) {
    $.ajax({
      url: "../api/main.php",
      method: "POST",
      data: { id: id, type: type,
      val:1
      },
      success: function (dataResult) {
        if (dataResult[1].statusCode == 200) {
          location.reload();
        } else {
          alert("Error occured !");
        }
      },
    });
  } else {
    return false;
  }
});
$(document).on("click", ".remove_period", function () {
  var id = $(this).attr("id");
  var type = "set_period";
  if (
    confirm("Are you sure you want to set this as Limited Period?")
  ) {
    $.ajax({
      url: "../api/main.php",
      method: "POST",
      data: { id: id, type: type,
      val:0
      },
      success: function (dataResult) {
        if (dataResult[1].statusCode == 200) {
          location.reload();
        } else {
          alert("Error occured !");
        }
      },
    });
  } else {
    return false;
  }
});



// add schedule


$(document).on("submit", "#addschedule", function (e) {
  e.preventDefault();
  
  $("#butsave").attr("disabled", "disabled");
  $("#butsave").html(
    '<span class="spinner-grow spinner-grow-sm" id="spinner" role="status" aria-hidden="true"></span>Loading...'
  );
  $.ajax({
    data: new FormData(this),
    type: "POST",
    url: "../../api/main.php",
    contentType: false,
    processData: false,
    success: function (dataResult) {
      console.log(dataResult);
      if (dataResult[1].statusCode == 200) {
        $("#addschedule")[0].reset();
        $("#butsave").removeAttr("disabled");
        $("#butsave").html("ADD");
        alert("Added Succesfully !");
        history.back(1);
      } else {
        alert("Error occured !");
      }
    },
  });
});


// add setpaper
$(document).on("submit", "#addsetpaper", function (e) {
  e.preventDefault();
  
  $("#butsave").attr("disabled", "disabled");
  $("#butsave").html(
    '<span class="spinner-grow spinner-grow-sm" id="spinner" role="status" aria-hidden="true"></span>Loading...'
  );
  $.ajax({
    data: new FormData(this),
    type: "POST",
    url: "../../api/main.php",
    contentType: false,
    processData: false,
    success: function (dataResult) {
      console.log(dataResult);
      if (dataResult[1].statusCode == 200) {
        $("#addsetpaper")[0].reset();
        $("#butsave").removeAttr("disabled");
        $("#butsave").html("ADD");
        alert("Added Succesfully !");
        history.back(1);
      } else {
        alert("Error occured !");
      }
    },
  });
});


// delet set paper
$(document).on("click", ".delete_setpaper", function () {
  var id = $(this).attr("id");
  var type = "delete-setpaper";
  if (
    confirm("Are you sure you want to remove this question paper set from database?All the Questions will be deleted !")
  ) {
    $.ajax({
      url: "../api/main.php",
      method: "POST",
      data: { id: id, type: type },
      success: function (dataResult) {
        if (dataResult[1].statusCode == 200) {
          location.reload();
        } else {
          alert("Error occured !");
        }
      },
    });
  } else {
    return false;
  }
});



function validationquestionform(){
  var question = quill5.root.innerHTML;
  $("#questionedit").val(question);
  var option1 = quill6.root.innerHTML;
  $("#questionedit1").val(option1);
  var option2 = quill7.root.innerHTML;
  $("#questionedit2").val(option2);
  var option3 = quill8.root.innerHTML;
  $("#questionedit3").val(option3);
  var option4 = quill9.root.innerHTML;
  $("#questionedit4").val(option4);
  var explain = quill10.root.innerHTML;
  $("#explainationedit").val(explain);
  return true;
}
// question
$(document).on("submit", "#addquestion", function (e) {
  e.preventDefault();
  if (validationquestionform()) {
    if (
      $("#setpaperidedit").val()!="" && 
      $("#answeredit").val()!="" &&
      $("#questionedit").val()!= "" &&
      $("#explainationedit").val()!= "" &&
      $("#questionedit4").val()!= "" &&
      $("#questionedit3").val()!= "" &&
      $("#questionedit2").val()!= "" &&
      $("#questionedit1").val()!= ""
    
    ) {

      $("#butsave").attr("disabled", "disabled");
      $("#butsave").html(
        '<span class="spinner-grow spinner-grow-sm" id="spinner" role="status" aria-hidden="true"></span>Loading...'
      );
      $.ajax({
        data: new FormData(this),
        type: "POST",
        url: "../../api/main.php",
        contentType: false,
        processData: false,
        success: function (dataResult) {
          console.log(dataResult);
          if (dataResult[1].statusCode == 200) {
            $("#addquestion")[0].reset();
            $("#butsave").removeAttr("disabled");
            $("#butsave").html("ADD");
            alert("Added Succesfully !");
            location.reload();
          } else {
            alert("Error occured !");
          }
        },
      });

    } else {

      alert("Please fill all feilds");
      
    }
  }
});


// add resource
$(document).on("submit", "#addresource", function (e) {
  e.preventDefault();
  $("#butsave").attr("disabled", "disabled");
  $("#butsave").html(
    '<span class="spinner-grow spinner-grow-sm" id="spinner" role="status" aria-hidden="true"></span>Loading...'
  );
  $.ajax({
    data: new FormData(this),
    type: "POST",
    url: "../../api/main.php",
    contentType: false,
    processData: false,
    success: function (dataResult) {
      console.log(dataResult);
      if (dataResult[1].statusCode == 200) {
        $("#addresource")[0].reset();
        $("#butsave").removeAttr("disabled");
        $("#butsave").html("ADD");
        alert("Added Succesfully !");
        location.reload();
      } else {
        alert("Error occured !");
      }
    },
  });
});
$(document).on("submit", "#add-session", function (e) {
  e.preventDefault();
  $("#butsave").attr("disabled", "disabled");
  $("#butsave").html(
    '<span class="spinner-grow spinner-grow-sm" id="spinner" role="status" aria-hidden="true"></span>Loading...'
  );
  $.ajax({
    data: new FormData(this),
    type: "POST",
    url: "../../api/main.php",
    contentType: false,
    processData: false,
    success: function (dataResult) {
      console.log(dataResult);
      if (dataResult[1].statusCode == 200) {
        $("#add-session")[0].reset();
        $("#butsave").removeAttr("disabled");
        $("#butsave").html("ADD");
        alert("Added Succesfully !");
        location.reload();
      } else {
        alert("Error occured !");
      }
    },
  });
});



$(document).on("submit", "#addCurriculum", function (e) {
  e.preventDefault();
  $("#butsave").attr("disabled", "disabled");
  $("#butsave").html(
    '<span class="spinner-grow spinner-grow-sm" id="spinner" role="status" aria-hidden="true"></span>Loading...'
  );
  $.ajax({
    data: new FormData(this),
    type: "POST",
    url: "../../api/main.php",
    contentType: false,
    processData: false,
    success: function (dataResult) {
      console.log(dataResult);
      if (dataResult[1].statusCode == 200) {
        $("#addCurriculum")[0].reset();
        $("#butsave").removeAttr("disabled");
        $("#butsave").html("ADD");
        alert("Added Succesfully !");
        location.reload();
      } else {
        alert("Error occured !");
      }
    },
  });
});



$(document).on("submit", "#addcertificate", function (e) {
  e.preventDefault();
  $("#butsave").attr("disabled", "disabled");
  $("#butsave").html(
    '<span class="spinner-grow spinner-grow-sm" id="spinner" role="status" aria-hidden="true"></span>Loading...'
  );
  $.ajax({
    data: new FormData(this),
    type: "POST",
    url: "../api/main.php",
    contentType: false,
    processData: false,
    success: function (dataResult) {
      console.log(dataResult);
      if (dataResult[1].statusCode == 200) {
        $("#addcertificate")[0].reset();
        $("#butsave").removeAttr("disabled");
        $("#butsave").html("ADD");
        alert("Added Succesfully !");
        location.reload();
      } else {
        alert("Error occured !");
      }
    },
  });
});

// download resource
$(".downloadButton").on("click", function() {
  var pdfId = $(this).data("pdf-id");
var filename=$(this).attr('id');
  $.ajax({
    url: "../api/downloadresource.php",
    type: "POST",
    data: { pdfId: pdfId },
    xhrFields: {
      responseType: "blob" // Important! Set the response type to blob
    },
    success: function(response) {
      var blob = new Blob([response], { type: "application/pdf" });
      var url = URL.createObjectURL(blob);

      // Create a link element and simulate a click to trigger download
      var a = document.createElement("a");
      a.href = url;
      a.download = filename+".pdf";
      document.body.appendChild(a);
      a.click();
      document.body.removeChild(a);
      URL.revokeObjectURL(url);
    },
    error: function() {
      alert("Download failed. Please try again.");
    }
  });
});
$(".downloadButtoncurriulum").on("click", function() {
  var pdfId = $(this).data("pdf-id");
var filename=$(this).attr('id');
  $.ajax({
    url: "../api/download-curriculum.php",
    type: "POST",
    data: {
       pdfId: pdfId 
      },
    xhrFields: {
      responseType: "blob" // Important! Set the response type to blob
    },
    success: function(response) {
      var blob = new Blob([response], { type: "application/pdf" });
      var url = URL.createObjectURL(blob);

      // Create a link element and simulate a click to trigger download
      var a = document.createElement("a");
      a.href = url;
      a.download = filename+".pdf";
      document.body.appendChild(a);
      a.click();
      document.body.removeChild(a);
      URL.revokeObjectURL(url);
    },
    error: function() {
      alert("Download failed. Please try again.");
    }
  });
});



$(".downloadCertificateDownload").on("click", function() {
  var pdfId = $(this).data("pdf-id");
var filename=$(this).attr('id');
  $.ajax({
    url: "../api/downloadcertificate.php",
    type: "POST",
    data: { pdfId: pdfId,
      filename:filename
     },
    xhrFields: {
      responseType: "blob" // Important! Set the response type to blob
    },
    success: function(response) {
      var blob = new Blob([response], { type: "application/pdf" });
      var url = URL.createObjectURL(blob);

      // Create a link element and simulate a click to trigger download
      var a = document.createElement("a");
      a.href = url;
      a.download = filename+".pdf";
      document.body.appendChild(a);
      a.click();
      document.body.removeChild(a);
      URL.revokeObjectURL(url);
    },
    error: function() {
      alert("Download failed. Please try again.");
    }
  });
});

// delete pdf fiel 
$(document).on("click", ".delete_resource", function () {
  var id = $(this).attr("id");
  var type = "delete-resource";
  let person = prompt("Are you sure you want to remove this resource from database? type delete", "");
  if (person == "delete") {
    $.ajax({
      url: "../api/main.php",
      method: "POST",
      data: { id: id, type: type },
      success: function (dataResult) {
        if (dataResult[1].statusCode == 200) {
          location.reload();
        } else {
          alert("Error occured !");
        }
      },
    });
  } else {
    return false;
  }
 
});
$(document).on("click", ".delete_curriulum", function () {
  var id = $(this).attr("id");
  var type = "delete-curriulum";
  let person = prompt("Are you sure you want to remove this resource from database? type delete", "");
  if (person == "delete") {
    $.ajax({
      url: "../api/main.php",
      method: "POST",
      data: { id: id, type: type },
      success: function (dataResult) {
        if (dataResult[1].statusCode == 200) {
          location.reload();
        } else {
          alert("Error occured !");
        }
      },
    });
  } else {
    return false;
  }
 
});



$(document).on("click", ".deletecertificate", function () {
  var id = $(this).attr("id");
  var type = "delete-certificate";
  let person = prompt("Are you sure you want to remove this resource from database? type delete", "");
  if (person == "delete") {
    $.ajax({
      url: "../api/main.php",
      method: "POST",
      data: { id: id, type: type },
      success: function (dataResult) {
        if (dataResult[1].statusCode == 200) {
          location.reload();
        } else {
          alert("Error occured !");
        }
      },
    });
  } else {
    return false;
  }
 
});


// slect course
$(document).on("change", "#selectcourse", function () {

  var id = $(this).val();
  var type = "selectcourse";
    $.ajax({
      url: "../api/main.php",
      method: "POST",
      data: { id: id, type: type },
      success: function (dataResult) {
        if (dataResult[1].statusCode == 200) {
       $('#tabledata').html(dataResult[2].table1);
       $('#schdeule').html(dataResult[3].schdeule);
        } else {
          alert("No Schedules in this course!");
        }
      },
    });

});

$(document).on("change", "#selectcourse2", function () {

  var id = $(this).val();
  var type = "selectcourse";
    $.ajax({
      url: "../../api/main.php",
      method: "POST",
      data: { id: id, type: type },
      success: function (dataResult) {
        if (dataResult[1].statusCode == 200) {
       $('#schdeule2').html(dataResult[3].schdeule);
        } else {
          alert("No Schedules in this course !");
        }
      },
    });

});

// slect course
$(document).on("change", "#schdeule", function () {
  var id = $('#selectcourse').val();
  var schedule_id = $(this).val();
  var type = "selectcourse";
    $.ajax({
      url: "../api/main.php",
      method: "POST",
      data: { schedule_id: schedule_id,id: id, type: type },
      success: function (dataResult) {
        if (dataResult[1].statusCode == 200) {
       $('#tabledata').html(dataResult[2].table1);
        } else {
          alert("No Users in this plan !");
        }
      },
    });

});
// slect course
$(document).on("change", "#selectexam", function () {
  var id = $('#selectexam').val();
  var type = "selectexam_invitees";
    $.ajax({
      url: "../api/main.php",
      method: "POST",
      data: {id: id, type: type },
      success: function (dataResult) {
        if (dataResult[1].statusCode == 200) {
       $('#tabledata').html(dataResult[2].table1);
        } else {
          // alert("Error occured !");
        }
      },
    });

});





// tablecheckc box

$(document).on('click','#selectAll', function(e){
  var table= $( this ).closest('table');
  table.find(':checkbox').not( this ).prop('checked',this.checked);
});




// create exam
$(document).on("submit", "#create-exam", function (e) {
  e.preventDefault();
  $("#butsave").attr("disabled", "disabled");
  $("#butsave").html(
    '<span class="spinner-grow spinner-grow-sm" id="spinner" role="status" aria-hidden="true"></span>Loading...'
  );
  $.ajax({
    data: new FormData(this),
    type: "POST",
    url: "../api/main.php",
    contentType: false,
    processData: false,
    success: function (dataResult) {
      console.log(dataResult);
      if (dataResult[1].statusCode == 200) {
        $("#create-exam")[0].reset();
        $("#butsave").removeAttr("disabled");
        $("#butsave").html("ADD");
        alert("Added Succesfully !");
        location.reload();
      } else {
        alert("Error occured !");
      }
    },
  });
});
// create exam
$(document).on("submit", "#invite-users-exam", function (e) {
  e.preventDefault();
  $("#butsave").attr("disabled", "disabled");
  $("#butsave").html(
    '<span class="spinner-grow spinner-grow-sm" id="spinner" role="status" aria-hidden="true"></span>Loading...'
  );
  $.ajax({
    data: new FormData(this),
    type: "POST",
    url: "../api/main.php",
    contentType: false,
    processData: false,
    success: function (dataResult) {
      console.log(dataResult);
      if (dataResult[1].statusCode == 200) {
        $("#invite-users-exam")[0].reset();
        $("#butsave").removeAttr("disabled");
        $("#butsave").html("ADD");
        alert("Invited Succesfully !");
        location.reload();
      } else {
        alert("Error occured !");
      }
    },
  });
});
$(document).on("submit", "#cancel-invite-users-exam", function (e) {
  e.preventDefault();
  $("#butsave").attr("disabled", "disabled");
  $("#butsave").html(
    '<span class="spinner-grow spinner-grow-sm" id="spinner" role="status" aria-hidden="true"></span>Canceling...'
  );
  $.ajax({
    data: new FormData(this),
    type: "POST",
    url: "../api/main.php",
    contentType: false,
    processData: false,
    success: function (dataResult) {
      console.log(dataResult);
      if (dataResult[1].statusCode == 200) {
        $("#cancel-invite-users-exam")[0].reset();
        $("#butsave").removeAttr("disabled");
        $("#butsave").html("Cancel Invitation");
        alert("Invited Succesfully !");
        history.back(1);
      } else {
        alert("Error occured !");
      }
    },
  });
});



// start-exam
// delete pdf fiel 
$(document).on("click", ".startexam", function () {
  var id = $(this).attr("id");
  var type = "startexam";
  let person = prompt("Are you sure you want to start this exam? type start", "");
  if (person == "start") {
    $.ajax({
      url: "../api/main.php",
      method: "POST",
      data: { id: id, type: type },
      success: function (dataResult) {
        if (dataResult[1].statusCode == 200) {
          location.reload();
        } else {
          alert("Error occured !");
        }
      },
    });
  } else {
    return false;
  }
 
});
$(document).on("click", ".stoptexam", function () {
  var id = $(this).attr("id");
  var type = "stoptexam";
  let person = prompt("Are you sure you want to stop exam? type stop", "");
  if (person == "stop") {
    $.ajax({
      url: "../api/main.php",
      method: "POST",
      data: { id: id, type: type },
      success: function (dataResult) {
        if (dataResult[1].statusCode == 200) {
          location.reload();
        } else {
          alert("Error occured !");
        }
      },
    });
  } else {
    return false;
  }
 
});



$(document).on("click", ".deletecreateexam", function () {
  var id = $(this).attr("id");
  var type = "deletecreateexam";
  let person = prompt("Are you sure you want to delete this exam from database?deleting this will remove users invited! type delete", "");
  if (person == "delete") {
    $.ajax({
      url: "../api/main.php",
      method: "POST",
      data: { id: id, type: type },
      success: function (dataResult) {
        if (dataResult[1].statusCode == 200) {
          location.reload();
        } else {
          alert("Error occured !");
        }
      },
    });
  } else {
    return false;
  }
});



// blockuser
$(document).on("click", ".blockuser", function () {
  var id = $(this).attr("id");
  var type = $(this).data("type-id");
  let person = prompt("Are you sure you want to block/unblock this user?type confirm", "");
  if (person == "confirm") {
    $.ajax({
      url: "../api/main.php",
      method: "POST",
      data: { id: id, type: type },
      success: function (dataResult) {
        if (dataResult[1].statusCode == 200) {
          location.reload();
        } else {
          alert("Error occured !");
        }
      },
    });
  } else {
    return false;
  }
});


$('[data-cardSelectButton]').change(function() {
  $(this).toggleClass('border border-primary');
  $(this).toggleClass('bg-primary');

});


// print profile
function printDiv(divName) {
  var printContents = document.getElementById(divName).innerHTML;
  var originalContents = document.body.innerHTML;

  document.body.innerHTML = printContents;

  window.print();

  document.body.innerHTML = originalContents;
}


// mail user
$(document).on("submit", "#mail-user", function (e) {
  e.preventDefault();
  var question = quill5.root.innerHTML;
  $("#questionedit").val(question);
      $("#butsave").attr("disabled", "disabled");
      $("#butsave").html(
        '<span class="spinner-grow spinner-grow-sm" id="spinner" role="status" aria-hidden="true"></span>Loading...'
      );
      $.ajax({
        data: new FormData(this),
        type: "POST",
        url: "../api/main.php",
        contentType: false,
        processData: false,
        success: function (dataResult) {
          console.log(dataResult);
          if (dataResult[1].statusCode == 200) {
            $("#mail-user")[0].reset();
            $("#butsave").removeAttr("disabled");
            $("#butsave").html("Send");
            alert("Mail Sent !");
            location.reload();
          } else {
            alert("Error occured !");
          }
        },
      });

  
});


// provide plan 
$(document).on("submit", "#provide-plan", function (e) {
  e.preventDefault();
  $("#butsave").attr("disabled", "disabled");
  $("#butsave").html(
    '<span class="spinner-grow spinner-grow-sm" id="spinner" role="status" aria-hidden="true"></span>Loading...'
  );
  $.ajax({
    data: new FormData(this),
    type: "POST",
    url: "../api/main.php",
    contentType: false,
    processData: false,
    success: function (dataResult) {
      console.log(dataResult);
      if (dataResult[1].statusCode == 200) {
        $("#provide-plan")[0].reset();
        $("#butsave").removeAttr("disabled");
        $("#butsave").html("Provide");
        alert("Added Succesfully !");
        location.reload();
      } else {
        alert("Error occured !");
      }
    },
  });
});



// add faq
function validationquestionformfaq(){
  var question = quill5.root.innerHTML;
  $("#questionedit").val(question);

  var explain = quill10.root.innerHTML;
  $("#explainationedit").val(explain);
  return true;
}

$(document).on("submit", "#add-faq", function (e) {
  e.preventDefault();
  if (validationquestionformfaq()) {
    if (
      $("#setpaperidedit").val()!="" && 
      $("#questionedit").val()!="" &&
      $("#explainationedit").val()!= ""
    
    ) {

      $("#butsave").attr("disabled", "disabled");
      $("#butsave").html(
        '<span class="spinner-grow spinner-grow-sm" id="spinner" role="status" aria-hidden="true"></span>Loading...'
      );
      $.ajax({
        data: new FormData(this),
        type: "POST",
        url: "../../api/main.php",
        contentType: false,
        processData: false,
        success: function (dataResult) {
          console.log(dataResult);
          if (dataResult[1].statusCode == 200) {
            $("#add-faq")[0].reset();
            $("#butsave").removeAttr("disabled");
            $("#butsave").html("ADD");
            alert("Added Succesfully !");
            location.reload();
          } else {
            alert("Error occured !");
          }
        },
      });

    } else {

      alert("Please fill all feilds");
      
    }
  }
});

function validationquestionformcontent(){
  var question = quill12.root.innerHTML;
  $("#questionedit").val(question);

  var explain = quill11.root.innerHTML;
  $("#explainationedit").val(explain);
  return true;
}
$(document).on("submit", "#add-curriculum-content", function (e) {
  e.preventDefault();
  if (validationquestionformcontent()) {
    if (
      $("#setpaperidedit").val()!="" && 
      $("#questionedit").val()!="" &&
      $("#explainationedit").val()!= ""
    
    ) {

      $("#butsave").attr("disabled", "disabled");
      $("#butsave").html(
        '<span class="spinner-grow spinner-grow-sm" id="spinner" role="status" aria-hidden="true"></span>Loading...'
      );
      $.ajax({
        data: new FormData(this),
        type: "POST",
        url: "../../api/main.php",
        contentType: false,
        processData: false,
        success: function (dataResult) {
          console.log(dataResult);
          if (dataResult[1].statusCode == 200) {
            $("#add-curriculum-content")[0].reset();
            $("#butsave").removeAttr("disabled");
            $("#butsave").html("ADD");
            alert("Added Succesfully !");
            location.reload();
          } else {
            alert("Error occured !");
          }
        },
      });

    } else {

      alert("Please fill all feilds");
      
    }
  }
});


// delete-faq


$(document).on("click", ".delete_faq", function () {
  var id = $(this).attr("id");
  var type = "delete-faq";
  let person = prompt("Are you sure you want to delete this FAQ from database? type delete", "");
  if (person == "delete") {
    $.ajax({
      url: "../api/main.php",
      method: "POST",
      data: { id: id, type: type },
      success: function (dataResult) {
        if (dataResult[1].statusCode == 200) {
          location.reload();
        } else {
          alert("Error occured !");
        }
      },
    });
  } else {
    return false;
  }
});
$(document).on("click", ".delete_curriculum_content", function () {
  var id = $(this).attr("id");
  var type = "delete-curriculum-content";
  let person = prompt("Are you sure you want to delete this Curriculum Content from database? type delete", "");
  if (person == "delete") {
    $.ajax({
      url: "../api/main.php",
      method: "POST",
      data: { id: id, type: type },
      success: function (dataResult) {
        if (dataResult[1].statusCode == 200) {
          location.reload();
        } else {
          alert("Error occured !");
        }
      },
    });
  } else {
    return false;
  }
});

$('[data-readmore]').click(function() {
  $(this).prev('[data-carddiv]').toggleClass('readmorecontent');
 
  if( $(this).html()=='Read Less'){
    $(this).html('Read More');
  }else{
    $(this).html('Read Less');
  }
});

// reassign exam

$(document).on("click", ".reassign_exam", function () {
  var id = $(this).attr("id");
  var type = "reassign_exam";
  let person = prompt("Are you sure you want to re-assign? type re-assign", "");
  if (person == "re-assign") {
    $.ajax({
      url: "../../api/main.php",
      method: "POST",
      data: { id: id, type: type },
      success: function (dataResult) {
        if (dataResult[1].statusCode == 200) {
          location.reload();
        } else {
          alert("Error occured !");
        }
      },
    });
  } else {
    return false;
  }
});

// add-reviews

$(document).on("submit", "#add-reviews", function (e) {
  e.preventDefault();
  $("#butsave").attr("disabled", "disabled");
  $("#butsave").html(
    '<span class="spinner-grow spinner-grow-sm" id="spinner" role="status" aria-hidden="true"></span>Loading...'
  );
  $.ajax({
    data: new FormData(this),
    type: "POST",
    url: "../../api/main.php",
    contentType: false,
    processData: false,
    success: function (dataResult) {
      console.log(dataResult);
      if (dataResult[1].statusCode == 200) {
        $("#add-reviews")[0].reset();
        $("#butsave").removeAttr("disabled");
        $("#butsave").html("ADD");
        alert("Added Succesfully !");
        location.reload();
      } else {
        alert("Error occured !");
      }
    },
  });
});


// delete reviews
$(document).on("click", ".delete_reviews", function () {
  var id = $(this).attr("id");
  var type = "delete-reviews";
  let person = prompt("Are you sure you want to delete this Reviews from database? type delete", "");
  if (person == "delete") {
    $.ajax({
      url: "../api/main.php",
      method: "POST",
      data: { id: id, type: type },
      success: function (dataResult) {
        if (dataResult[1].statusCode == 200) {
          location.reload();
        } else {
          alert("Error occured !");
        }
      },
    });
  } else {
    return false;
  }
});

// add coupons
$(document).on("submit", "#coupons", function (e) {
  e.preventDefault();

      $("#butsave").attr("disabled", "disabled");
      $("#butsave").html(
        '<span class="spinner-grow spinner-grow-sm" id="spinner" role="status" aria-hidden="true"></span>Loading...'
      );
      $.ajax({
        data: new FormData(this),
        type: "POST",
        url: "../../api/main.php",
        contentType: false,
        processData: false,
        success: function (dataResult) {
          console.log(dataResult);
          if (dataResult[1].statusCode == 200) {
            $("#coupons")[0].reset();
            $("#butsave").removeAttr("disabled");
            $("#butsave").html("ADD");
            alert("Coupon Generated!");
            location.reload();
          } else {
            alert("Error occured !");
          }
        },
      });

  
});

$(document).on("click", ".delete_coupon", function () {
  var id = $(this).attr("id");
  var type = "delete-coupons";
  let person = prompt("Are you sure you want to delete this coupon? type delete", "");
  if (person == "delete") {
    $.ajax({
      url: "../api/main.php",
      method: "POST",
      data: { id: id, type: type },
      success: function (dataResult) {
        if (dataResult[1].statusCode == 200) {
          location.reload();
        } else {
          alert("Error occured !");
        }
      },
    });
  } else {
    return false;
  }
});

// forexdeploy
$(document).on("click", ".newdeploy", function () {

  var type = "deploy";
  let person = prompt("Are you sure you want to deploy?Note per month only 50 deploys! type confirm", "");
  if (person == "confirm") {
    $.ajax({
      url: "../api/forexapi.php",
      method: "POST",
      data: { type: type },
      success: function () {
        location.reload();
      },
    });
  } else {
    return false;
  }
});


// add web site config


$(document).on("submit", "#websiteconfig", function (e) {
  e.preventDefault();

      $("#butsavesite").attr("disabled", "disabled");
      $("#butsavesite").html(
        '<span class="spinner-grow spinner-grow-sm" id="spinner" role="status" aria-hidden="true"></span>Loading...'
      );
      $.ajax({
        data: new FormData(this),
        type: "POST",
        url: "../api/main.php",
        contentType: false,
        processData: false,
        success: function (dataResult) {
          console.log(dataResult);
          if (dataResult[1].statusCode == 200) {
            $("#websiteconfig")[0].reset();
            $("#butsavesite").removeAttr("disabled");
            $("#butsavesite").html("Save Changes");
            alert("Changes Saved!");
            location.reload();
          } else {
            alert("Error occured !");
          }
        },
      });

  
});


// update account password 

$(document).on('submit','#updatepassword',function(e) {
  e.preventDefault();
  var _txt1 = $('#txt1'). val();
  var _txt2 = $('#txt2'). val();
  if (_txt1 == _txt2)
  {
    var data = $("#updatepassword").serialize();
    $("#butsave").attr("disabled", "disabled");
    $("#butsave").html('<span class="spinner-grow spinner-grow-sm" id="spinner" role="status" aria-hidden="true"></span>Updating...');
    $.ajax({
         data: data,
         type: "POST",
         url: "../api/main.php",
         success: function(dataResult){
  console.log(dataResult);
  if(dataResult[1].statusCode==200){
    $("#updatepassword")[0].reset();		
    $("#butsave").removeAttr("disabled");
    $("#butsave").html("Update Password");
    alert('Updated Succesfully !');
  } else if(dataResult[1].statusCode==203){
     $("#butsave").removeAttr("disabled");
     $("#butsave").html("Update Password");
      alert("Incorrect Current Password!");
  }
}
  });

}else{
  alert('New paswword and confirm password does not match.')
}
});


// add-admin user

$(document).on("submit", "#add-admin-user", function (e) {
  e.preventDefault();

      $("#butsave").attr("disabled", "disabled");
      $("#butsave").html(
        '<span class="spinner-grow spinner-grow-sm" id="spinner" role="status" aria-hidden="true"></span>Loading...'
      );
      $.ajax({
        data: new FormData(this),
        type: "POST",
        url: "../../api/main.php",
        contentType: false,
        processData: false,
        success: function (dataResult) {
          console.log(dataResult);
          if (dataResult[1].statusCode == 200) {
            $("#add-admin-user")[0].reset();
            $("#butsave").removeAttr("disabled");
            $("#butsave").html("ADD");
            alert("Admin Added!");
            location.reload();
          }else if (dataResult[1].statusCode == 203) {
            $("#butsave").removeAttr("disabled");
            $("#butsave").html("ADD");
            alert("Admin User Exsist !");
          }
           else {
            alert("Error occured !");
          }
        },
      });

  
});

$(document).ready(function(){  
  $('#employee_data').DataTable(
{
  lengthMenu: [
    [10, 20, 60, 100, 500, -1], // Include option for all rows
    [10, 20, 60, 100, 500, 'All']
],

  "pageLength": 10,
  "processing": true,
  columnDefs: [
    { orderable: true, targets: [0, 1] }, // Make the first and second columns orderable
    { orderable: false, targets: '_all' } // Make all other columns non-orderable
]
}
  );
  $('#usertable').DataTable(
{
  lengthMenu: [
    [10, 20, 60, 100, 500, -1], // Include option for all rows
    [10, 20, 60, 100, 500, 'All']
],

  "pageLength": 10,
  "processing": true,
    
  order: [[0, 'DESC']]
}
  );

  $('#usertablevideo').DataTable(
{
  lengthMenu: [
    [10, 20, 60, 100, 500, -1], // Include option for all rows
    [10, 20, 60, 100, 500, 'All']
],

  "pageLength": 10,
  "processing": true,
  columnDefs: [
    { orderable: true, targets: [0] }, // Make the first and second columns orderable
    { orderable: false, targets: '_all' } // Make all other columns non-orderable
]
}
  );

  $('#employee_datapayment').DataTable(
    {
      lengthMenu: [
        [10, 20, 60, 100, 500, -1], // Include option for all rows
        [10, 20, 60, 100, 500, 'All']
    ],
    
      "pageLength": 10,
      "processing": true,
    
    order: [[5, 'DESC']]
    }
      );

});  




