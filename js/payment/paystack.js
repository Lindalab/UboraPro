const email = document.getElementById('email');
const amount = document.getElementById('amount');
const form = document.getElementById('form');

function payWithPaystack(e) {
    e.preventDefault();
    let handler = PaystackPop.setup({
        key: 'pk_test_2bb382cf83dcbbded35073cca76a746157a6dd61', // Replace with your public key
        email: email.value,
        amount: amount.value * 100,
        callback: function(response){
          $.ajax({
            url: './../actions/payment_action/process_payment.php?reference='+ response.reference,
            method: 'get',
            success: function (response) {
              alert("Payment successful. Thank you for your purchase");
              window.location = "./index.php";
            }
          });
        },
        onClose: function(){
          window.location = "./failurepage.html";
      }
  });
  handler.openIframe();
};