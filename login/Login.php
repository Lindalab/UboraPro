<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="ogin">
    <meta name="description" content="">
    <title>Login</title>
    <link rel="stylesheet" href="../css/nicepage.css" media="screen">
<link rel="stylesheet" href="../css/Login.css" media="screen">
    <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
    <!-- <script class="u-script" type="text/javascript" src="/js/nicepage.js" defer=""></script> -->
    <meta name="generator" content="Nicepage 4.21.12, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous" async defer></script>
   <script src="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/dist/parsley.js" async defer></script>
   <script src="../js/parsley.js" async defer></script>
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "../images/ubora2.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Login">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-white u-header" id="sec-ef51"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="./../index.php" class="u-image u-logo u-image-1" data-image-width="1920" data-image-height="1080">
          <img src="../images/ubora2.png" class="u-logo-image u-logo-image-1">
        </a>
        <div class="u-countdown u-countdown-1" data-timer-id="6bac" data-type="to-date" data-target-date="Thu, 1 Dec 2022 10:39:48 GMT" data-for="everyone" data-direction="down" data-time-left="750m" data-target-number="100" data-start-time="Mon Nov 14 2022 16:12:21 GMT+0000 (Greenwich Standard Time)" data-frequency="1s" data-after-count="none" data-redirect-url="https://">
          <div class="u-countdown-wrapper u-spacing-20">
            <div class="u-countdown-item u-countdown-years u-hidden u-spacing-10">
              <div class="u-countdown-counter u-countdown-counter-1"><div class="u-countdown-number">0</div><div class="u-countdown-number u-hidden">0</div></div>
              <div class="u-countdown-label u-countdown-label-1">Years</div>
            </div>
            <div class="u-countdown-separator u-hidden u-countdown-separator-1">:</div>
            <div class="u-countdown-days u-countdown-item u-spacing-10">
              <div class="u-countdown-counter u-countdown-counter-2"><div class="u-countdown-number">7</div><div class="u-countdown-number u-hidden">6</div><div class="u-countdown-number u-hidden">0</div></div>
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
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
    </header>
    <section class="u-clearfix u-section-1" id="sec-9d3f">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-group-elements u-group-elements-1">
          <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-1" src="../images/goldL.png" alt="L" data-image-width="1271" data-image-height="1280">
          <h1 class="u-text u-text-default u-text-1">ogin</h1>
        </div>

        <!-- Login Form -->
        <div class="u-form u-form-1">
          <form action="./login_process.php" method="POST" class="u-clearfix u-form-spacing-50 u-form-vertical u-inner-form" source="email" name="form" id="form" style="padding: 50px;" data-parsley-validate="">
            <div class="u-form-email u-form-group">
              <label for="email-3f67" class="u-label">Email Address</label>
              <input type="email" placeholder="Enter a valid Ashesi email address" id="email-3f67" name="user_email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" data-parsleytrigger="change" data-parsley-pattern="((\w*)[(\.)].(\w*)@ashesi.edu.gh$)" required="">
            </div>
            <div class="u-form-group u-form-password u-form-group-2">
              <label for="password-0657" class="u-label">Password</label>
              <input type="password" placeholder="Enter your Password" id="password-0657" name="user_password" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" data-parsleytrigger="change" data-parsley-minlength="8" required="">
            </div>
            <div class="u-align-left u-form-group u-form-submit">
              <input type="submit" name="login" value="Submit" class="u-form-control">
            </div>
          </form>
        </div>
        <!-- End of Login Form -->
      </div>
    </section>   
   


  <footer class="u-align-center u-clearfix u-footer u-image u-footer" id="sec-ff33" data-image-width="1280" data-image-height="941">
    <div class="u-clearfix u-sheet u-valign-top-lg u-valign-top-xl u-sheet-1">
      <p class="u-small-text u-text u-text-body-color u-text-variant u-text-1">(c) DELC&nbsp; All Rights reserved</p>
    </div>
  </footer>


</body>

</html>