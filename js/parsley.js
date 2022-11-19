$(function () {
    let counter = 0;
    $('#form').parsley().on('field:validated', function() {
      var ok = $('.parsley-error').length === 0;
      if (ok) {
        counter += 0;
      }
      else 
      counter += 1;
    })
    .on('form:submit', function() {
      return true; // Don't submit form for this demo
    });
  });
