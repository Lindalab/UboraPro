<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>admin Nominee</title>
    <link rel="stylesheet" href="./../css/nicepage.css" media="screen">
<link rel="stylesheet" href="./../css/admin-Nominee.css" media="screen">
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
    <meta property="og:title" content="admin Nominee">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-white u-header" id="sec-ef51"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="" class="u-image u-logo u-image-1" data-image-width="1920" data-image-height="1080">
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
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="./../index.php" style="padding: 10px 20px;">View as User</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="./../view/Tickets.php" style="padding: 10px 20px;">Tickets</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="./../view/voting.php" style="padding: 10px 20px;">Voting</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="./../index.php">View as User</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-bf0a">
      <div class="u-clearfix u-sheet u-valign-top-sm u-sheet-1">
        <img class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-image u-image-contain u-image-default u-image-1" src="./../images/ubora2.png" alt="" data-image-width="1920" data-image-height="1080">
        <div class="u-form u-form-1">
          <form action="./../actions/awards_action/add_nominee.php" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" method="POST" name="form" style="padding: 10px;" enctype="multipart/form-data">
            <div class="u-form-group u-form-name">
              <label for="nom_name" class="u-label">Nominee Name</label>
              <input type="text" placeholder="Enter Nominee Name" id="nom_name" name="nominee_name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-form-email u-form-group">
              <label for="nom_cat" class="u-label">Nominee Category</label>
              <select placeholder="Enter Nominee Category" id="nom_cat" name="award_id" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                <option value="2">Best Cat</option>
              </select>
            </div>
            <div class="u-form-email u-form-group u-form-group-3">
              <label for="nom_email" class="u-label">Nominee Description</label>
              <textarea placeholder="Enter description of nominee" id="nom_email" name="nominee_description" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required=""></textarea>
            </div>
            <div class="u-form-group u-form-message">
              <label class="u-label">Nominee Image</label>
              <input type="file" name="nominee_image" accept="image/*" required>
            </div>
            <div class="u-align-left u-form-group u-form-submit">
              <input type="submit" value="Add Nominee" class="u-btn u-btn-submit u-button-style">
            </div>
            <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
            <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
          </form>
        </div>
      </div>
    </section>
    <section>
      <header>
        <h2>Manage Nominee</h2>
      </header>
    </section>
    
    <footer class="u-align-center u-clearfix u-footer u-image u-footer" id="sec-ff33" data-image-width="1280" data-image-height="941"><div class="u-clearfix u-sheet u-valign-top-lg u-valign-top-xl u-sheet-1">
        <p class="u-small-text u-text u-text-body-color u-text-variant u-text-1">(c) DELC&nbsp; All Rights reserved</p>
      </div></footer>
  
</body></html>