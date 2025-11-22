<?php /* Template Name: Offer - template */ ?>

<?php get_header(); ?>


<?php if (have_rows('hero')) : ?>
<?php while (have_rows('hero')) : the_row();  ?>

<section class="offer-hero" style="background-image: url('<?php echo get_sub_field('hero_image'); ?>');">

    <div class="container">

    <div class="hero-box">
        <h1><?php echo get_sub_field('hero_title');?></h1>
        <div class="hero-box-content">
            <?php echo get_sub_field('hero_description');?>
        </div>


        <?php if (have_rows('button')) : ?>
        <?php while (have_rows('button')) : the_row();  ?>

        <?php if(get_sub_field('button_url')) { ?>
                        <a href="<?php echo get_sub_field('button_url');?>" class="custom-btn btn-6">
                            <span>
                            <?php echo get_sub_field('button_text');?>
                        </span>
                    </a>
         <?php } ?>


        <?php endwhile; ?>
        <?php endif; ?>

    </div>

    </div>
</section>


<?php endwhile; ?>
<?php endif; ?>




<section class="offer-menu">
    <div class="container">
<!-- 
link: https://www.youtube.com/watch?v=as01ehtBN0Y&list=LL&index=3&t=3s
 -->
 <div data-aos="fade-up" data-aos-duration="800" class="tab-container">
    <h1 class="m-title"><?php echo get_field('service_heading') ?></h1>
  <div class="tab__bar">
    <div class="tab__navigation">
      <span class="left__btn">
        <svg height="512" viewBox="0 0 32 32" width="512" xmlns="http://www.w3.org/2000/svg" id="fi_2735069">
          <g id="Layer_19" data-name="Layer 19">
            <path d="m23.21 28.29a1 1 0 0 1 0 1.42 1 1 0 0 1 -1.42 0l-13-13a1 1 0 0 1 0-1.42l13-13a1 1 0 1 1 1.42 1.42l-12.3 12.29z"></path>
          </g>
        </svg>
      </span>
      <span class="right__btn">
        <svg height="512" viewBox="0 0 32 32" width="512" xmlns="http://www.w3.org/2000/svg" id="fi_2735071">
          <g id="Layer_20" data-name="Layer 20">
            <path d="m23.21 16.71-13 13a1 1 0 0 1 -1.42 0 1 1 0 0 1 0-1.42l12.3-12.29-12.3-12.29a1 1 0 0 1 1.42-1.42l13 13a1 1 0 0 1 0 1.42z"></path>
          </g>
        </svg>
      </span>
      <ul class="tab__menu">
      <?php if (have_rows('add_service1')) : ?>
      <?php while (have_rows('add_service1')) : the_row();  ?>
        <li class="tab__btn active"><?php echo get_sub_field('service_title');?></li>
       <?php endwhile; ?>
       <?php endif; ?>

       <?php if (have_rows('add_service2')) : ?>
       <?php while (have_rows('add_service2')) : the_row();  ?>
        <li class="tab__btn"><?php echo get_sub_field('service_title');?></li>
       <?php endwhile; ?>
       <?php endif; ?>


       <?php if (have_rows('add_service3')) : ?>
       <?php while (have_rows('add_service3')) : the_row();  ?>
        <li class="tab__btn"><?php echo get_sub_field('service_title');?></li>
       <?php endwhile; ?>
       <?php endif; ?>


       <?php if (have_rows('add_service4')) : ?>
       <?php while (have_rows('add_service4')) : the_row();  ?>
        <li class="tab__btn"><?php echo get_sub_field('service_title');?></li>
       <?php endwhile; ?>
       <?php endif; ?>

       <?php if (have_rows('add_service5')) : ?>
       <?php while (have_rows('add_service5')) : the_row();  ?>
        <li class="tab__btn"><?php echo get_sub_field('service_title');?></li>
       <?php endwhile; ?>
       <?php endif; ?>

       <?php if (have_rows('add_service6')) : ?>
       <?php while (have_rows('add_service6')) : the_row();  ?>
        <li class="tab__btn"><?php echo get_sub_field('service_title');?></li>
       <?php endwhile; ?>
       <?php endif; ?>

       <?php if (have_rows('add_service7')) : ?>
       <?php while (have_rows('add_service7')) : the_row();  ?>
        <li class="tab__btn"><?php echo get_sub_field('service_title');?></li>
       <?php endwhile; ?>
       <?php endif; ?>

       <?php if (have_rows('add_service8')) : ?>
       <?php while (have_rows('add_service8')) : the_row();  ?>
        <li class="tab__btn"><?php echo get_sub_field('service_title');?></li>
       <?php endwhile; ?>
       <?php endif; ?>

       <?php if (have_rows('add_service9')) : ?>
       <?php while (have_rows('add_service9')) : the_row();  ?>
        <li class="tab__btn"><?php echo get_sub_field('service_title');?></li>
       <?php endwhile; ?>
       <?php endif; ?>

       <?php if (have_rows('add_service10')) : ?>
       <?php while (have_rows('add_service10')) : the_row();  ?>
        <li class="tab__btn"><?php echo get_sub_field('service_title');?></li>
       <?php endwhile; ?>
       <?php endif; ?>
      </ul>
    </div>
  </div>
  <div class="tab__content">

  <?php if (have_rows('add_service1')) : ?>
<?php while (have_rows('add_service1')) : the_row();  ?>
    <div class="tab active">
      <div class="row">
        <div class="left-column">
          <div class="img-card">
            <img src="<?php echo get_sub_field('service_image');?>" alt="">
          </div>
        </div>
        <div class="right-column">
          <div class="info">
            <h2 class="city"><?php echo get_sub_field('service_title');?></h2>
            <div class="description">
              <p>
                <?php echo get_sub_field('service_description'); ?>
            </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('add_service2')) : ?>
<?php while (have_rows('add_service2')) : the_row();  ?>
    <div class="tab">
      <div class="row">
        <div class="left-column">
          <div class="img-card">
            <img src="<?php echo get_sub_field('service_image');?>" alt="">
          </div>
        </div>
        <div class="right-column">
          <div class="info">
            <h2 class="city"><?php echo get_sub_field('service_title');?></h2>
            <div class="description">
              <p>
                <?php echo get_sub_field('service_description'); ?>
            </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('add_service3')) : ?>
<?php while (have_rows('add_service3')) : the_row();  ?>
    <div class="tab">
      <div class="row">
        <div class="left-column">
          <div class="img-card">
            <img src="<?php echo get_sub_field('service_image');?>" alt="">
          </div>
        </div>
        <div class="right-column">
          <div class="info">
            <h2 class="city"><?php echo get_sub_field('service_title');?></h2>
            <div class="description">
              <p>
                <?php echo get_sub_field('service_description'); ?>
            </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>


    <?php if (have_rows('add_service4')) : ?>
<?php while (have_rows('add_service4')) : the_row();  ?>
    <div class="tab">
      <div class="row">
        <div class="left-column">
          <div class="img-card">
            <img src="<?php echo get_sub_field('service_image');?>" alt="">
          </div>
        </div>
        <div class="right-column">
          <div class="info">
            <h2 class="city"><?php echo get_sub_field('service_title');?></h2>
            <div class="description">
              <p>
                <?php echo get_sub_field('service_description'); ?>
            </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('add_service5')) : ?>
<?php while (have_rows('add_service5')) : the_row();  ?>
    <div class="tab">
      <div class="row">
        <div class="left-column">
          <div class="img-card">
            <img src="<?php echo get_sub_field('service_image');?>" alt="">
          </div>
        </div>
        <div class="right-column">
          <div class="info">
            <h2 class="city"><?php echo get_sub_field('service_title');?></h2>
            <div class="description">
              <p>
                <?php echo get_sub_field('service_description'); ?>
            </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('add_service6')) : ?>
<?php while (have_rows('add_service6')) : the_row();  ?>
    <div class="tab">
      <div class="row">
        <div class="left-column">
          <div class="img-card">
            <img src="<?php echo get_sub_field('service_image');?>" alt="">
          </div>
        </div>
        <div class="right-column">
          <div class="info">
            <h2 class="city"><?php echo get_sub_field('service_title');?></h2>
            <div class="description">
              <p>
                <?php echo get_sub_field('service_description'); ?>
            </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('add_service7')) : ?>
<?php while (have_rows('add_service7')) : the_row();  ?>
    <div class="tab">
      <div class="row">
        <div class="left-column">
          <div class="img-card">
            <img src="<?php echo get_sub_field('service_image');?>" alt="">
          </div>
        </div>
        <div class="right-column">
          <div class="info">
            <h2 class="city"><?php echo get_sub_field('service_title');?></h2>
            <div class="description">
              <p>
                <?php echo get_sub_field('service_description'); ?>
            </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>

     <?php if (have_rows('add_service8')) : ?>
<?php while (have_rows('add_service8')) : the_row();  ?>
    <div class="tab">
      <div class="row">
        <div class="left-column">
          <div class="img-card">
            <img src="<?php echo get_sub_field('service_image');?>" alt="">
          </div>
        </div>
        <div class="right-column">
          <div class="info">
            <h2 class="city"><?php echo get_sub_field('service_title');?></h2>
            <div class="description">
              <p>
                <?php echo get_sub_field('service_description'); ?>
            </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('add_service9')) : ?>
<?php while (have_rows('add_service9')) : the_row();  ?>
    <div class="tab">
      <div class="row">
        <div class="left-column">
          <div class="img-card">
            <img src="<?php echo get_sub_field('service_image');?>" alt="">
          </div>
        </div>
        <div class="right-column">
          <div class="info">
            <h2 class="city"><?php echo get_sub_field('service_title');?></h2>
            <div class="description">
              <p>
                <?php echo get_sub_field('service_description'); ?>
            </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('add_service10')) : ?>
<?php while (have_rows('add_service10')) : the_row();  ?>
    <div class="tab">
      <div class="row">
        <div class="left-column">
          <div class="img-card">
            <img src="<?php echo get_sub_field('service_image');?>" alt="">
          </div>
        </div>
        <div class="right-column">
          <div class="info">
            <h2 class="city"><?php echo get_sub_field('service_title');?></h2>
            <div class="description">
              <p>
                <?php echo get_sub_field('service_description'); ?>
            </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
 
  </div>
</div>
<!-- https://codepen.io/cltpcxsd-the-sasster/pen/LYBQOKb -->
    
    </div>
</section>


<section class="offer-form">
  <div id="zamow"></div>
    <h2 class="m-title"><?php echo get_field('contact_heading');?></h2>
    <div class="container">

      <div class="order-row">
          <div data-aos="fade-left" data-aos-duration="800" class="order-left">
            <?php echo do_shortcode('[contact-form-7 id="9bf96f7" title="Zrób zamowienie - Form"]'); ?>
        </div>

        <div data-aos="fade-right" data-aos-duration="800" class="order-right">
            <img src="<?php echo get_field('offer_img');?>"/>
        </div>

      </div>


    </div>
</section>


<section class="card-section">
  <div class="card-top-box">
      <?php echo get_field('cards_heading');?>
  </div>
  <div class="container">
  <div class="card-row">
  <?php if (have_rows('add_card')) : ?>
  <?php while (have_rows('add_card')) : the_row();  ?>
    <div class="card">
      <div class="wave"></div>
      <div class="wave"></div>
      <div class="wave"></div>
      <div class="content">
        <h2 class="title"><?php echo get_sub_field('card_name');?></h2>
        <span><?php echo get_sub_field('card_content');?></span>
        <div class="the-price"><?php echo get_sub_field('card_price'); ?></div>
      </div>
    </div>

    <?php endwhile; ?>
      <?php endif; ?>
  </div>
  </div>
</section>  



<?php get_footer(); ?>