<?php
get_header();
?>


<h1 style="color: yellow; background-color:purple; padding:1rem;">holi test para hacer loop</h1>

 

    <?php

    while (have_posts() )  {
        the_post();
        get_template_part('template-parts/blog');
    }

    ?>

 

<?php
get_footer();
?>