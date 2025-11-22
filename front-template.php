<?php /* Template Name: Page - Home- Landing */ ?>



<?php get_header(); ?>
<!-- <link rel="stylesheet" href="https://public.codepenassets.com/css/normalize-5.0.0.min.css"> -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style2.css">
<!-- Hero -->

<div class="hero us-container">
    <div class="grid-bg">

    <form class="searchPortal" action="/search" method="GET">
  <input 
    type="text"
    name="q"
    placeholder="Search..."
  />
  <div class="searchBtn"><img src="http://ustage.local/wp-content/uploads/2025/11/1_search.svg"/></div>
</form> 

    <div class="hero-box">
        <h1>Event hassles and </br>headaches out the door.</h1>
        <div class="hero-box--row">
            <div class="btn-active">I need an entertainer</div>
            <div class="btn-default">I am an entertainer</div>
        </div>
    </div>


</div>

</div>


<?php get_footer(); ?>



