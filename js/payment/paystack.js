const email = document.getElementById('email');
const amount = document.getElementById('amount');
const form = document.getElementById('form');

function payWithPaystack(e) {
    e.preventDefault();
    let handler = PaystackPop.setup({
        key: 'pk_live_bd5356607a881f3a0d6843b75d3172b74b9675cd', // Replace with your public key
        email: email.value,
        amount: 1,//amount.value * 100,
        callback: function(response){
          let message = 'Payment complete! Reference: ' + response.reference;
          alert(message);
          // window.location = "../actions/payment_action/process_payment.php?reference=" + response.reference;   
          $.ajax({
            url: './../actions/payment_action/process_payment.php?reference='+ response.reference,
            method: 'get',
            success: function (response) {
              // alert("Payment successful. reference ="+response.reference);
              window.location = "./payment_success.php";
            }
          });
        },
        onClose: function(){
          window.location = "./payment_failure.php";
      }
  });
  handler.openIframe();
};