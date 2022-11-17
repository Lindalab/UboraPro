$(function () {
    $('#log-form').parsley().on('field:validated', function() {
      var ok = $('.parsley-error').length === 0;
      if (ok) {
        alert("No errors");
      }
      else 
        alert("Errors");
    })
    .on('form:submit', function() {
        alert("Submitting")
      return false; // Don't submit form for this demo
    });
  });