<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="egister">
    <meta name="description" content="">
    <title>Register</title>
    <link rel="stylesheet" href="../css/nicepage.css" media="screen">
<link rel="stylesheet" href="../css/Register.css" media="screen">
    <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
    <!-- <script class="u-script" type="text/javascript" src="../js/nicepage.js" defer=""></script> -->
    <meta name="generator" content="Nicepage 4.21.12, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous" async defer></script>
   <script src="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/dist/parsley.js" async defer></script>
   <script src="../js/parsley.js" async defer></script>
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/ubora2.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Register">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-white u-header" id="sec-ef51"><div class="u-clearfix u-sheet u-sheet-1">
    <?php
      if (isset($_SESSION["reg_msg"])) {
        echo '<script>alert('. $_SESSION["reg_msg"] .')</script>';
      }
    ?>
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="1920" data-image-height="1080">
          <img src="../images/ubora2.png" class="u-logo-image u-logo-image-1">
        </a>
        <div class="u-countdown u-countdown-1" data-timer-id="6bac" data-type="to-date" data-target-date="Tue, 22 Nov 2022 04:39:48 GMT" data-for="everyone" data-direction="down" data-time-left="750m" data-target-number="100" data-start-time="Mon Nov 14 2022 16:12:21 GMT+0000 (Greenwich Standard Time)" data-frequency="1s" data-after-count="none" data-redirect-url="https://">
          <div class="u-countdown-wrapper u-spacing-20">
            <div class="u-countdown-item u-countdown-years u-hidden u-spacing-10">
              <div class="u-countdown-counter u-countdown-counter-1"><div class="u-countdown-number">0</div><div class="u-countdown-number u-hidden">0</div></div>
              <div class="u-countdown-label u-countdown-label-1">Years</div>
            </div>
            <div class="u-countdown-separator u-hidden u-countdown-separator-1">:</div>
            <div class="u-countdown-days u-countdown-item u-spacing-10">
              <div class="u-countdown-counter u-countdown-counter-2"><div class="u-countdown-number">17</div><div class="u-countdown-number u-hidden">6</div><div class="u-countdown-number u-hidden">0</div></div>
              <div class="u-countdown-label u-countdown-label-2">Days</div>
            </div>
            <div class="u-countdown-separator u-countdown-separator-2">:</div>
            <div class="u-countdown-hours u-countdown-item u-spacing-10">
              <div class="u-countdown-counter u-countdown-counter-3"><div class="u-countdown-number">1</div><div class="u-countdown-number">2</div></div>
              <div class="u-countdown-label u-countdown-label-3">Hours</div>
            </div>
            <div class="u-countdown-separator u-countdown-separator-3">:</div>
            <div class="u-countdown-item u-countdown-minutes u-spacing-10">
              <div class="u-countdown-counter u-countdown-counter-4"><div class="u-countdown-number">3</div><div class="u-countdown-number">0</div></div>
              <div class="u-countdown-label u-countdown-label-4">Minutes</div>
            </div>
            <div class="u-countdown-separator u-countdown-separator-4">:</div>
            <div class="u-countdown-item u-countdown-seconds u-spacing-10">
              <div class="u-countdown-counter u-countdown-counter-5"><div class="u-countdown-number">0</div><div class="u-countdown-number">0</div></div>
              <div class="u-countdown-label u-countdown-label-5">Seconds</div>
            </div>
            <div class="u-countdown-separator u-hidden u-countdown-separator-5">:</div>
            <div class="u-countdown-item u-countdown-numbers u-hidden u-spacing-10">
              <div class="u-countdown-counter u-countdown-counter-6"><div class="u-countdown-number">0</div><div class="u-countdown-number">0</div></div>
              <div class="u-countdown-label u-countdown-label-6">Items</div>
            </div>
          </div>
          <div class="u-countdown-message u-hidden">
            <p>Sorry, the time is up.</p>
          </div>
        </div>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-8fa8">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-group-elements u-group-elements-1">
          <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-1" src="../images/gc48e398d4e4389e2ea1a357b83a51d85bc95cc9ad1642abaf20e90b478db006b53fbf62a0d246dc56433bb3fc271feff_1280.png" alt="" data-image-width="1280" data-image-height="1280">
          <h1 class="u-text u-text-1">egister</h1>
        </div>
        <div class="u-form u-form-1">
          <form action="./register_process.php" class="u-clearfix u-form-spacing-41 u-form-vertical u-inner-form" method="POST" source="email" name="form" style="padding: 50px;" id="form" data-parsley-validate="">
            <div class="u-form-group u-form-name">
              <label for="name-9b05" class="u-label">Name</label>
              <input type="text" placeholder="Enter your Name" id="name-9b05" name="user_name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" data-parsley-pattern="^([^0-9]*)$" placeholder="User Name" data-parsleytrigger="change" required="">
            </div>
            <div class="u-form-email u-form-group">
              <label for="email-9b05" class="u-label">Email</label>
              <input type="email" placeholder="Enter a valid Ashesi email address" id="email-9b05" name="user_email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" data-parsleytrigger="change" data-parsley-pattern="((\w*)[(\.)].(\w*)@ashesi.edu.gh$)" required="">
            </div>
            <div class="u-form-email u-form-group">
              <label for="school_id" class="u-label">Student ID</label>
              <input type="number" placeholder="Enter a valid student ID" id="school_id" name="user_school_id" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" data-parsleytrigger="change" required="">
            </div>
            <div class="u-form-group u-form-phone u-form-group-3">
              <label for="phone-66e5" class="u-label">Phone</label>
              <input type="tel" data-parsley-pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="Enter your phone (e.g. +14155552675)" id="phone-66e5" name="phone_number" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-form-group u-form-name u-form-group-2">
              <label for="name-0657" class="u-label">Password</label>
              <input type="password" placeholder="Enter your Password" id="name-0657" name="password" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" data-parsleytrigger="change" data-parsley-minlength="8" required="">
            </div>
            <div class="u-form-group u-form-name u-form-group-2">
              <label for="name-0657" class="u-label">Confirm Password</label>
              <input type="password" placeholder="Enter your Password" id="name-0657" name="conf_password" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" data-parsleytrigger="change" data-parsley-minlength="8" required="">
            </div>
            <div class="u-form-agree u-form-group u-form-group-4">
              <input type="checkbox" id="agree-01e4" name="agree" class="u-agree-checkbox" required="">
              <label for="agree-01e4" class="u-agree-label u-label">I accept the <a href="#">Terms of Service</a>
              </label>
            </div>
            <div class="u-align-left u-form-group u-form-submit">
              <input type="submit" name="register" value="Submit" class="u-form-control">
            </div>
            <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
            <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
          </form>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-image u-footer" id="sec-ff33" data-image-width="1280" data-image-height="941"><div class="u-clearfix u-sheet u-valign-top-lg u-valign-top-xl u-sheet-1">
        <p class="u-small-text u-text u-text-body-color u-text-variant u-text-1">(c) DELC&nbsp; All Rights reserved</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>
  
</body></html>