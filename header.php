<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
	  <!-- Google tag (gtag.js) -->

<link href="https://db.onlinewebfonts.com/c/362636484f8ad521fec5a297fdc0ab12?family=Aeonik+Pro+Bold" rel="stylesheet">
<link href="https://db.onlinewebfonts.com/c/d95bf2f30035a050142565e03d44da71?family=Aeonik" rel="stylesheet">
<link href="https://db.onlinewebfonts.com/c/757ff6da05e4f945c71c9751b485a9ad?family=Aeonik+Medium" rel="stylesheet">
 <?php wp_head(); ?>	
	  
	  
</head>
	   
	
  <body id="body" <?php body_class(); ?>>

<!-- 
<div class="btn-default-sm">Log in</div>
<div class="btn-active">I need an entertainer</div>
<div class="btn-default">I need an entertainer</div>

<form class="searchPortal" action="/search" method="GET">
  <input 
    type="text"
    name="q"
    placeholder="Search..."
  />
  <div class="searchBtn"><img src="http://ustage.local/wp-content/uploads/2025/11/1_search.svg"/></div>
</form> -->

<!-- 
<div class="cloud-box"><img src="http://ustage.local/wp-content/uploads/2025/11/solar_calendar-outline.svg"/> Scheduling</div>
 -->

    <header class="us-header">
      <div class="us-container">
          <div class="us-header--row">

            <div class="us-logo">
               <a href="<?php echo home_url(); ?>" class="logo">
                  <img alt="ustage logo" src="<?php echo get_field('header_logo', 'option'); ?>" />
              </a>
            </div>

            <div class="us-login">
         <?php if ( is_user_logged_in() ) : ?>

              <a href="<?php echo home_url('/account/'); ?>" class="btn-default-sm">
                  My account
              </a>

          <?php else : ?>

              <a href="<?php echo home_url('/login/'); ?>" class="btn-default-sm">
                  Log in
              </a>

          <?php endif; ?>

            </div>

        </div>
      </div>
    </header>










    <div id="page">