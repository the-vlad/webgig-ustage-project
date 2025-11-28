<?php /* Template Name: Page - Home- Landing */ ?>



<?php get_header(); ?>
<!-- <link rel="stylesheet" href="https://public.codepenassets.com/css/normalize-5.0.0.min.css"> -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style2.css">
<!-- Hero -->
<?php 
$hero = get_field('hero');

if ($hero): 
    // Get buttons from the hero group
    $button1 = $hero['button1'] ?? null;
    $button2 = $hero['button2'] ?? null;
?>
<div class="hero us-container">
    <div class="grid-bg">

    <form class="searchPortal" action="/search" method="GET">
  <input 
    type="text"
    name="q"
    placeholder="Search..."
  />
  <div class="searchBtn"><img src="https://ustage.mounti-creative.com/wp-content/uploads/2025/11/1_search.svg"/></div>
</form> 

<div class="hero-box">
    <?php echo wp_kses_post($hero['hero_title']); ?>

    <div class="hero-box--row">

        <?php
        // Check logged-in user and their roles
        $user = wp_get_current_user();
        $roles = (array) $user->roles;

        $is_entertainer = in_array('um_entertainer', $roles);
        $is_customer    = in_array('customer', $roles); // WooCommerce default role
        ?>

        <?php if ( $is_entertainer ) : ?>

            <!-- Show ONLY for um_entertainer -->
            <a href="#" class="btn-view btn-active">
                View your Calendar
            </a>

        <?php elseif ( $is_customer ) : ?>

            <!-- Show ONLY for customers -->
            <a href="#" class="btn-explore btn-active">
                Explore entertainers
            </a>

        <?php else : ?>

            <!-- Default buttons for all other roles -->
            <?php if (!empty($button1['button_name'])) : ?>
                <a href="<?php echo $button1['button_url']; ?>" class="btn-active">
                    <?php echo esc_html($button1['button_name']); ?>
                </a>
            <?php endif; ?>

            <?php if (!empty($button2['button_name'])) : ?>
                <a href="<?php echo $button2['button_url']; ?>" class="btn-default">
                    <?php echo esc_html($button2['button_name']); ?>
                </a>
            <?php endif; ?>

        <?php endif; ?>

    </div>
</div>



    <?php endif; ?>



<?php if ($hero): ?>
<div class="cloud-wrapper">

    <!-- Row 4 – hero_services1 -->
    <?php if (!empty($hero['services1'])): ?>
        <div class="cloud-row row-4">
            <?php foreach ($hero['services1'] as $item): ?>
                <div class="cloud-box">
                    <?php if (!empty($item['social_icon'])): ?>
                        <img src="<?php echo esc_url($item['social_icon']); ?>" alt="">
                    <?php endif; ?>
                    <?php echo esc_html($item['service_url']); ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>


    <!-- Row 3 – hero_services -->
    <?php if (!empty($hero['services'])): ?>
        <div class="cloud-row row-3">
            <?php foreach ($hero['services'] as $item): ?>
                <div class="cloud-box">
                    <?php if (!empty($item['service_icon'])): ?>
                        <img src="<?php echo esc_url($item['service_icon']); ?>" alt="">
                    <?php endif; ?>
                    <?php echo esc_html($item['service_url']); ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>


    <!-- Row 3 – hero_services2 -->
    <?php if (!empty($hero['services2'])): ?>
        <div class="cloud-row row-3">
            <?php foreach ($hero['services2'] as $item): ?>
                <div class="cloud-box">
                    <?php if (!empty($item['service_icon'])): ?>
                        <img src="<?php echo esc_url($item['service_icon']); ?>" alt="">
                    <?php endif; ?>
                    <?php echo esc_html($item['service_url']); ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>


    <!-- Row 2 – hero_services3 -->
    <?php if (!empty($hero['services3'])): ?>
        <div class="cloud-row row-2">
            <?php foreach ($hero['services3'] as $item): ?>
                <div class="cloud-box">
                    <?php if (!empty($item['service_icon'])): ?>
                        <img src="<?php echo esc_url($item['service_icon']); ?>" alt="">
                    <?php endif; ?>
                    <?php echo esc_html($item['service_url']); ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

</div>
<?php endif; ?>


<!-- Mac studio -->

<div class="us-container mac-studio">
  <div class="mac-studio-wrapper">
      <img src="https://ustage.mounti-creative.com/wp-content/uploads/2025/11/vector-left.svg" class="leftEl"/>     
      <img class="img-mac" src="<?php echo esc_url($hero['bottom_hero_img']); ?>" alt="">
      <img src="https://ustage.mounti-creative.com/wp-content/uploads/2025/11/vector-right.svg" class="rightEl"/>

  </div>
</div>


</div>
<div class="bg-bottom"></div>
</div>


<?php 
$enter = get_field('enter');
if ($enter): 
?>
<div class="us-container">
  <div class="enter">
   <div class="inner-content">
    <div class="enter--top">
      <?php 
      // WYSIWYG
      echo $enter['text']; 
      ?>

      <?php if (!empty($enter['button'])): ?>
        <a href="<?php echo esc_url($enter['button']['button_url']); ?>" 
           class="btn-active-white">
          <?php echo esc_html($enter['button']['button_name']); ?>
        </a>
      <?php endif; ?>
    </div>

    <div class="enter--bottom">
      <?php if (!empty($enter['cards'])): ?>
        <?php foreach ($enter['cards'] as $card): ?>
          <div class="enter-card">
            <?php if (!empty($card['icon'])): ?>
              <img src="<?php echo esc_url($card['icon']); ?>" alt="">
            <?php endif; ?>

            <p><?php echo esc_html($card['card_txt']); ?></p>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
                  <img class="side-img" src="https://ustage.mounti-creative.com/wp-content/uploads/2025/11/u-side.svg"/>

            </div>

  </div>
</div>
<?php endif; ?>


<?php 
$faq = get_field('faq');

if ($faq): ?>

<div class="us-container faq">

    <div class="faq-row">

        <!-- LEFT SIDE: Title & Text -->
        <div class="faq--left">
            <?php 
            if (!empty($faq['text'])) {
                echo wp_kses_post($faq['text']);
            }
            ?>
        </div>

        <!-- RIGHT SIDE: Repeater (Accordion) -->
        <div class="faq--right">

            <?php if (!empty($faq['faq_box'])): ?>

                <div class="faq-accordion">
                <?php foreach ($faq['faq_box'] as $item): ?>

                    <div class="faq-item">

             <div class="faq-question">
                <?php echo esc_html($item['title']); ?>
                <span class="faq-icon">
                    <img class="faq-icon-img" src="https://ustage.mounti-creative.com/wp-content/uploads/2025/11/ic_round-plus.svg" />
                </span>
            </div>

                        <div class="faq-answer">
                            <?php echo wp_kses_post($item['desc']); ?>
                        </div>

                    </div>

                <?php endforeach; ?>
                </div>

            <?php endif; ?>

        </div>

    </div>

</div>

<?php endif; ?>



<?php 
$customer = get_field('customer');
if ($customer): 
?>
<div class="us-container">
  <div class="enter customer-bg">
   <div class="inner-content">
    <div class="enter--top">
      <?php 
      // WYSIWYG text
      echo $customer['text']; 
      ?>

      <?php if (!empty($customer['button'])): ?>
        <a href="<?php echo esc_url($customer['button']['button_url']); ?>" 
           class="btn-active-white">
          <?php echo esc_html($customer['button']['button_name']); ?>
        </a>
      <?php endif; ?>
    </div>

    <div class="enter--bottom">
      <?php if (!empty($customer['cards'])): ?>
        <?php foreach ($customer['cards'] as $card): ?>
          <div class="enter-card">
            <?php if (!empty($card['icon'])): ?>
              <img src="<?php echo esc_url($card['icon']); ?>" alt="">
            <?php endif; ?>

            <p><?php echo esc_html($card['card_txt']); ?></p>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
                      <img class="side-img" src="hhttps://ustage.mounti-creative.com/wp-content/uploads/2025/11/u-side2.svg"/>

            </div>
  </div>
</div>
<?php endif; ?>





<?php get_footer(); ?>



