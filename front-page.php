<?php
/* Template Name: Front Page */
get_header();
?>
<main>
  <?php 
    get_template_part('template-parts/carousel');
    get_template_part('template-parts/team');
    get_template_part('template-parts/hero');
    get_template_part('template-parts/services');
    get_template_part('template-parts/reviews');
    get_template_part('template-parts/faq');
    get_template_part('template-parts/blogs');
    get_template_part('template-parts/contact');
    get_template_part('template-parts/refer');
  ?>
</main>
<?php get_footer(); ?>
