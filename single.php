
<?php

get_header();
get_template_part('template/single/single-breadcrumb');


while (have_posts()): the_post();

?>



<!--  start single blog-->
<section class="single-blog mt-5 mb-5">
    <div class="container">

        <?php
        get_template_part('template/single/single-main-content');

        ?>

        <?php endwhile; ?>


    </div>
</section>
<!--  end single blog-->



<?php get_footer(); ?>
