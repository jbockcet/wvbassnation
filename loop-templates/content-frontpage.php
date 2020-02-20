<?php
/**
 * Partial template for content in frontpage.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<section class="announcement pt-5 pb-5">
  <div class="container">
    <div class="row justify-content-middle">
      <div class="announcmentIcon col-3 col-md-2 my-auto">
        <img src="/wp-content/themes/wvbassnation/images/attn.png" alt="Annoucnement!" />
      </div>
      <div class="announcementText col-9 col-md-10 pl-3 my-auto">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>

<section class="featureImage">
  <img src="<?php the_field('front_page_image') ?>" alt="" />
</section>
