<?php
require("../controllers/ticket_controller.php"); 
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="UboraPro Statistics, 92, 25, 87">
    <meta name="description" content="">
    <title>adminstatistics</title>
    <link rel="stylesheet" href="./../css/nicepage.css" media="screen">
<link rel="stylesheet" href="./../css/adminstatistics.css" media="screen">
    <script class="u-script" type="text/javascript" src="./../js/jquery.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.21.12, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "./../images/ubora2.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="adminstatistics">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-white u-header" id="sec-ef51"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="1920" data-image-height="1080">
          <img src="./../images/ubora2.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="padding: 10px 20px;">View as User</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" target="_blank" style="padding: 10px 20px;">Tickets</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" target="_blank" style="padding: 10px 20px;">Voting</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
    <section class="u-clearfix u-section-1" id="sec-7891">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">UboraPro Statistics</h1>
        <div class="u-expanded-width u-layout-horizontal u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-style u-custom-item u-list-item u-palette-1-base u-repeater-item u-list-item-1">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <h1 class="u-text u-text-body-color u-title u-text-2" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">92</h1>
                <p class="u-text u-text-body-color u-text-3">Number of Tickets Available</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-custom-item u-list-item u-palette-1-base u-repeater-item u-list-item-2">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <h1 class="u-text u-text-body-color u-title u-text-4" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000"><?php echo countTicketsSold_ctr(); ?></h1>
                <p class="u-text u-text-body-color u-text-5">Tickets Sold</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-custom-item u-list-item u-palette-1-base u-repeater-item u-list-item-3">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <h1 class="u-text u-text-body-color u-title u-text-6" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000"><?php echo CountTotalVotes_ctr(); ?></h1>
                <p class="u-text u-text-body-color u-text-7">Total Number of Votes</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-custom-item u-list-item u-palette-1-base u-repeater-item u-list-item-3">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <h1 class="u-text u-text-body-color u-title u-text-6" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000"><?php echo countTicketsTypeSold_ctr(3);?></h1>
                <p class="u-text u-text-body-color u-text-7">Total VIP tickets Sold </p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-custom-item u-list-item u-palette-1-base u-repeater-item u-list-item-3">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <h1 class="u-text u-text-body-color u-title u-text-6" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000"><?php echo getTotalUsers_ctr(); ?></h1>
                <p class="u-text u-text-body-color u-text-7">Total Participant</p>
              </div>
            </div>
          </div>
          <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
          </a>
          <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
          </a>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-image u-footer" id="sec-ff33" data-image-width="1280" data-image-height="941"><div class="u-clearfix u-sheet u-valign-top-lg u-valign-top-xl u-sheet-1">
        <p class="u-small-text u-text u-text-body-color u-text-variant u-text-1">(c) DELC&nbsp; All Rights reserved</p>
      </div></footer>
  
</body></html>