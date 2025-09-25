<?php
/* Template Name: Front Page */
get_header();
?>
<main>
  <?php 
    get_template_part('template-parts/hero');
    get_template_part('template-parts/services');
    get_template_part('template-parts/reviews');
    get_template_part('template-parts/faq');
  ?>
</main>
<?php get_footer(); ?>
